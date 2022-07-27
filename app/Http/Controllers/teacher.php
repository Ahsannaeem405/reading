<?php

namespace App\Http\Controllers;

use App\Models\reading;
use App\Models\topicSubmit;
use App\Models\User;
use Illuminate\Http\Request;

class teacher extends Controller
{
 public function student()
 {
     $student=User::where('teacher_id',\Auth::user()->id)->get();
     return view('teacher.student',compact('student'));
 }

 public function report($id)
 {
     $reading=reading::where('user_id',$id)->where('type','user')->orWhere('type','quilconct_user')->orderBy('id','DESC')->get();
     $writing_topic=topicSubmit::where('user_id',$id)->orderBy('id','DESC')->get();
    $user = User::find($id);
     return view('teacher.report',compact('reading','writing_topic','user'));
 }

 public function reading_report($id)
 {

    $reading=reading::find($id);
    $reading->read_teacher=1;
    $reading->update();
    $student_id=$reading->user_id;
    return view('teacher.reading_report',compact('reading','student_id'));
 }

 public function writing_topic_report($id)
 {
     $topic=topicSubmit::find($id);
     return view('teacher.topic_report',compact('topic'));

 }

 public function writing_topic_report_submit($id,Request $request)
 {
     $topic=topicSubmit::find($id);
$topic->teacher_read=1;
$topic->teacher_remax=$request->remaks;
$topic->obtain=$request->stars;
$topic->update();

return redirect('teacher/student/report/'.$topic->user_id.'')->with('success','Record Updated Successfully');
 }
}
