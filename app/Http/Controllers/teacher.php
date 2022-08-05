<?php

namespace App\Http\Controllers;

use App\Models\reading;
use App\Models\topicSubmit;
use App\Models\User;
use App\Models\GrammerReport;
use Illuminate\Http\Request;
use DB;

class teacher extends Controller
{
 public function student()
 {
     $student=User::where('teacher_id',\Auth::user()->id)->get();
     return view('teacher.student',compact('student'));
 }

 public function report($id)
 {
     $reading=reading::where('user_id',$id)->whereIn('type', ['user', 'quilconct_user', 'proofread_user'])->orderBy('id','DESC')->get();
    //  dd($reading);
    $writing_topic=topicSubmit::where('user_id',$id)->orderBy('id','DESC')->get();
    $reading_grammer=GrammerReport::where('user_id',$id)->orderBy('id','DESC')->get();
    $user = User::find($id);
    return view('teacher.report',compact('reading','writing_topic','user','reading_grammer'));
 }

 public function reading_report($id)
 {

    $reading=reading::find($id);
    $reading->read_teacher=1;
    $reading->update();
    $student_id=$reading->user_id;
    return view('teacher.reading_report',compact('reading','student_id'));
 }

 public function grammer_report($id)
 {

// dd('');
    $reading=GrammerReport::find($id);
        // dd($reading);

    //    return view('userSide.reading.grammer.report',compact('reading'));

    // $reading=reading::find($id);
    $reading->read_teacher=1;
    $reading->update();
    $student_id=$reading->user_id;
    return view('teacher.grammer_report',compact('reading','student_id'));
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

    public function proofreading_report_submit($id,Request $request)
    {
        // dd($request);
    $reading=reading::find($id);
    $reading->obtain=$request->stars;
    $reading->update();
    $proofread = DB::table('proofread_details')->where('proofread_id', $id)->update(['teacher_remarks' => $request->remarks]);
    $user_id = $reading->user_id;

    return redirect('teacher/student/report/'.$user_id.'')->with('success','Record Updated Successfully');
    }


}
