<?php
namespace App\Http\Controllers\Dashbored;
    
use Illuminate\Http\Request;

use App\Assets;
use Illuminate\Routing\Controller;
use jeremykenedy\LaravelLogger\App\Http\Traits\ActivityLogger;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ActivityLogger::activity("عرض صفحة كافة الاصول");
        $assets = Assets::orderBy('id','DESC')->paginate(10);
        return view('dashboard.assets.index',compact('assets'))
            ->with('i', ($request->input('page', 1) - 1) * 10);

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
     * @param  \App\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function show(Assets $assets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function edit(Assets $assets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assets $assets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assets $assets)
    {
        //
    }
}
