<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use Image;
use File;
use App\Models\Brand;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data=Brand::latest()->get();

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
                        <a href="'.route('brand.edit',[$row->id]).'" class="btn btn-sm btn-soft-info">
                            <i class="mdi mdi-pencil-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="'.route('brand.destroy',[$row->id]).'"
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


        return view('admin.pages.brand.index');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand=Brand::get();
        return view('admin.pages.brand.create',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:brands|max:55',
         ]);

         $slug=Str::slug($request->brand_name, '-');

         $data=array();
         $data['name']=$request->name;
         $data['slug']=Str::slug($request->name, '-');
         $data['front_page']=$request->front_page;
          //working with image
           $photo=$request->image;
           $photoname=uniqid().'.'.$photo->getClientOriginalExtension();
           // $photo->move('public/files/brand/',$photoname);  //without image intervention
           Image::make($photo)->resize(240,120)->save('public/upload/brand/'.$photoname);  //image intervention

         $data['image']='public/upload/brand/'.$photoname;   // public/files/brand/plus-point.jpg
         Brand::create($data);

        flash()->addSuccess('Brand Insert Successfully');
        return redirect()->route('brand.index')->with('message','Brand Insert Successfully');
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
    public function edit($brand)
    {
        $brand=Brand::findOrFail($brand);
        return view('admin.pages.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $brand)
    {
        $slug=Str::slug($request->brand_name, '-');
    	$data=array();
        $data['name']=$request->name;
        $data['slug']=Str::slug($request->name, '-');
        $data['front_page']=$request->front_page;
    	if ($request->image) {
    		  if (File::exists($request->old_logo)) {
    		         unlink($request->old_logo);
                     File::delete(public_path($image));
    	        }
    		  $photo=$request->image;
    	      $photoname=uniqid().'.'.$photo->getClientOriginalExtension();
    	      Image::make($photo)->resize(240,120)->save('public/upload/brand/'.$photoname);
    	      $data['image']='public/upload/brand/'.$photoname;
    	      Brand::where('id',$request->id)->update($data);
              flash()->addSuccess('brand Update Successfully');
              return redirect()->route('brand.index')->with('message','brand Update Successfully');
    	}else{
		  $data['image']=$request->old_logo;
	      Brand::where('id',$request->id)->update($data);
          flash()->addSuccess('brand Update Successfully');
          return redirect()->route('brand.index')->with('message','brand Update Successfully');
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($brand)
    {
        $brand=Brand::findOrFail($brand);
        $image = $brand->image;
        $brand->delete();
        File::delete(public_path($image));


        flash()->addSuccess('Brand Delete Successfully');
        return redirect()->route('brand.index')->with('message','brand Delete Successfully');
    }

}
