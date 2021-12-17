<?php

namespace App\Http\Controllers;

use App\Models\writingGrammer;
use App\Models\writingTopc;
use Illuminate\Http\Request;

class WritingGrammerController extends Controller
{
    public function index()
    {

        $grammer=writingGrammer::all();
        return view('admin.writing.grammer',compact('grammer'));
    }

    public function view()
    {
        return view('admin.writing.create');
    }

    public function save(Request $request)
    {
        $grammer=new writingGrammer();
        $grammer->top_heading=$request->top_heading;
        $grammer->q_1=$request->q_1;
        $grammer->q_2=$request->q_2;
        $grammer->q_3=$request->q_3;
        $grammer->points=$request->points;
        $grammer->correct=$request->correct;

        $grammer->save();

        return redirect('admin/writing/grammer')->with('success','Grammer Question Added Successfully!');

    }
    public function edit($id)
    {
        $grammer=writingGrammer::find($id);
        return view('admin.writing.grammer_edit',compact('grammer'));
    }

    public function del($id)
    {
      $grammer=writingGrammer::find($id)->delete();

        return redirect('admin/writing/grammer')->with('success','Grammer Question Deleted Successfully!');

    }

    public function update($id,Request $request)
    {
        $grammer=writingGrammer::find($id);
        $grammer->top_heading=$request->top_heading;
        $grammer->q_1=$request->q_1;
        $grammer->q_2=$request->q_2;
        $grammer->q_3=$request->q_3;
        $grammer->points=$request->points;
        $grammer->correct=$request->correct;

        $grammer->update();

        return redirect('admin/writing/grammer')->with('success','Grammer Question updated Successfully!');
    }
}
