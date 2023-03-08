<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Pickuppoint;


class PickuppointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data=Pickuppoint::latest()->get();

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
                        <a href="'.route('pickuppoint.edit',[$row->id]).'" class="btn btn-sm btn-soft-info">
                            <i class="mdi mdi-pencil-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="'.route('pickuppoint.destroy',[$row->id]).'"
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


        return view('admin.pages.pickuppoint.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.pickuppoint.create');
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
            'name' => 'required|unique:pickuppoints',
            'address' => 'required',
            'phone' => 'required',
         ]);

         $warehouse=Pickuppoint::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'phone_two'=>$request->phone_two,
         ]);


         flash()->addSuccess('Pickuppoint Insert Successfully');
         return redirect()->route('pickuppoint.index')->with('message','Pickuppoint Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pickuppoint)
    {
        $pickuppoint=Pickuppoint::findOrFail($pickuppoint);
        return view('admin.pages.pickuppoint.edit',compact('pickuppoint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pickuppoint)
    {
        $pickuppoint=Pickuppoint::findOrFail($pickuppoint);
        return view('admin.pages.pickuppoint.edit',compact('pickuppoint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pickuppoint)
    {
        $validated = $request->validate([
            // 'name' => 'unique:pickuppoints',
         ]);

         $warehouse=Pickuppoint::findOrfail($pickuppoint)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'phone_two'=>$request->phone_two,
         ]);


         flash()->addSuccess('Pickuppoint Insert Successfully');
         return redirect()->route('pickuppoint.index')->with('message','Pickuppoint Insert Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pickuppoint)
    {
        $pickuppoint=Pickuppoint::findOrFail($pickuppoint)->delete();
        flash()->addSuccess('Pickuppoint Delete Successfully');
        return redirect()->route('pickuppoint.index')->with('message','Pickuppoint Delete Successfully');
    }
}
