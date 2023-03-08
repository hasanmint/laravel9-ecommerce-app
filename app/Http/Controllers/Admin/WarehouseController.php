<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data=Warehouse::latest()->get();

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
                        <a href="'.route('warehouse.edit',[$row->id]).'" class="btn btn-sm btn-soft-info">
                            <i class="mdi mdi-pencil-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="'.route('warehouse.destroy',[$row->id]).'"
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


        return view('admin.pages.warehouse.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.warehouse.create');
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
            'name' => 'required|unique:warehouses',
            'address' => 'required',
            'phone' => 'required',
         ]);

         $warehouse=Warehouse::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
         ]);


         flash()->addSuccess('warehouse Insert Successfully');
         return redirect()->route('warehouse.index')->with('message','Category Insert Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($warehouse)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($warehouse)
    {
        $warehouse=Warehouse::findOrFail($warehouse);
        return view('admin.pages.warehouse.edit',compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $warehouse)
    {
        $validated = $request->validate([
            'name' => 'required|unique:warehouses',

         ]);

         $warehouse=Warehouse::findOrfail($warehouse)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
         ]);

         flash()->addSuccess('warehouse Update Successfully');
         return redirect()->route('warehouse.index')->with('message','Category Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($warehouse)
    {
        $warehouse=Warehouse::findOrFail($warehouse)->delete();
        flash()->addSuccess('Warehouse Delete Successfully');
        return redirect()->route('warehouse.index')->with('message','Warehouse Delete Successfully');
    }
}
