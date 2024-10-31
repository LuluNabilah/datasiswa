@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-mb-12">
                            <div class="panel-heading">
                                <div class="py-4">
                                    <h3 class="fw-bold mb-2 pb-2 border-bottom">Edit Siswa</h3>

                                    <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>

                                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group mb-2">
                                            <label for="nama_depan" class="form-label">Nama Depan<span class="text-danger">*</span></label>
                                            <input type="text" name="nama_depan" id="nama_depan" value="{{ $siswa->nama_depan}}" class="form-control" /> 

                                           
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="nama_belakang" class="form-label">Nama Belakang<span class="text-danger">*</span></label>
                                            <input type="text" name="nama_belakang" id="nama" value="{{ $siswa->nama_belakang}}" class="form-control" /> 

                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" id="L" value="L" {{ $siswa->jenis_kelamin =='L' ? 'checked' : '' }} class="form-check-input" /> 
                                                <label for="L" class="form-check-label">Laki-laki</label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" id="P" value="P" {{ $siswa->jenis_kelamin =='P' ? 'checked' : '' }} class="form-check-input" /> 
                                                <label for="P" class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group mb-2">
                                            <label for="agama" class="form-label">Agama<span class="text-danger">*</span></label>
                                            <input type="text" name="agama" id="agama" value="{{ $siswa->agama}}" class="form-control" /> 

                                           
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control">{{ $siswa->alamat}}</textarea>
                                        </div>

                                        
                                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3">Batal</a>
                                    </form>
                                </div>
                            </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
                            
@endsection