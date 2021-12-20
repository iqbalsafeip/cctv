<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CCTVRequest;
use App\Models\DataCCTV;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataCCTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cctv = DataCCTV::all();

        return view('admin.cctv.index', [
            'cctv' => $cctv
        ]);
    }

    public function dashboard()
    {
        $cctv = DataCCTV::latest();

        if (request('search')) {
            $cctv->where('nama_cctv', 'like', '%' . request('search') . '%');
        }

        return view('admin.cctv.dashboard', [
            'cctv' => $cctv->get()
        ]);
    }

    public function welcome()
    {
        $cctv = DataCCTV::latest();

        if (request('search')) {
            $cctv->where('nama_cctv', 'like', '%' . request('search') . '%');
        }

        return view('welcome', [
            'cctv' => $cctv->get()
        ]);
    }

    public function create()
    {
        return view('admin.cctv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CCTVRequest $request)
    {
        $cctv = $request->all();
        DataCCTV::create($cctv);
        return redirect()->route('cctv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataCCTV  $dataCCTV
     * @return \Illuminate\Http\Response
     */
    public function show(DataCCTV $cctv)
    {
        return view('admin.cctv.show', [
            'cctv' => $cctv
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataCCTV  $dataCCTV
     * @return \Illuminate\Http\Response
     */
    public function edit(DataCCTV $cctv)
    {
        return view('admin.cctv.edit', [
            'cctv' => $cctv
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataCCTV  $dataCCTV
     * @return \Illuminate\Http\Response
     */

    public function update(CCTVRequest $request, DataCCTV $cctv)
    {
        $data = $request->all();

        $cctv->update($data);

        return redirect()->route('cctv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataCCTV  $dataCCTV
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataCCTV $cctv)
    {
        $cctv->delete();

        return redirect()->route('cctv.index');
    }
}
