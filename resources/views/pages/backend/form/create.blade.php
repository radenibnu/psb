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
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" name="stock" id="stock">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" name="color" id="color">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
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
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="{{ route('form.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection