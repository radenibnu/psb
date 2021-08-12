@extends('layouts.admin')

@section('content')
    <div class="card text-left">
        <div class="card-header">
            Detail Pembayaran SPP
        </div>
        <div class="card-body">
            <h2>Nama : {{ $spp->nama }}</h2>
            <h5>Nomor Induk Sekolah : {{ $spp->nis }}</h5>
            <h5 class="mb-3">Kelas : {{ $spp->kelas }}</h5>
            <h5>Kategori Bayar : {{ $spp->kategoribayar }}</h5>
            <h5>Pembayaran: {{ $spp->bulan }} - <span class="badge badge-success"> {{ $spp->keterangan }} </span> </h5>
        </div>
    </div>

    <a href="{{ route('pembayaranSPPController.index') }}" class="btn btn-sm btn-primary mt-3"> Back</a>
@endsection