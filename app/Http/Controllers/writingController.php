<?php

namespace App\Http\Controllers;

use App\Models\grammerSubmit;
use App\Models\grammerSubmitDetail;
use App\Models\writingGrammer;
use http\Env\Response;
use Illuminate\Http\Request;

class writingController extends Controller
{
  public function index()
  {
      $grammer=writingGrammer::inRandomOrder()->limit(1)->get()->first();

      return view('userSide.writing.grammer',compact('grammer'));
  }

  public function grammer_submit(Request $request)
  {

if($request->limit==1) {
    $question = writingGrammer::find($request->q_id);
    $right = 0;
    $c = 'q_' . $request->correct;
    $correct = $question->$c;
    $part1 = $part2 = $part3 = "";

//return $correct;
    if ($question->correct == 1) {
        $part1 = $request->ans;
    } else {
        $part1 = $question->q_1;
    }

    if ($question->correct == 2) {
        $part2 = $request->ans;
    } else {
        $part2 = $question->q_2;
    }

    if ($question->correct == 3) {
        $part3 = $request->ans;
    } else {
        $part3 = $question->q_3;
    }

    if ($correct == $request->ans) {
        $right = 1;

    }

    $final = $part1 . ' ' . $part2 . ' ' . $part3;


    if (session()->has('grammer_sub')) {

        $id = session()->get('grammer_sub');

        $grammer_submit =grammerSubmit::find($id);
        $grammer_submit->total = $grammer_submit->total + $request->points;
        if ($right == 1) {
            $grammer_submit->obtain = $grammer_submit->obtain + $request->points;
        }
        $grammer_submit->update();


        $grammer_submit_dt = new grammerSubmitDetail();
        $grammer_submit_dt->grammer_submit_id = $id;
        $grammer_submit_dt->grammer_id = $request->q_id;
        if ($right == 1) {
            $grammer_submit_dt->correct = 1;
        }
        $grammer_submit_dt->point = $request->points;
        $grammer_submit_dt->answer = $request->ans;
        $grammer_submit_dt->save();

    } else {

        $grammer_submit = new grammerSubmit();
        $grammer_submit->user_id = \Auth::user()->id;
        $grammer_submit->total = $grammer_submit->total + $request->points;
        if ($right == 1) {
            $grammer_submit->obtain = $grammer_submit->obtain + $request->points;
        }
        $grammer_submit->save();

        $grammer_submit_dt = new grammerSubmitDetail();
        $grammer_submit_dt->grammer_submit_id = $grammer_submit->id;
        $grammer_submit_dt->grammer_id = $request->q_id;
        if ($right == 1) {
            $grammer_submit_dt->correct = 1;
        }
        $grammer_submit_dt->point = $request->points;
        $grammer_submit_dt->answer = $request->ans;
        $grammer_submit_dt->save();


        session()->put('grammer_sub', $grammer_submit->id);
    }


    $prev_id = $request->prev_id;
    $check = 0;
    $exp = explode(',', $prev_id);
    $grammer = '';

    while ($check == 0) {
        //return 1;
        $grammer = writingGrammer::inRandomOrder()->limit(1)->get()->first();
        for ($i = 0; $i < count($exp); $i++) {


            if (intval($exp[$i]) == $grammer->id) {

                $check = 0;
                break;

            } else {

                $check = 1;
            }
        }

    }

    return response()->json(array(['right' => $right, 'question' => $final, 'new_ques' => $grammer, 'check' => $check]));
}

else{

    $question = writingGrammer::find($request->q_id);
    $right = 0;
    $c = 'q_' . $request->correct;
    $correct = $question->$c;
    $part1 = $part2 = $part3 = "";

//return $correct;
    if ($question->correct == 1) {
        $part1 = $request->ans;
    } else {
        $part1 = $question->q_1;
    }

    if ($question->correct == 2) {
        $part2 = $request->ans;
    } else {
        $part2 = $question->q_2;
    }

    if ($question->correct == 3) {
        $part3 = $request->ans;
    } else {
        $part3 = $question->q_3;
    }

    if ($correct == $request->ans) {
        $right = 1;

    }

    $final = $part1 . ' ' . $part2 . ' ' . $part3;


    if (session()->has('grammer_sub')) {

        $id = session()->get('grammer_sub');

        $grammer_submit =grammerSubmit::find($id);
        $grammer_submit->total = $grammer_submit->total + $request->points;
        if ($right == 1) {
            $grammer_submit->obtain = $grammer_submit->obtain + $request->points;
        }
        $grammer_submit->update();

        $grammer_submit_dt = new grammerSubmitDetail();
        $grammer_submit_dt->grammer_submit_id = $id;
        $grammer_submit_dt->grammer_id = $request->q_id;
        if ($right == 1) {
            $grammer_submit_dt->correct = 1;
        }
        $grammer_submit_dt->point = $request->points;
        $grammer_submit_dt->answer = $request->ans;
        $grammer_submit_dt->save();

    } else {

        $grammer_submit = new grammerSubmit();
        $grammer_submit->user_id = \Auth::user()->id;
        $grammer_submit->total = $grammer_submit->total + $request->points;
        if ($right == 1) {
            $grammer_submit->obtain = $grammer_submit->obtain + $request->points;
        }
        $grammer_submit->save();

        $grammer_submit_dt = new grammerSubmitDetail();
        $grammer_submit_dt->grammer_submit_id = $grammer_submit->id;
        $grammer_submit_dt->grammer_id = $request->q_id;
        if ($right == 1) {
            $grammer_submit_dt->correct = 1;
        }
        $grammer_submit_dt->point = $request->points;
        $grammer_submit_dt->answer = $request->ans;
        $grammer_submit_dt->save();


        session()->put('grammer_sub', $grammer_submit->id);
    }


    $prev_id = $request->prev_id;
    $check = 0;
    $exp = explode(',', $prev_id);
    $grammer = '';

session()->forget('grammer_sub');

    return response()->json(array(['right' => $right, 'question' => $final, 'new_ques' => $grammer, 'check' => $check]));
}

  }
}
