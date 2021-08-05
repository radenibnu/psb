<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
// use Yoeunes\Toastr\Facade as toastr;


class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('pages.backend.form.index')->with([
            'forms' => $forms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forms = $request->all();
        $forms['image'] = 'storage/' . $request->file('image')->store(
            'assets/form',
            'public'
        );

        Form::create($forms);
        // toastr()->success('Success Message');
        return redirect()->route('form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forms = Form::findOrFail($id);
        return view('pages.backend.form.show')->with([
            'forms' => $forms
        ]);
    }

    public function cetakPDF()
    {
        $forms = Form::all();

        view()->share('data', $forms);
        $pdf = PDF::loadview('pages.backend.form.cetak_pdf', [
            'form' => $forms
        ]);
        return $pdf->download('form.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forms = Form::findOrFail($id);
        return view('pages.backend.form.edit')->with([
            'forms' => $forms
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
        $newform = $request->all();
        if ($request->file('image') != '') {
            $newform['image'] = 'storage/' . $request->file('image')->store(
                'assets/form',
                'public'
            );
        }

        $form = Form::findOrFail($id);
        $form->update($newform);
        return redirect()->route('form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forms = Form::findOrFail($id);
        $forms->delete();
        return redirect()->route('form.index')->with('success', "Data Berhasil Dihapus");
    }
}


