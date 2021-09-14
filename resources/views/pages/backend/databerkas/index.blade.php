@extends('layouts.admin')

@section('content')
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800">List Data Berkas</h1>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Fotocopy Akte</th>
                             <th>Fotocopy Kartu Keluarga</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($databerkas as $data)
                        <tr>
                            <td>  {{ $loop->iteration}}</td>
                            <td> <img src="{{ asset($data->akte) }}" alt="" width="50"></td>
                            <td> <img src="{{ asset($data->kk) }}" alt="" width="50"></td>
                            <td>
                                <form action="{{ route('databerkas.destroy', $data->id) }}" method="POST">
                                    <a href="{{ route('databerkas.show', $data->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a>
                                    <a href="{{route('databerkas.edit', $data->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

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
