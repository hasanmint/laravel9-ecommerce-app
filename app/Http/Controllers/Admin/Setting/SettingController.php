<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image, File;
use App\Models\Setting\Setting;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        return view('admin.pages.setting.setting.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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
    public function edit($setting)
    {
        $setting=Setting::find($setting);
        return view('admin.pages.setting.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Setting $setting )
    {
        $data = $request->validate([
            'main_email' => 'required|string|max:255',
            'address' => 'required',
            'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'favicon' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        // dd($data);
        if ($request->has('logo')) {
            @unlink(public_path('uploads/'.$setting->logo));
            $logo_name = uniqid() . '.' . $data['logo']->getClientOriginalExtension();
            $logo_path = 'uploads/' . $logo_name;
            Image::make($data['logo'])->resize(320, 240)->save(public_path($logo_path));
            $data['logo'] = $logo_path;
        } else {
            $data['logo'] = $setting->logo;
        }


        if ($request->has('favicon')) {
            // unlink(public_path($setting->logo));
            $logo_name = uniqid() . '.' . $data['favicon']->getClientOriginalExtension();
            $logo_path = 'uploads/' . $logo_name;
            Image::make($data['favicon'])->resize(320, 240)->save(public_path($logo_path));
            $data['favicon'] = $logo_path;
        } else {
            $data['favicon'] = $setting->logo;
        }


        $setting->update($data);

         flash()->addSuccess('setting Update Successfully');
         return redirect()->route('setting.index')->with('message','setting Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
