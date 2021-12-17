<?php

namespace App\Http\Controllers;

use App\Models\grammerSubmit;
use App\Models\reading;
use App\Models\topicSubmit;
use App\Models\writingGrammer;
use Illuminate\Http\Request;

class userDashboard extends Controller
{

    public function index()
    {


        $reading=reading::where('user_id',\Auth::user()->id)->where('type','user')->orderBy('id','DESC')->get();

        $writing_topic=topicSubmit::where('user_id',\Auth::user()->id)->orderBy('id','DESC')->get();
        $writing_grammer=grammerSubmit::where('user_id',\Auth::user()->id)->orderBy('id','DESC')->get();

        return view('userSide.dashboard',compact('reading','writing_topic','writing_grammer'));
    }

    public function read_report($id)
    {
        $reading=reading::find($id);
       return view('userSide.reading.report.reading_report',compact('reading'));
    }

    public function writing_topic_report($id)
    {
        $topic=topicSubmit::find($id);
        return view('userSide.writing.report.topic_report',compact('topic'));

    }

    public function writing_grammer_report($id)
    {

        $grammer_sub=grammerSubmit::find($id);
        return view('userSide.writing.report.grammer_report',compact('grammer_sub'));
    }
}
