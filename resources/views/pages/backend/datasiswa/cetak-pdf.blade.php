<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

    </style>
</head>

<body>

    <table id="customers">
        <tr>
            <th>No</th>
            {{-- <th>Tanggal Pendaftaran</th> --}}
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat, Tanggal&Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Asal TK</th>
            <th>Tanggal Kelulusan</th>
            <th>Nomor KK</th>
            <th>KIP</th>
            <th>Alamat</th>
            <th>Status Tempat Tinggal</th>
            <th>Nama Ayah</th>
            <th>Tempat, Tanggal&Lahir</th>
            <th>NIK Ayah</th>
            <th>Pendidikan</th>
            <th>Penghasilan</th>
            <th>Nomor ayah</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td> {{ $row->id }}</td>
                {{-- <td> {{ $row->created_at }}</td> --}}
                <td> {{ $row->nik }}</td>
                <td> {{ $row->nama }}</td>
                <td> {{ $row->ttl }}</td>
                <td> {{ $row->jenis_kelamin }}</td>
                <td> {{ $row->asal_tk }}</td>
                <td> {{ $row->tanggal_lulus }}</td>
                <td> {{ $row->kk }}</td>
                <td> {{ $row->kip }}</td>
                <td> {{ $row->alamat }}</td>
                <td> {{ $row->status }}</td>
                <td> {{ $row->ayah }}</td>
                <td> {{ $row->ayahttl }}</td>
                <td> {{ $row->nikayah }}</td>
                <td> {{ $row->pendidikan }}</td>
                <td> {{ $row->penghasilan }}</td>
                <td> {{ $row->nomorayah }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
