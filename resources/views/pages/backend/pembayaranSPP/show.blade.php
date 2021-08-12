@extends('layouts.admin')

@section('content')
    <div class="card text-left">
        <div class="card-header">
            Detail Pembayaran SPP
        </div>
        <div class="card-body">
            <h2>Nama : {{ $spp->nama }}</h2>
            <h4>Nomor Induk Sekolah : {{ $spp->nis }}</h4>
            <h4 class="mb-3">Kelas : {{ $spp->kelas }}</h4>
            <h5>Kategori Bayar : {{ $spp->kategoribayar }}</h5>
            <h5>Pembayaran: {{ $spp->bulan }} - {{ $spp->keterangan }} </h5>
        </div>
    </div>

    <a href="{{ route('pembayaranSPPController.index') }}" class="btn btn-sm btn-primary mt-3"> Back</a>
@endsection