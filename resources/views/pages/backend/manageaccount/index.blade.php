@extends('layouts.admin')

@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manage Account</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('manageAccount.add_create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data Account</span>
            </a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>  {{ $loop->iteration}}</td>
                            <td> {{$user->name}}</td>
                            <td> {{$user->email}}</td>
                            <td>
                                <form action="{{ route('manageAccount.destroy', $user->id) }}" method="POST">
                                    {{-- <a href="{{ route('manageAccount.show', $user->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a>
                                    <a href="{{route('manageAccount.edit', $user->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a> --}}

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                       Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
@endsection
