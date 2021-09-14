@extends('layouts.admin')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        Detail Data Berkas
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <p>Fotocopy Akte</p>
                <img src="{{ asset($databerkas->akte) }}" class="img-thumbnail" alt="..." width="100px">
            </div>
            <div class="col-md-4">
                <p>Fotocopy Kartu Keluarga</p>
                <img src="{{ asset($databerkas->kk) }}" class="img-thumbnail" alt="..." width="100px">
            </div>
            <div class="col-md-4">
                <p>Fotocopy Ijazah TK</p>
                <img src="{{ asset($databerkas->ijazahtk) }}" class="img-thumbnail" alt="..." width="100px">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <p>Fotocopy KTP Orang Tua</p>
                <img src="{{ asset($databerkas->ktporangtua) }}" class="img-thumbnail" alt="..." width="100px">
            </div>
            <div class="col-md-4">
                <p>Fotocopy Pas Foto</p>
                <img src="{{ asset($databerkas->pasfoto) }}" class="img-thumbnail" alt="..." width="100px">
            </div>
        </div>
    </div>
</div>
<a href="{{ route('databerkas.index') }}" class="btn btn-sm btn-primary mb-5">Back</a>

    
@endsection
