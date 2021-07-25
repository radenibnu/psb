@extends('layouts.admin')

@section('content')    

    <h1 class="h3 mb-2 text-gray-800">Forms</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('form.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data SPP</span>
            </a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Siswa</th>
                             <th>Kelas</th>
                             <th>Jumlah Pembayaran</th>
                             <th>Nama Rekening</th>
                             <th>Nomor Rekening</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        {{-- @forelse ($products as $product)
                        <tr>
                            <td>  {{ $loop->iteration}}</td>
                            <td> {{$product->product_name}}</td>
                            <td> {{$product->price}}</td>
                            <td> <img src="{{ asset($product->image) }}" alt="" width="50"></td>
                            <td> {{ $product->stock }}</td>
                            <td> {{$product->color}}</td>
                            <td> {{$product->description}}</td>
                            <td>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    <a href="{{ route('product.show', $product->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a>
                                    <a href="{{route('product.edit', $product->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                       Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse --}}
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
@endsection