<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Coupon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data=Coupon::latest()->get();

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
                        <a href="'.route('coupon.edit',[$row->id]).'" class="btn btn-sm btn-soft-info">
                            <i class="mdi mdi-pencil-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="'.route('coupon.destroy',[$row->id]).'"
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


        return view('admin.pages.offer.coupon.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.offer.coupon.create');
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
            'code' => 'required|unique:coupons',

         ]);

         $coupon=Coupon::create([
            'code'=>$request->code,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'valid_date' =>$request->valid_date,
            'status' =>$request->status,
         ]);


         flash()->addSuccess('Coupon Insert Successfully');
         return redirect()->route('coupon.index')->with('message','Coupon Insert Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($coupon)
    {

        $coupon=Coupon::findOrFail($coupon);
        return view('admin.pages.offer.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $coupon)
    {
        $validated = $request->validate([
            'code' => 'required|unique:coupons',
         ]);


         $coupon=Coupon::update([
            'code'=>$request->code,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'valid_date' =>$request->valid_date,
            'status' =>$request->status,
         ]);


         flash()->addSuccess('Coupon Update Successfully');
         return redirect()->route('coupon.index')->with('message','Coupon Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($coupon)
    {
        $coupon=Coupon::findOrFail($coupon)->delete();
        flash()->addSuccess('Coupon Delete Successfully');
        return redirect()->route('coupon.index')->with('message','Coupon Delete Successfully');
    }
}
