@extends('layouts.admin')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="mb-3 text-gray-800">List Data Siswa</h4>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <form action="{{ route('datasiswa.cari') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" name="cari">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('datasiswa.cetak') }}" class="btn btn-primary btn-icon-split">
                        <span class="text">Export to PDF</span>
                    </a>
                    <a href="{{ route('export_excel') }}" class="btn btn-success btn-icon-split">
                        <span class="text">Export to Excel</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal & Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datasiswa as $data)
                            <tr>
                                <td> {{ ($datasiswa->currentPage() - 1) * $datasiswa->perPage() + $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                <td> {{ $data->ttl }}</td>
                                <td> {{ $data->jenis_kelamin }}</td>
                                <td>
                                    <form action="{{ route('datasiswa.destroy', $data->id) }}" method="POST">
                                        <a href="{{ route('datasiswa.show', $data->id) }}" type="" class=""><input
                                                type="button" class="btn btn-success btn-sm" value="View"></a>
                                        <a href="{{ route('datasiswa.edit', $data->id) }}" type="" class=""><input
                                                type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit"
                                            onclick="return confirm('Delete Confirmation')">
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
{{-- 
    <p>Halaman : {{ $datasiswa->currentPage() }}</p><br>
    <p>Total : {{ $datasiswa->total() }}</p><br>
    <p>Data Per Halaman : {{ $datasiswa->perPage() }}</p><br> --}}

    {{ $datasiswa->links() }}
@endsection
