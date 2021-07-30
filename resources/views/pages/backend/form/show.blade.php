@extends('layouts.admin')

@section('content')    


     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
           <h5>Detail Forms</h5>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Siswa</th>
                             <th>Kelas</th>
                             <th>Nama Rekening</th>
                             <th>Nomor Rekening</th>
                             <th>Image</th>
                         </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td> {{ $forms->id}}</td>
                            <td> {{$forms->nama}}</td>
                            <td> {{$forms->kelas}}</td>
                            <td> {{ $forms->nama_rekening }}</td>
                            <td> {{$forms->nomor_rekening}}</td>
                            <td> <img src="{{ asset($forms->image) }}" alt="" width="50"></td>
                        </tr>
                     </tbody>
                 </table>
             </div>
             <a target="_blank" href="{{route('form.cetak', $forms->id)}}" >
                <button class="btn btn-primary">Print</button>
            </a>
         </div>
     </div>
@endsection