<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h4>Laporan Artikel</h4>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->nim }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->kelas->nama_kelas }}</td>
                    <td>{{ $a->jk }}</td>
                    <td>{{ $a->tempat_lahir }}</td>
                    <td>{{ $a->tanggal_lahir }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>{{ $a->hp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
