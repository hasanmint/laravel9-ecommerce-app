<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories=DB::table('categories')->get(); //Query Builder
        $categories=Category::all(); //Elequent ORM
        // dd($categories);
        return view('admin.pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
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

        // dd($request->all());

        // Eluquent ORM
        $category=Category::create([
           'name'=>$request->name,
           'slug'=> Str::slug($request->name , '-')
        ]);

        // Query Builder

        // $categories= array();
        //     $categories['name']=$request->name;
        //     $categories['slug'] = Str::slug($request->name , '-');

        // DB::table('categories')->insert($categories);

        flash()->addSuccess('Category Insert Successfully');
        return redirect()->route('category.index')->with('message','Category Insert Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {

        $category=Category::findOrFail($category);
        return view('admin.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:55',
        ]);

        $category=Category::findOrfail($category)->update([
            'name'=>$request->name,
            'slug'=> Str::slug($request->name , '-')
         ]);


         flash()->addSuccess('Category Update Successfully');
         return redirect()->route('category.index')->with('message','Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category=Category::findOrFail($category)->delete();
        flash()->addSuccess('Category Delete Successfully');
        return redirect()->route('category.index')->with('message','Category Delete Successfully');
    }
}
