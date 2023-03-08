<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subcategories=Subcategory::all();
        return view('admin.pages.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.pages.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:55',
        ]);

        $category=Subcategory::create([
           'category_id'=>$request->category_id,
           'name'=>$request->name,
           'slug'=> Str::slug($request->name , '-')
        ]);

        flash()->addSuccess('Sub Category Insert Successfully');
        return redirect()->route('subcategory.index')->with('message','Sub Category Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($subcategory)
    {
        $categories=Category::all();
        $subcategory=Subcategory::findOrFail($subcategory);
        return view('admin.pages.subcategory.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subcategory)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:55',
        ]);

        $category=Subcategory::findOrfail($subcategory)->update([
           'category_id'=>$request->category_id,
           'name'=>$request->name,
           'slug'=> Str::slug($request->name , '-')
         ]);


         flash()->addSuccess('SubCategory Update Successfully');
         return redirect()->route('subcategory.index')->with('message','Sub Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($subcategory)
    {
        $subcategory=Subcategory::findOrFail($subcategory)->delete();
        flash()->addSuccess('Sub Category Delete Successfully');
        return redirect()->route('subcategory.index')->with('message','Sub Category Delete Successfully');
    }
}
