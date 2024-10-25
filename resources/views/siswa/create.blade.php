@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-mb-12">
                            <div class="panel-heading">
                                <div class="py-4">
                                    <h3 class="fw-bold mb-2 pb-2 border-bottom">Tambah Siswa</h3>

                                    <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>

                                    <form action="{{ route('siswa.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group mb-2">
                                            <label for="nama_depan" class="form-label">Nama Depan<span class="text-danger">*</span></label>
                                            <input type="text" name="nama_depan" id="nama_depan" value="{{ old('nama_depan') }}" class="form-control @error('nama_depan') is-invalid @enderror" /> 

                                            @error('nama_depan')
                                                <div class="invalid-feedback d-blok">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="nama_belakang" class="form-label">Nama Belakang<span class="text-danger">*</span></label>
                                            <input type="text" name="nama_belakang" id="nama" value="{{ old('nama_belakang') }}" class="form-control @error('nama_belakang') is-invalid @enderror" /> 

                                            @error('nama_belakang')
                                                <div class="invalid-feedback d-blok">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" id="L" value="L" class="form-check-input" /> 
                                                <label for="L" class="form-check-label">Laki-laki</label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" id="P" value="P" class="form-check-input" /> 
                                                <label for="P" class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="agama" class="form-label">Agama</label>
                                            
                                            <div class="form-check">
                                                <input type="radio" name="agama" id="Islam" value="Islam" class="form-check-input" /> 
                                                <label for="Islam" class="form-check-label">Islam</label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input type="radio" name="agama" id="Kristen" value="Kristen" class="form-check-input" /> 
                                                <label for="Kriten" class="form-check-label">Keisten</label>
                                            </div>
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