<?php

namespace App\Http\Controllers;

use App\Models\PembayaranSPP;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;

class pembayaranSPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spps = PembayaranSPP::all();

        return view('pages.backend.pembayaranSPP.index')->with([
            'spps' => $spps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.pembayaranSPP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spps = $request->all();

        if($request->kategoribayar == 50000){
            $spps["keterangan"] = "Lunas";
        }elseif($request->kategoribayar == 40000){
            $spps["keterangan"] = "Lunas";
        }elseif($request->kategoribayar == 35000){
            $spps["keterangan"] = "Lunas";
        }else {
            $spps["keterangan"] = "Belum Lunas";
        }

        // dd($spps);

        PembayaranSPP::create($spps);
        return redirect()->route('pembayaranSPP.notifikasi');   
    }

    public function notifikasi(){

        $spps = PembayaranSPP::all();

        return view('pages.frontend.notifikasi')->with([
            'spps' => $spps
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spp = PembayaranSPP::findOrFail($id);

        return view('pages.backend.pembayaranSPP.show')->with([
            'spp' => $spp
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spp = PembayaranSPP::findOrFail($id);

        return view('pages.backend.pembayaranSPP.edit')->with([
            'spp' => $spp
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newspp = $request->all();

        $spp = PembayaranSPP::findOrFail($id);
        $spp->update($newspp);

        return redirect()->route('pembayaranSPPController.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spp = PembayaranSPP::findOrFail($id);
        $spp->delete();
        return redirect()->route('pembayaranSPPController.index');
    }
}
