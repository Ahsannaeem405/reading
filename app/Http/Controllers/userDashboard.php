<?php

namespace App\Http\Controllers;

use App\Models\grammerSubmit;
use App\Models\reading;
use App\Models\topicSubmit;
use App\Models\writingGrammer;
use App\Models\GrammerReport;
use Illuminate\Http\Request;

class userDashboard extends Controller
{

    public function index()
    {


        $reading=reading::where('user_id',\Auth::user()->id)->whereIn('type', ['user', 'quilconct_user', 'proofread_user'])->orderBy('id','DESC')->get();
        // dd($reading);

        $writing_topic=topicSubmit::where('user_id',\Auth::user()->id)->orderBy('id','DESC')->get();
        $writing_grammer=grammerSubmit::where('user_id',\Auth::user()->id)->orderBy('id','DESC')->get();

        $reading_grammer=GrammerReport::where('user_id',\Auth::user()->id)->orderBy('id','DESC')->get();
        // dd($reading_grammer);

        return view('userSide.dashboard',compact('reading','writing_topic','writing_grammer','reading_grammer'));
    }

    public function read_report($id)
    {
        $reading=reading::find($id);
       return view('userSide.reading.report.reading_report',compact('reading'));
    }

    public function read_grammer_report($id)
    {
        // dd($id);
        $reading=GrammerReport::find($id);
        // dd($reading);
       return view('userSide.reading.grammer.report',compact('reading'));
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
