<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Pendaftaran Siswa</title>
</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="text-center">MI An Najiyah</h1>
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="card text-left">
            <div class="card-header">
                Form Pendaftaran Siswa
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('datasiswa.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h4>A. Data Siswa</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control @error('nik'){{ 'is-invalid' }} @enderror" name="nik" id="nik">
                                <span class="text-danger">
                                    @error('nik')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama'){{ 'is-invalid' }} @enderror" name="nama" id="nama">
                                <span class="text-danger">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ttl">Tempat, Tanggal & Lahir</label>
                                <input type="date" class="form-control @error('ttl'){{ 'is-invalid' }} @enderror" name="ttl" id="ttl">
                                <span class="text-danger">
                                    @error('ttl')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin'){{ 'is-invalid' }} @enderror">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                    <span class="text-danger">
                                        @error('jenis_kelamin')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="asal_tk">Asal TK</label>
                                <input type="text" class="form-control @error('asal_tk'){{ 'is-invalid' }} @enderror" name="asal_tk" id="asal_tk">
                                <span class="text-danger">
                                    @error('asal_tk')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lulus">Tanggal Lulus</label>
                                <input type="date" class="form-control @error('tanggal_lulus'){{ 'is-invalid' }} @enderror" name="tanggal_lulus" id="tanggal_lulus">
                                <span class="text-danger">
                                    @error('tanggal_lulus')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kk">Nomor KK</label>
                                <input type="text" class="form-control @error('kk'){{ 'is-invalid' }} @enderror" name="kk" id="kk">
                                <span class="text-danger">
                                    @error('kk')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kip">KIP</label>
                                <input type="text" class="form-control @error('kip'){{ 'is-invalid' }} @enderror" name="kip" id="kip">
                                <span class="text-danger">
                                    @error('kip')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat'){{ 'is-invalid' }} @enderror" name="alamat" id="alamat">
                                <span class="text-danger">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status Tempat Tinggal</label>
                                <input type="text" class="form-control @error('status'){{ 'is-invalid' }} @enderror" name="status" id="status">
                                <span class="text-danger">
                                    @error('status')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-4 mb-3">
                            <h4>B. Data Ayah</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ayah">Nama Ayah</label>
                                <input type="text" class="form-control @error('ayah'){{ 'is-invalid' }} @enderror" name="ayah" id="ayah">
                                <span class="text-danger">
                                    @error('ayah')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ayahttl">Tempat, Tanggal&Lahir</label>
                                <input type="date" class="form-control @error('ayahttl'){{ 'is-invalid' }} @enderror" name="ayahttl" id="ayahttl">
                                <span class="text-danger">
                                    @error('ayahttl')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK Ayah</label>
                                <input type="text" class="form-control @error('nikayah'){{ 'is-invalid' }} @enderror" name="nikayah" id="nik">
                                <span class="text-danger">
                                    @error('nikayah')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <input type="text" class="form-control @error('pendidikan'){{ 'is-invalid' }} @enderror" name="pendidikan" id="pendidikan">
                                <span class="text-danger">
                                    @error('pendidikan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan'){{ 'is-invalid' }} @enderror" name="pekerjaan" id="pekerjaan">
                                <span class="text-danger">
                                    @error('pekerjaan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penghasilan">Penghasilan</label>
                                <input type="text" class="form-control @error('penghasilan'){{ 'is-invalid' }} @enderror" name="penghasilan" id="penghasilan">
                                <span class="text-danger">
                                    @error('penghasilan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomorayah">Nomor Ayah</label>
                                <input type="text" class="form-control @error('nomorayah'){{ 'is-invalid' }} @enderror" name="nomorayah" id="nomorayah">
                                <span class="text-danger">
                                    @error('nomorayah')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
        <a href="{{ route('frontend') }}" class="btn btn-sm btn-success mt-3 mb-3">Back to Home</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
