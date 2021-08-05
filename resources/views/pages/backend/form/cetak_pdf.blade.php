
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
                    {{-- @forelse ($forms as $form )
                        <tr>
                            <td> {{ $form->id}}</td>
                            <td> {{$form->nama}}</td>
                            <td> {{$form->kelas}}</td>
                            <td> {{ $form->nama_rekening }}</td>
                            <td> {{$form->nomor_rekening}}</td> --}}
                            {{-- <td> <img src="{{ asset($form->image) }}" alt="" width="50"></td> --}}       
                        </tr>
                    {{-- @empty
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
