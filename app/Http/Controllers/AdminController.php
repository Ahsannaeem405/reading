<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\QuestCategory;
use App\Models\QuilContQuestion;

use App\Models\reading;
use App\Models\storyQuestion;
use App\Models\storyQuestionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{   
    public function index()
    {
        $students=User::where('role','student')->get();
        // dd($students[0]->teacher);
        $teacher=User::where('role','teacher')->get();
        return  view('admin.students.index',compact('students','teacher'));
    }


    public function teacher_update(Request $request)
    {

        $stu=User::find($request->student_id);
        //dd($request->teacher_id);
        $stu->teacher_id=$request->teacher_id;
        $stu->status='assigned';
        $stu->update();
        return redirect('admin/students')->with('success','Teacher Assigned successfully');
    }

    public function stu_del($id)
        {
            $stu=User::find($id)->delete();
            return redirect('admin/students')->with('success','Student Deleted successfully');

        }

        public function stu_edit($id)
        {
            $stu=User::find($id);
            $teacher=User::where('role','teacher')->get();

            return view('admin.students.edit',compact('stu','teacher'));
        }

        public function stu_update($id,Request $request)
        {
        // dd($request->name);
            $stu=User::find($id);
            $stu->name=$request->name;
            $stu->email=$request->email;
            $stu->phone=$request->phone;
            $stu->teacher_id=$request->teacher_id;
            if($request->password!=null)
            {

                $stu->password=Hash::make($request->password);

            }
            $stu->update();
            return redirect('admin/students')->with('success','Student updated successfully');

        }


        public function teacher_index()
        {
            $teacher=User::where('role','teacher')->get();
            return view('admin.teacher.index',compact('teacher'));
        }
        public function teacher_store(Request $request)
        {
            $stu=new User();
            $stu->name=$request->name;
            $stu->email=$request->email;
            $stu->phone=$request->phone;

            if($request->password!=null)
            {
                $stu->password=Hash::make($request->password);
            }

            $stu->perposal_title=$request->perposal_title;
            $stu->job_title=$request->job_title;
            $stu->short_desc=$request->short_desc;
            $stu->role='teacher';

            $stu->save();
            return redirect('admin/teacher')->with('success','Teacher added successfully');


        }

    public function teacher_edit($id)
    {
        $stu=User::find($id);

        return view('admin.teacher.edit',compact('stu'));
    }
        public function teacherPro_update($id,Request $request)
        {
            $stu=User::find($id);
            //dd($request->email);
            $stu->name=$request->name;
            $stu->email=$request->email;
            $stu->phone=$request->phone;

            if($request->password!=null)
            {
                $stu->password=Hash::make($request->password);
            }

            $stu->perposal_title=$request->perposal_title;
            $stu->job_title=$request->job_title;
            $stu->short_desc=$request->short_desc;


            $stu->update();
            return redirect('admin/teacher')->with('success','Teacher updated successfully');
        }
    public function teacher_del($id)
    {
        $tec=User::find($id)->delete();
        return redirect('admin/teacher')->with('success','Teacher Deleted successfully');


    }

    public function story_index()
    {
        $reading=reading::where('type','admin')->get();
        return view('admin.reading.story',compact('reading'));
    }
    public function add_story()
    {
        //dd(1);
        $category=category::all();
        $Quest_category=QuestCategory::all();
        return view('admin.reading.storyAdd',compact('category','Quest_category'));
    }

    public function save_story(Request $request)
    {

        // dd($request);
        $reading = new reading();
        $reading->story_title = $request->story_title;
        $reading->writer_name = $request->writer_name;
        $reading->cat_id = $request->cat;
        $reading->reread = $request->reread;

        if ($request->hasfile('story_image')) {
            $file = $request->file('story_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $reading->story_image = $filename;

        }

        if ($request->hasfile('writer_image')) {
            $file = $request->file('writer_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $reading->writer_image = $filename;

        }


        $reading->short_detail = $request->short_detail;
        $reading->long_detail = $request->long_detail;
        $reading->content = $request->content_story;
        $reading->user_id = \Auth::user()->id;

        $reading->save();


        $l = 1;
        $next=0;

        // dd($request);
        for ($i = 0; $i < count($request->question); $i++) {
            if($request->question[$i] !=Null)
            {

                $count = 1;
                $check=0;
                $k = $next;
                $question = new storyQuestion();
                $question->question = $request->question[$i];
                $question->points = $request->point[$i];
                $question->story_id = $reading->id;
                $question->catg_quest_id = $request->question_cat[$i];


                $question->save();

                for ($k; $k < count($request->option); $k++) {
                    if ($count <= 4) {
                        $question_detail = new storyQuestionDetail();
                        $question_detail->option = $request->option[$k];
                        $question_detail->question_id = $question->id;



                        if($check==0) {
                            $index = 'check_'.$l;
                            if (isset($request->$index)) {
                            if ($request->$index==$count) {
                                $question_detail->correct = 'yes';
                                $check = 1;
                                echo $l;
                                $l++;
                            }
                            } else {

                                $index = 'check_'.$l;
                                while (!isset($request->$index)) {
                                    echo 'data'.$l;
                                    $l++;
                                    $index = 'check_'.$l;

                                }
                                if(isset($request->$index))
                                {
                                    if ($request->$index==$count) {
                                        $question_detail->correct = 'yes';
                                        $check = 1;
                                        $l++;
                                    }
                                }
                            }
                        }
                        $question_detail->save();

                        $count++;
                    }
                    else{
                        $next=$k;
                        break;
                    }

                }
            }
        }
        return redirect('admin/readings/story')->with('success','Story added successfully');
    }


        public function story_update($id,Request $request)
        {

            //dd($request);
            $reading =reading::find($id);
            $reading->story_title = $request->story_title;
            $reading->writer_name = $request->writer_name;
            $reading->cat_id = $request->cat;
            $reading->reread = $request->reread;

            if ($request->hasfile('story_image')) {
                $file = $request->file('story_image');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename = time() . '.' . $extension;
                $file->move('uploads/appsetting/', $filename);

                $reading->story_image = $filename;

            }

            if ($request->hasfile('writer_image')) {
                $file = $request->file('writer_image');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename = time() . '.' . $extension;
                $file->move('uploads/appsetting/', $filename);

                $reading->writer_image = $filename;

            }


            $reading->short_detail = $request->short_detail;
            $reading->long_detail = $request->long_detail;
            $reading->content = $request->content_story;
            $reading->user_id = \Auth::user()->id;

            $reading->update();
            //dd($request->option);

            $question=storyQuestion::where('story_id',$reading->id)->delete();
            $questionDetail=storyQuestionDetail::where('question_id',$reading->id)->delete();


            $l = 1;
            $next=0;

            // dd($request);
            for ($i = 0; $i < count($request->question); $i++) {
                if($request->question[$i] !=Null)
                {
                    $count = 1;

                    $check=0;
                    $k = $next;
                    $question = new storyQuestion();
                    $question->question = $request->question[$i];
                    $question->points = $request->point[$i];
                    $question->story_id = $reading->id;
                    $question->catg_quest_id = $request->question_cat[$i];

                    $question->save();

                    for ($k; $k < count($request->option); $k++) {
                        if ($count <= 4) {
                            $question_detail = new storyQuestionDetail();
                            $question_detail->option = $request->option[$k];
                            $question_detail->question_id = $question->id;



                            if($check==0) {
                                $index = 'check_'.$l;
                                if (isset($request->$index)) {
                                    if ($request->$index==$count) {
                                        $question_detail->correct = 'yes';
                                        $check = 1;
                                        echo $l;
                                        $l++;
                                    }
                                } else {

                                    $index = 'check_'.$l;
                                    while (!isset($request->$index)) {
                                        echo 'data'.$l;
                                        $l++;
                                        $index = 'check_'.$l;

                                    }
                                    if(isset($request->$index))
                                    {
                                        if ($request->$index==$count) {
                                            $question_detail->correct = 'yes';
                                            $check = 1;
                                            $l++;
                                        }
                                    }
                                }
                            }

                            $question_detail->save();

                            $count++;
                        }
                        else{

                            $next=$k;
                            break;

                        }

                    }
                }
            }
            return redirect('admin/readings/story')->with('success','Story updated successfully');
        }

    public function story_del($id)
    {
        $read=reading::find($id)->delete();
        return redirect('admin/readings/story')->with('success','Story Deleted successfully');


    }

    public function story_edit($id)
    {
        $reading=reading::find($id);
    $category=category::all();
    $Quest_category=QuestCategory::all();
        return view('admin.reading.storyEdit',compact('reading','category','Quest_category'));
    }

    public function quilconnect_index()
    {
       

        $reading=reading::where('type','quilconct_admin')->get();
        return view('admin.reading.quil_connect',compact('reading'));
    }
    public function quilcon_add()
    {
        // dd(1);
        $category=category::all();
        $Quest_category=QuestCategory::all();
        return view('admin.reading.quilconnect_Add',compact('category','Quest_category'));
    }

    public function quilcon_save(Request $request)
    {

        // dd($request);
        $reading = new reading();
        $reading->story_title = $request->story_title;
        $reading->writer_name = $request->writer_name;
        $reading->cat_id = $request->cat;
        $reading->type = "quilconct_admin";

        if ($request->hasfile('story_image')) {
            $file = $request->file('story_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $reading->story_image = $filename;

        }

        if ($request->hasfile('writer_image')) {
            $file = $request->file('writer_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $reading->writer_image = $filename;

        }


     

        $reading->user_id = \Auth::user()->id;

        $reading->save();


        // $l = 1;
        // $next=0;

        // // dd($request);
        for ($i = 0; $i < count($request->sentence1); $i++) {
            if($request->sentence1[$i] !=Null)
            {

                $question = new QuilContQuestion();
                $question->first_sentence = $request->sentence1[$i];
                $question->points = $request->point[$i];
                $question->quilconct_id = $reading->id;
                $question->second_sentence = $request->sentence2[$i];
                $question->answer = $request->answer[$i];
                $question->user_id = auth()->user()->id;

                $question->save();
            }
        }
        return redirect('admin/readings/quilconnect')->with('success','quil connect added successfully');
    }

    public function quilcon_edit($id)
    {
        $reading=reading::find($id);
        $category=category::all();
        // $Quest_category=QuestCategory::all();
        return view('admin.reading.storyEdit',compact('reading','category'));
    }
}

