<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\Seo;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seo=Seo::first();
        return view('admin.pages.setting.seo.index',compact('seo'));
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
        //
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
    public function edit($seo)
    {
        $seo=Seo::find($seo);
        return view('admin.pages.setting.seo.edit',compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $seo)
    {

        $seo=Seo::findOrfail($seo)->update([
            'meta_title'=>$request->meta_title,
            'meta_author'=>$request->meta_author,
            'meta_tag'=>$request->meta_tag,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'google_verification'=>$request->google_verification,
            'alexa_verification'=>$request->alexa_verification,
            'google_analytics'=>$request->google_analytics,
            'google_adsense'=>$request->google_adsense,
          ]);

          flash()->addSuccess('SEO Update Successfully');
         return redirect()->route('seo.index')->with('message','SEO Update Successfully');

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
