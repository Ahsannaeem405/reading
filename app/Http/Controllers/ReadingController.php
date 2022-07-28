<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reading;
use App\Models\category;
use App\Models\ProofreadDetail;

class ReadingController extends Controller
{
    //
      
    public function quil_proofread()
    {
       
        // dd('f');
        $reading=reading::where('type','proofread_admin')->get();
        return view('admin.reading.proofread',compact('reading'));
    }

    public function proofread_add()
    {
        // dd(1);
        $category=category::all();
      
        return view('admin.reading.proofread_add',compact('category'));
    }

    public function proofread_save(Request $request)
    {

        $reading = new reading();
        $reading->story_title = $request->story_title;
        $reading->writer_name = $request->writer_name;
        $reading->cat_id = $request->cat;
        $reading->type = "proofread_admin";
        $reading->user_id = \Auth::user()->id;
        $reading->save();

        $Proofread = new ProofreadDetail();
        $Proofread->content = $request->content;
        $Proofread->proofread_id = $reading->id;

        

        $Proofread->save();
            
        
        return redirect('admin/readings/proofread')->with('success','Proofreading added successfully');
    }

    public function proofread_edit($id)
    {
        $reading=reading::find($id);
        $category=category::all();
        // $Quest_category=QuestCategory::all();
        return view('admin.reading.proofread_edit',compact('reading','category'));
    }
    public function proofread_update($id,Request $request)
        {

            $reading =reading::find($id);
            $reading->story_title = $request->story_title;
            $reading->writer_name = $request->writer_name;
            $reading->cat_id = $request->cat;


            $reading->update();

            $question=ProofreadDetail::where('proofread_id',$reading->id)->delete();

            
            $Proofread = new ProofreadDetail();
            $Proofread->content = $request->content;
            $Proofread->proofread_id = $reading->id;    
            $Proofread->save();
                   
                
            return redirect('admin/readings/proofread')->with('success','Proofread updated successfully');
        }
}
