<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\reading;
use App\Models\storyQuestion;
use App\Models\storyQuestionDetail;
use App\Models\QuilContQuestion;
use App\Models\JoiningWord;

use Illuminate\Http\Request;
use Session;

class userReading extends Controller
{
    public function index()
    {
        $story=reading::orderBy('id','DESC')->where('type','admin')->get();

        $category=category::all();
        return view('userSide.reading.reading',compact('story','category'));
    }

    public function readNow($id)
    {
        $story=reading::find($id);
        return view('userSide.reading.readnow',compact('story'));
    }

    public function readNow2($id)
    {
        $story=reading::find($id);

        return view('userSide.reading.readnow2',compact('story'));

    }

    public function start_story($id)
    {

        $story=reading::find($id);

        return view('userSide.reading.start_story',compact('story'));
    }

    public function start_question($id,Request $request)
    {
        // dd($request);
        $value = $request->time;
        $value=  gmdate("i:s", $value);
        \Session::put('spend_time',$value);
        $story=reading::find($id);

        return view('userSide.reading.start_question',compact('story'));
    }

    public function story_save($id,Request $request)
    {

        // dd(Session::get('spend_time'));
        $reading = new reading();



        $reading->user_id = \Auth::user()->id;
        $reading->story_title =$request->story_title;

        $reading->type ='user';

        $reading->spend_time =Session::get('spend_time');
        $reading->save();
        $l = 1;
        $next=0;

        $total=0;
        $obtain=0;

        // dd($request);
        for ($i = 0; $i < count($request->question); $i++) {
            $count = 1;
            $check=0;
            $check2=0;
            $k = $next;
            $question = new storyQuestion();
            $question->question = $request->question[$i];
            $question->points = $request->point[$i];

            $question->story_id = $reading->id;
            $question->catg_quest_id = $request->q_catg_id[$i];
            $question->save();

            $total=$total+$request->point[$i];
            for ($k; $k < count($request->option); $k++) {
                if ($count <= 4) {
                    $question_detail = new storyQuestionDetail();
                    $question_detail->option = $request->option[$k];
                    $question_detail->question_id = $question->id;



                    if($check==0) {
                        $index = 'check_'.$l;
                        if (isset($request->$index)) {
                            if ($request->$index==$count) {
                                $question_detail->user_answer = 'yes';
                                $check = 1;
                     //           echo $l;
                                $l++;
                            }
                        }

                    }


                    if($check2==0) {
                        $ques=storyQuestionDetail::where('question_id',$request->q_id[$i])->where('correct','yes')->get('option')->first();
                    if($ques)
                    {
                    if($ques->option==$request->option[$k])
                    {
                        $question_detail->correct = 'yes';

                    }
                    }
                    }

                    $question_detail->save();


                    if($question_detail->correct=='yes' && $question_detail->user_answer=='yes')
                    {
                        $obtain=$obtain+$request->point[$i];
                    }


                    $count++;
                }
                else{
                    $next=$k;
                    break;
                }

            }
        }


        $update=reading::find($reading->id);
        $update->total=$total;
        $update->obtain=$obtain;
        $update->update();

        return redirect('students/dashboard');

    }

    public function cat_index($id)
    {
        $story=reading::where('cat_id',$id)->where('type','admin')->orderBy('id','DESC')->get();

        $category=category::all();
        return view('userSide.reading.reading',compact('story','category'));
    }

    public function quil_connect_index()
    {

        $story=reading::orderBy('id','DESC')->where('type','quilconct_admin')->get();

        $category=category::all();
        return view('userSide.reading.quil_connect',compact('story','category'));
    }
    public function quil_connect_start($id,Request $request)
    {
        // dd($id);
        $story=reading::find($id);
        // dd($story->quil_question);
        $words = JoiningWord::all();
        return view('userSide.reading.quilconct_start',compact('story','words'));
    }



    public function quilconct_save($id,Request $request)
    {

        $reading = new reading();
        $reading->story_title = $request->story_title;
        $reading->user_id = \Auth::user()->id;
        $reading->type ='quilconct_user';
        $spend_time = $request->spend_time;
        $spend_time=  gmdate("i:s", $spend_time);
        $reading->spend_time = $spend_time;
        $reading->cat_id = $request->cat_id;
        
        $reading->save();
        $total = 0;
        $obtain = 0;
        for ($i = 0; $i < count($request->sentence1); $i++) {
            $total = $total+$request->point[$i];
            if($request->answer[$i] == $request->user_answer[$i])
            {
                $obtain = $obtain + $request->point[$i];
            }
            $question = new QuilContQuestion();
            $question->first_sentence = $request->sentence1[$i];
            $question->second_sentence = $request->sentence2[$i];
            $question->points = $request->point[$i];
            $question->answer = $request->answer[$i];
            $question->quilconct_id = $reading->id;
            $question->add_by = 'user';
            $question->user_id = auth()->user()->id;
            $question->user_answer = $request->user_answer[$i];
            $question->save();
            $read = reading::find($reading->id);
            $read->total = $total;
            $read->obtain = $obtain;
            $read->update();
            
        }

        return redirect('students/dashboard');

    }

}
