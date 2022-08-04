<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingGrammer;
use App\Models\QuestCategory;
class ReadingGrammerController extends Controller
{
    //
    public function index()
    {
        // dd('45');
        $grammer=ReadingGrammer::all();
        return view('admin.reading.grammer.grammer',compact('grammer'));

    }

    public function create_grammer()
    {
        // dd('');
        $question_categorys = QuestCategory::all();
        return view('admin.reading.grammer.create', compact('question_categorys'));
    }
    public function save_grammer(Request $request)
    {
        // dd($request);
        $grammer=new ReadingGrammer();
        // $grammer->top_heading=$request->top_heading;
        $grammer->q_part1=$request->q_1;
        $grammer->q_part2=$request->q_2;
        $grammer->q_part3=$request->q_3;
        $grammer->points=$request->points;
        $grammer->correct_answer=$request->correct_answer;
        $grammer->catg_id=$request->question_category;

        $grammer->save();

        return redirect('admin/readings/grammer')->with('success','Grammer Question Added Successfully!');

    }
    public function edit_grammer($id)
    {
        // dd('ll');
        $grammer=ReadingGrammer::find($id);
        $question_categorys = QuestCategory::all();

        return view('admin.reading.grammer.grammer_edit',compact('grammer','question_categorys'));
    }
    public function update_grammer($id,Request $request)
    {
        // dd($request);
        $grammer=ReadingGrammer::find($id);
        $grammer->q_part1=$request->q_1;
        $grammer->q_part2=$request->q_2;
        $grammer->q_part3=$request->q_3;
        $grammer->points=$request->points;
        $grammer->correct_answer=$request->Correct_Answer;
        $grammer->catg_id=$request->question_category;

        $grammer->update();
        return redirect('admin/readings/grammer')->with('success','Grammer Question updated Successfully!');
    }
    public function del_grammer($id)
    {
      $grammer=ReadingGrammer::find($id)->delete();

        return redirect('admin/readings/grammer')->with('success','Grammer Question Deleted Successfully!');

    }

    public function grammer_start()
    {
        // $story=reading::find($id);
        // dd($story->quil_question);
        $grammer_questions = ReadingGrammer::inRandomOrder()->limit(5)->get();
        $total_question = $grammer_questions->count();   
        // dd($grammer_questions);
        return view('userSide.reading.grammer.grammer_start',compact('grammer_questions','total_question'));
    }
}
