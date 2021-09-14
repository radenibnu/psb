@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data Berkas</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('databerkas.update', $databerkas->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="akte">Fotocopy Akta</label>
                        <input type="file" name="akte" class="form-control-file" id="akte">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kk">Fotocopy KK</label>
                        <input type="file" name="kk" class="form-control-file" id="kk">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ijazahtk">Ijazah TK</label>
                        <input type="file" name="ijazahtk" class="form-control-file" id="ijazahtk">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ktporangtua">Fotocopy KTP ORang Tua</label>
                        <input type="file" name="ktporangtua" class="form-control-file" id="ktporangtua">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pasfoto">Pas Foto 4 Lembar</label>
                        <input type="file" name="pasfoto" class="form-control-file" id="pasfoto">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="{{ route('databerkas.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection