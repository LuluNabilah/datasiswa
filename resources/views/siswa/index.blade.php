<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                   {{session('sukses')}}
                </div>
            @endif

            <div class="row">
                <div class="col-6">
                    <h1>Data Siswa</h1>
                </div>

                <div class="row-6">
                    <a href="/siswa/create" class="btn btn-primary btn-sm float-right">Tambah Siswa</a>
                        
                </div>
    
                    <table class="table table-hover">
                        <tr>
                            <th>NAMA DEPAN</th>
                            <th>NAMA BELAKANG</th>
                            <th>JENIS KELAMIN</th>
                            <th>AGAMA</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>

                        @foreach ($datasiswa as $siswa)
                        <tr>
                            <td>{{ $siswa->nama_depan }}</td>
                            <td>{{ $siswa->nama_belakang }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <td>{{ $siswa->agama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td><a href="/siswa/{{ $siswa->id }}" class="btn btn-warning btn-sm">Edit</a></td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    </body>
           
</html>
