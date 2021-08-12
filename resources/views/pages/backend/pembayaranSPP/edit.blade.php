@extends('layouts.admin')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data Pembayaran SPP</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('pembayaranSPPController.update', $spp->id)}}">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama') ? old('nama'): $spp->nama }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" name="nis" id="nis" value="{{old('nis') ? old('nis'): $spp->nis }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" value="{{old('kelas') ? old('kelas'): $spp->kelas }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategoribayar">Kategori Bayar</label>
                        <select class="form-control" id="kategoribayar" name="kategoribayar" >
                            <option value='50000'{{($spp->kategoribayar === 50000) ? 'selected' : ''}}>50000</option>
                            <option value='40000' {{($spp->kategoribayar === 40000) ? 'selected' : ''}}>40000</option>
                            <option value='35000' {{($spp->kategoribayar === 35000) ? 'selected' : ''}}>35000</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bulan">Pembayaran SPP Bulan :</label>
                        <select class="form-control" id="bulan" name="bulan" >
                            <option value='januari'{{($spp->bulan === 'januari') ? 'selected' : ''}}>Januari</option>
                            <option value='februari' {{($spp->bulan === 'februari') ? 'selected' : ''}}>Februari</option>
                            <option value='maret' {{($spp->bulan === 'maret') ? 'selected' : ''}}>Maret</option>
                            <option value='april' {{($spp->bulan === 'april') ? 'selected' : ''}}>April</option>
                            <option value='mei' {{($spp->bulan === 'mei') ? 'selected' : ''}}>Mei</option>
                            <option value='juni' {{($spp->bulan === 'juni') ? 'selected' : ''}}>Juni</option>
                            <option value='juli' {{($spp->bulan === 'juli') ? 'selected' : ''}}>Juli</option>
                            <option value='agustus' {{($spp->bulan === 'agustus') ? 'selected' : ''}}>Agustus</option>
                            <option value='september' {{($spp->bulan === 'september') ? 'selected' : ''}}>September</option>
                            <option value='oktober' {{($spp->bulan === 'oktober') ? 'selected' : ''}}>Oktober</option>
                            <option value='november' {{($spp->bulan === 'november') ? 'selected' : ''}}>November</option>
                            <option value='desember' {{($spp->bulan === 'desember') ? 'selected' : ''}}>Desember</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <select class="form-control" id="keterangan" name="keterangan" >
                        <option value='lunas'{{($spp->keterangan === "Lunas") ? 'selected' : ''}}>Lunas</option>
                        <option value='belum lunas' {{($spp->keterangan === "Belum Lunas") ? 'selected' : ''}}>Belum Lunas</option>
                    </select>
                </div>
            </div>

            <div class="card-footer">
                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Edit</button>
                    <a href="{{ route('pembayaranSPPController.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection