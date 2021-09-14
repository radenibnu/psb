<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Http\Requests\dataSiswaRequest;
use App\Models\Datasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class datasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cetak_pdf()
    {
        $data = Datasiswa::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('pages.backend.datasiswa.cetak-pdf', [
            'data' => $data
        ]);
        return $pdf->download('data-siswa.pdf');
    }

    public function export_excel()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = Datasiswa::paginate(20);
        return view('pages.backend.datasiswa.index')->with([
            'datasiswa' => $datasiswa
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $datasiswa = DB::table('datasiswas')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        return view('pages.backend.datasiswa.index', [
            'datasiswa' => $datasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(dataSiswaRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|string',
            'nama' => 'required|string',
            'ttl' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'asal_tk' => 'required|string',
            'tanggal_lulus' => 'required|string',
            'kk' => 'required|string',
            'kip' => 'required|string',
            'alamat' => 'required|string',
            'status' => 'required|string',
            'ayah' => 'required|string',
            'ayahttl' => 'required|string',
            'nikayah' => 'required|string',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'penghasilan' => 'required|string',
            'nomorayah' => 'required|string'
        ]);

        if ($validator->fails()){
            return redirect()
                    ->route('datasiswa.index')
                    ->withErrors($validator)
                    ->withInput();
        }else{
            $datasiswa = $request->all();
    
            DataSiswa::create($datasiswa);
            return view('pages.frontend.notifikasi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datasiswa = Datasiswa::findorfail($id);
        return view('pages.backend.datasiswa.show')->with([
            'datasiswa' => $datasiswa
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
        $datasiswa = Datasiswa::findorfail($id);
        return view('pages.backend.datasiswa.edit')->with([
            'datasiswa' => $datasiswa
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
        $newdata = $request->all();

        $datasiswa = Datasiswa::findorfail($id);
        $datasiswa->update($newdata);

        return redirect()->route('datasiswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datasiswa = Datasiswa::findorfail($id);
        $datasiswa->delete();
        return redirect()->route('datasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
