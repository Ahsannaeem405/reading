<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\QuestCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $category=category::all();

        return view('admin.reading.category',compact('category'));
    }


    public function save(Request $request)
    {
        $cat=new category();
        $cat->name=$request->name;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/category_images/', $filename);
            $cat->image=$filename;
        }
        
        $cat->save();

        return redirect('admin/readings/category')->with('success','category added successfully');
    }

    public function del($id)

    {
        $cat=category::find($id)->delete();
        return redirect('admin/readings/category')->with('success','category deleted successfully');

    }

    public function update($id,Request $request)
    {
        $cat=category::find($id);
        $cat->name=$request->name;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/category_images/', $filename);
            $cat->image=$filename;
        }
        $cat->update();
        return redirect('admin/readings/category')->with('success','category updated successfully');

    }

    public function question_category()
    {
        // dd('ddd');
        $category=QuestCategory::all();

        return view('admin.reading.ques_category',compact('category'));
        // return view('admin.reading.ques_category');
    }


    public function quescatg_save(Request $request)
    {
        // dd('ddd');
        $cat=new QuestCategory();
        $cat->name=$request->name;
        $cat->save();

        return redirect('admin/readings/question_category')->with('success','Question category added successfully');
    }


    public function quescatg_update($id,Request $request)
    {
        $cat=QuestCategory::find($id);
        $cat->name=$request->name;
        $cat->update();
        return redirect('admin/readings/question_category')->with('success','category updated successfully');

    }
    

    public function quescatg_del($id)
    {
        $cat=QuestCategory::find($id)->delete();
        return redirect('admin/readings/question_category')->with('success','category deleted successfully');


    }
}
