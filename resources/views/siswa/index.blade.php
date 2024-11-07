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
                                        <a href="/siswa/create" class="btn btn-primary btn-sm float-right">Tambah Data Siswa</a>
                                    </div>
								</div>
								<div class="panel-body">
                                    <!-- Form Pencarian -->
                                    <form action="{{ route('siswa.index') }}"  method="GET">
                                        <input type="text" name="search" placeholder="Cari siswa..." value="{{ request()->get('search') }}">
                                        <button type="submit">Cari</button>
                                    </form>

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
                                                <td><a href="/siswa/{{ $siswa->id }}/profile/"></a></a>{{ $siswa->nama_depan }}</td>
                                                <td><a href="/siswa/{{ $siswa->id }}/profile/"></a></a>{{ $siswa->nama_belakang }}</td>
                                                 <td>
                                                    @if($siswa->jenis_kelamin =="L")
                                                        <span>Laki-laki</span>
                                                    @else
                                                        <span>Perempuan</span>
                                                    @endif
                                                </td>
                                                <td>{{ $siswa->agama }}</td>
                                                <td>{{ $siswa->alamat }}</td>
                                                <td>
                                                   
                                                    <a href="{{ route('siswa.edit', $siswa->id) }}"class="btn btn-sm btn-secondary">Edit</a>
                                                   
                                                    <a href="#" class="btn btn-sm btn-danger"
                                                        onclick="handleDestroy(`{{ route ('siswa.destroy', $siswa->id) }}`)">
                                                        Hapus
                                                    </a>
                                              
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
                    </div>
                </div>
            </div>
        </div>
        <form action="#" id="form-delete" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>

@endsection         
        
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
    <script type="text/javascript">
        function handleDestroy(url) {
            swal({
                title: "Apakah anda yakin?",
                text: "Setelah dihapus, Anda tidak dapat mengembalikannya!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((confirmed) => {
                if (confirmed) {
                    $("#form-delete").attr('action', url);
                    $("#form-delete").submit();
                }
            });
        }
    </script>
@endpush
