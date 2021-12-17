<?php

namespace App\Http\Controllers;

use App\Models\topicSubmit;
use App\Models\writingTopc;
use Illuminate\Http\Request;

class WritingTopcController extends Controller
{
    public function index()
    {
        $topic=writingTopc::all();

        return view('admin.writing.topics',compact('topic'));
    }

    public function topic_index()
    {
        $topics=writingTopc::all();
         return view('userSide.writing.topics',compact('topics'));
    }

    public function save(Request $request)
    {
        $topic=new writingTopc();

        $topic->name=$request->name;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $topic->image = $filename;

        }
        $topic->short_desc=$request->short_desc;
        $topic->user_id=\Auth::user()->id;
        $topic->save();

        return redirect('/admin/writing/topics')->with('success','Topic Added successfully');
    }
public function topic_detail($id)
{
    $topic=writingTopc::find($id);
    return view('userSide.writing.topic_detail',compact('topic'));
}
    public function topic_del($id)
    {
        $topic=writingTopc::find($id)->delete();
        return redirect('/admin/writing/topics')->with('success','Topic Deleted successfully');


    }

    public function topic_update($id,Request $request)
    {
        $topic=writingTopc::find($id);

        $topic->name=$request->name;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $topic->image = $filename;

        }
        $topic->short_desc=$request->short_desc;
        $topic->update();
        return redirect('/admin/writing/topics')->with('success','Topic updated successfully');



    }

    public function topic_submit($id,Request $request)
    {

     $topic_sub=new topicSubmit();
     $topic_sub->content=$request->content_data;
     $topic_sub->user_id=\Auth::user()->id;
     $topic_sub->topic_id=$id;
     $topic_sub->save();

     return redirect('/students/dashboard')->with('success','Record Submitted Successfully!');

    }
}
