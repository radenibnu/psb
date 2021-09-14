<?php

namespace App\Http\Controllers;

use App\Models\Databerkas;
use Illuminate\Http\Request;

class databerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databerkas = Databerkas::all();
        return view('pages.backend.databerkas.index')->with([
            'databerkas' =>$databerkas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.uploadberkas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $databerkas = $request->all();
        $databerkas['akte'] = 'storage/' . $request->file('akte')->store(
            'assets/berkas',
            'public'
        );
        $databerkas['kk'] = 'storage/' . $request->file('kk')->store(
            'assets/berkas',
            'public'
        );
        $databerkas['ijazahtk'] = 'storage/' . $request->file('ijazahtk')->store(
            'assets/berkas',
            'public'
        );
        $databerkas['ktporangtua'] = 'storage/' . $request->file('ktporangtua')->store(
            'assets/berkas',
            'public'
        );
        $databerkas['pasfoto'] = 'storage/' . $request->file('pasfoto')->store(
            'assets/berkas',
            'public'
        );

        Databerkas::create($databerkas);
        return view('pages.frontend.notifikasiupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $databerkas = Databerkas::findOrFail($id);
        return view('pages.backend.databerkas.show')->with([
            'databerkas' => $databerkas
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
        $databerkas = Databerkas::findOrFail($id);
        return view('pages.backend.databerkas.edit')->with([
            'databerkas' => $databerkas
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
        $newberkas = $request->all();

        if ($request->file('akte') != '') {
            $newberkas['akte'] = 'storage/' . $request->file('akte')->store(
                'assets/berkas',
                'public'
            );
        }
        if ($request->file('kk') != '') {
            $newberkas['kk'] = 'storage/' . $request->file('kk')->store(
                'assets/berkas',
                'public'
            );
        }
        if ($request->file('ijazahtk') != '') {
            $newberkas['ijazahtk'] = 'storage/' . $request->file('ijazahtk')->store(
                'assets/berkas',
                'public'
            );
        }
        if ($request->file('ktporangtua') != '') {
            $newberkas['ktporangtua'] = 'storage/' . $request->file('ktporangtua')->store(
                'assets/berkas',
                'public'
            );
        }
        if ($request->file('pasfoto') != '') {
            $newberkas['pasfoto'] = 'storage/' . $request->file('pasfoto')->store(
                'assets/berkas',
                'public'
            );
        }

        $databerkas = Databerkas::findOrFail($id);
        $databerkas->update($newberkas);
        return redirect()->route('databerkas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $databerkas = Databerkas::findOrFail($id);
        $databerkas->delete();
        return redirect()->route('databerkas.index');
    }
}
