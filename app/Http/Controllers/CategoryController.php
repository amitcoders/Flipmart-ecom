<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function manageCategory(){
        $data = Category::orderBy('id','Desc')->get();
        return view('admin.category.manage-category', compact('data'));
    }

    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request)
    {

        $request->validate([
            'category' => 'required',
        ]);
        $category = new Category();
        // $category->category = $request->category;
        // $category->category_slug = $this->slug_generator($request->category_slug);
        $category->category = $request->category;
        $category->category_slug = $this->slug_generator($request->category);

        $category->save();

        return back()->with('message','category added successfully');
    }

    public function slug_generator($string){
        $string = str_replace(' ','-',$string);
       $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
       return strtolower(preg_replace('/-+/', '-', $string));
    }

    public function brandStatus($id, $status){
        $amit = Category::find($id);
        $amit->status = $status;
        $amit->Save();
        return response()->json('success');
    }

    public function edit($id){
        $row = Category::find($id);
        return view('admin.category.edit-category', compact('row'));
    }


    public function delete($id){
        $c = Category::find($id);
        $c->delete();
        return back()->with('message','brand deleted successfully');
    }



    public function updateCategory(Request $request){
        $brand = Category::find($request->id);
        $brand->category = $request->category;
        $brand->Category_slug = $this->slug_generator($request->category);
        $brand->save();
         return back();
    }






}
