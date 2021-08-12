@extends('layouts.admin')

@section('content')    

    {{-- <h1 class="h3 mb-2 text-gray-800">List Data Pembayaran SPP</h1> --}}

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h4>List Data Pembayaran SPP</h4>
            {{-- <a href="{{ route('form.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data SPP</span>
            </a> --}}
            {{-- <a href="{{ route('form.cetak') }}" class="btn btn-primary btn-icon-split">
                <span class="text">export PDF</span>
            </a> --}}
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Siswa</th>
                             <th>Keterangan</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($spps as $spp)
                        <tr>
                            <td>  {{ $loop->iteration}}</td>
                            <td> {{$spp->nama}}</td>
                            <td><span class="badge badge-success"> {{$spp->keterangan}} </span></td>
                            <td>
                                <form action="{{ route('pembayaranSPPController.destroy', $spp->id) }}" method="POST">
                                    <a href="{{ route('pembayaranSPPController.show', $spp->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a>
                                    <a href="{{route('pembayaranSPPController.edit', $spp->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                       Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            <strong> Oopps ! </strong> Data kosong
                          </div>
                        @endforelse
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
@endsection