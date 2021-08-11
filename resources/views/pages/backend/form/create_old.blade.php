@extends('layouts.admin')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data SPP</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('form.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nama_rekening">Nama Rekening</label>
                    <input type="text" class="form-control" name="nama_rekening" id="nama_rekening">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nomor_rekening">Nomor Rekening</label>
                    <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Add</button>
                        <a href="{{ route('form.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection