@extends('layouts.admin')

@section('content')

    <div class="card text-left">
        <div class="card-header">
            Detail Data Siswa
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal&Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal TK</th>
                            <th>Tanggal Kelulusan</th>
                            <th>Nomor KK</th>
                            <th>KIP</th>
                            <th>Alamat</th>
                            <th>Status Tempat Tinggal</th>
                            <th>Nama Ayah</th>
                            <th>Tempat, Tanggal&Lahir</th>
                            <th>NIK Ayah</th>
                            <th>Pendidikan</th>
                            <th>Penghasilan</th>
                            <th>Nomor ayah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $datasiswa->id }}</td>
                            <td> {{ $datasiswa->created_at }}</td>
                            <td> {{ $datasiswa->nik }}</td>
                            <td> {{ $datasiswa->nama }}</td>
                            <td> {{ $datasiswa->ttl }}</td>
                            <td> {{ $datasiswa->jenis_kelamin }}</td>
                            <td> {{ $datasiswa->asal_tk }}</td>
                            <td> {{ $datasiswa->tanggal_lulus }}</td>
                            <td> {{ $datasiswa->kk }}</td>
                            <td> {{ $datasiswa->kip }}</td>
                            <td> {{ $datasiswa->alamat }}</td>
                            <td> {{ $datasiswa->status }}</td>
                            <td> {{ $datasiswa->ayah }}</td>
                            <td> {{ $datasiswa->ayahttl }}</td>
                            <td> {{ $datasiswa->nikayah }}</td>
                            <td> {{ $datasiswa->pendidikan }}</td>
                            <td> {{ $datasiswa->penghasilan }}</td>
                            <td> {{ $datasiswa->nomorayah }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ route('datasiswa.index') }}" class="btn btn-sm btn-primary mt-3">Back</a>


@endsection
