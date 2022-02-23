<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
    public function addBrand()
    {
        return view('admin.brand_add');
    }

    // public function saveBrand(Request $request)
    // {
    //     $request->validate([
    //         'brand_name' => 'required | unique:brands, brand_name | max:2',
    //     ]);
    //     $brand = new Brand();
    //     $brand->brand_name = $request->brand_name;
    //     $brand->brand_slug = $this->slug_generator($request->brand_name);
    //     $brand->save();
    //     return back()->with('message','Brand added successfully');
    // }

    public function saveBrand(Request $request)
    {
       
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slug_generator($request->brand_name);
        $brand->save();

        return back()->with('message','Brand added successfully');
    }

    public function slug_generator($string){
        $string = str_replace(' ','-',$string);
       $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
       return strtolower(preg_replace('/-+/', '-', $string));
    }

    public function manageBrand()
    {
        $brand = Brand::orderBy('id','desc')->get();
        return view('admin.brand_list', compact('brand'));
    }

    public function inactive($id){
       $brand = Brand::find($id);
       $brand->status = 0;
       $brand->save();

    }

    public function active($id){
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->save();


        return back();
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return back()->with('message','brand deleted successfully');
    }

    public function edit($id){
        $row = Brand::find($id);
        return view('admin.brand_edit', compact('row'));
    }

   public function updateBrand(Request $request){
       $brand = Brand::find($request->id);
       $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slug_generator($request->brand_name);
        $brand->save();
        return back();
   }




}
