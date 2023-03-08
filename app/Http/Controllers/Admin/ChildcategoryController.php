<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Subcategory;
use DB;
use DataTables;
use Illuminate\Support\Str;
class ChildcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data=DB::table('childcategories')->leftJoin('categories','childcategories.category_id','categories.id')->leftJoin('subcategories','childcategories.subcategory_id','subcategories.id')
    		->select('categories.name','subcategories.name','childcategories.*')->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = ' <ul class="gap-1 mb-0 list-unstyled hstack">
                    <li>
                        <a href="job-details.html"
                            class="btn btn-sm btn-soft-primary"><i
                                class="mdi mdi-eye-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="'.route('childcategory.edit',[$row->id]).'" class="btn btn-sm btn-soft-info">
                            <i class="mdi mdi-pencil-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="'.route('childcategory.destroy',[$row->id]).'"
                            class="btn btn-sm btn-soft-danger">
                            <i class="mdi mdi-delete-outline"></i>
                        </a>
                    </li>
                </ul>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $category=Category::get();
        return view('admin.pages.childcategory.index',compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        $subcategories=Subcategory::get();
        return view('admin.pages.childcategory.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat=DB::table('subcategories')->where('id',$request->subcategory_id)->first();

        $data=array();
        $data['category_id']=$cat->category_id;
        $data['subcategory_id']=$request->subcategory_id;
        $data['slug']=Str::slug($request->name, '-');
        $data['name']=$request->name;
        DB::table('childcategories')->insert($data);


       flash()->addSuccess('Childcategory Insert Successfully');
       return redirect()->route('childcategory.index')->with('message','Childcategory Insert Successfully');
    //    dd($cat);
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
    public function edit($childcategory)
    {
        $childcategory=Childcategory::findOrFail($childcategory);
        $categories=Category::get();
        $subcategories=Subcategory::get();
        return view('admin.pages.childcategory.edit',compact('childcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $childcategory)
    {
        $childcategory=DB::table('subcategories')->where('id',$request->subcategory_id)->first();

        $data=array();
        $data['category_id']=$childcategory->category_id;
        $data['subcategory_id']=$request->subcategory_id;
        $data['slug']=Str::slug($request->name, '-');
        $data['name']=$request->name;
        DB::table('childcategories')->insert($data);


           flash()->addSuccess('Childcategory Update Successfully');
           return redirect()->route('childcategory.index')->with('message','Childcategory Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($childcategory)
    {
        $childcategory=Childcategory::findOrFail($childcategory)->delete();
        flash()->addSuccess('Child Category Delete Successfully');
        return redirect()->route('childcategory.index')->with('message','Child Category Delete Successfully');
    }
}
