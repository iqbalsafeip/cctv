<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoLalulintasRequest;
use App\Http\Requests\UpdateInfoLalulintasRequest;
use App\Models\InfoLalulintas;
use App\Models\DataCCTV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class InfoLalulintasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cctv = DataCCTV::all();

        return view('infoLalulintas.index', [
            'cctv' => $cctv
        ]);
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
     * @param  \App\Http\Requests\StoreInfoLalulintasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = $request->all();
        // dd($cctv);
        InfoLalulintas::create($info);

        return redirect()->route('info-detail', $info['cctv_id']);
        // InfoLalulintas::create($cctv);
        // return redirect()->route('info-lalulintas', $cctv['cctv_id']);
    }

    public function detail($id){
        $info = InfoLalulintas::where(['cctv_id'=> $id])->get();
        return view('infoLalulintas.detail', [
            'info' => $info,
            'id' => $id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoLalulintas  $infoLalulintas
     * @return \Illuminate\Http\Response
     */
    public function show(InfoLalulintas $infoLalulintas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoLalulintas  $infoLalulintas
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoLalulintas $infoLalulintas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoLalulintasRequest  $request
     * @param  \App\Models\InfoLalulintas  $infoLalulintas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoLalulintas $infoLalulintas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoLalulintas  $infoLalulintas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InfoLalulintas::where(['id'=> $id])->delete();

        return redirect()->back();
    }
}
