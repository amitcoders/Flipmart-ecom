<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function manageSubCategory(){

        $data = Category::orderBy('id')
    }
}
