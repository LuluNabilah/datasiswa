<h1>Data Siswa</h1>
<table>
    <tr>
        <th>NAMA DEPAN</th>
        <th>NAMA BELAKANG</th>
        <th>JENIsiswa KELAMIN</th>
        <th>AGAMA</th>
        <th>ALAMAT</th>
    </tr>

    @foreach ($datasiswa as $siswa)
    <tr>
        <td>{{ $siswa->nama_depan }}</td>
        <td>{{ $siswa->nama_belakang }}</td>
        <td>{{ $siswa->jenisiswa_kelamin }}</td>
        <td>{{ $siswa->agama }}</td>
        <td>{{ $siswa->alamat }}</td>
    </tr>
    @endforeach
   
</table>