@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Items</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('datasiswa.update', $datasiswa->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik"
                                    value="{{ old('nik') ? old('nik') : $datasiswa->nik }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ old('nama') ? old('nama') : $datasiswa->nama }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ttl">Tempat, Tanggal&Lahir</label>
                                <input type="text" class="form-control" name="ttl" id="ttl"
                                    value="{{ old('ttl') ? old('ttl') : $datasiswa->ttl }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status"> Status</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                                    value="{{ old('jenis_kelamin') ? old('jenis_kelamin') : $datasiswa->jenis_kelamin }}">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="asal_tk">Asal TK</label>
                                <input type="text" class="form-control" name="asal_tk" id="asal_tk"
                                    value="{{ old('asal_tk') ? old('asal_tk') : $datasiswa->asal_tk }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lulus">Tanggal Lulus</label>
                                <input type="text" class="form-control" name="tanggal_lulus" id="tanggal_lulus"
                                    value="{{ old('tanggal_lulus') ? old('tanggal_lulus') : $datasiswa->tanggal_lulus }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kk">Nomor KK</label>
                                <input type="text" class="form-control" name="kk" id="kk"
                                    value="{{ old('kk') ? old('kk') : $datasiswa->kk }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kip">KIP</label>
                                <input type="text" class="form-control" name="kip" id="kip"
                                    value="{{ old('kip') ? old('kip') : $datasiswa->kip }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    value="{{ old('alamat') ? old('alamat') : $datasiswa->alamat }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status Tempat Tinggal</label>
                                <input type="text" class="form-control" name="status" id="status"
                                    value="{{ old('status') ? old('status') : $datasiswa->status }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Nama Ayah</label>
                                <input type="text" class="form-control" name="ayah" id="ayah"
                                    value="{{ old('ayah') ? old('ayah') : $datasiswa->ayah }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ayahttl">Tempat, Tanggal&Lahir Ayah</label>
                                <input type="text" class="form-control" name="ayahttl" id="ayahttl"
                                    value="{{ old('ayahttl') ? old('ayahttl') : $datasiswa->ayahttl }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nikayah">nikayah Ayah</label>
                                <input type="text" class="form-control" name="nikayah" id="nikayah"
                                    value="{{ old('nikayah') ? old('nikayah') : $datasiswa->nikayah }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan Ayah</label>
                                <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                    value="{{ old('pendidikan') ? old('pendidikan') : $datasiswa->pendidikan }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                    value="{{ old('pekerjaan') ? old('pekerjaan') : $datasiswa->pekerjaan }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penghasilan">Penghasilan Ayah</label>
                                <input type="text" class="form-control" name="penghasilan" id="penghasilan"
                                    value="{{ old('penghasilan') ? old('penghasilan') : $datasiswa->penghasilan }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomorayah">Nomor Ayah</label>
                                <input type="text" class="form-control" name="nomorayah" id="nomorayah"
                                    value="{{ old('nomorayah') ? old('nomorayah') : $datasiswa->nomorayah }}">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-success" type="submit">Submit</button>
                            <a href="{{ route('datasiswa.index') }}" class="btn btn-warning" type="cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
