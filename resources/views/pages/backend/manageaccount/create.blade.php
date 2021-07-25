@extends('layouts.admin')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data Account</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('manageAccount.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" name="name" id="name">
                    </div>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email')
                        is-invalid
                    @enderror" name="email" id="email">
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control @error('password')
                        is-invalid
                    @enderror" name="password" id="password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="password_confirmation">Repeat Password</label>
                    <input type="text" class="form-control" name="password_confirmation" id="password_confirmation">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="{{ route('manageAccount.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection