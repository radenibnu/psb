@extends('layouts.admin')

@section('content')    
<div class="card text-left">
    <div class="card-header">
        Detail Data Bukti Upload
    </div>

    <div class="card-body">
        <h2>Nama : {{ $forms->nama }}</h2>
        <h5>Kelas : {{ $forms->kelas }}</h5>
        <h5>Nama Rekening : {{ $forms->nama_rekening }}</h5>
        <h5 class="mb-3">Nomor Rekening : {{ $forms->nomor_rekening }}</h5>
        <h5 class="mb-3">Image : <img src="{{ asset($forms->image) }}" style="width: 250px; height: 250px;" ></h5>
    </div>
</div>

<a href="{{ route('form.index') }}" class="btn btn-sm btn-primary mt-3">Back</a>
@endsection