@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-mb-12">
								<div class="panel-heading">
									<h3 class="panel-title">Data Siswa</h3>
                                    <div class="row-6">
                                        <a href="/siswa/create" class="btn btn-primary btn-sm float-right">Tambah Siswa</a>
                                            
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>NAMA DEPAN</th>
                                                <th>NAMA BELAKANG</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>AGAMA</th>
                                                <th>ALAMAT</th>
                                                <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
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
										</tbody>
									</table>
								</div>
							
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('content1')
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
@endsection         
        
