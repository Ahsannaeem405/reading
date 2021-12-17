<?php

namespace App\Http\Controllers;

use App\Models\category;
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
        $cat->update();
        return redirect('admin/readings/category')->with('success','category updated successfully');

    }
}
