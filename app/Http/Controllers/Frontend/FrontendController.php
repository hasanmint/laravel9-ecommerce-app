<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
// use DB;

class FrontendController extends Controller
{
    public function index(){
        $categories=Category::all();
        // $subcategories=Subcategory::all();
        // $childcategories=Childcategory::all();
        return view('frontend.index',compact('categories'));
    }
}
