@extends('layout.admin2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Jemaat</li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <h1 class="text-center mb-4" style="font-family: 'Josefin Sans', sans-serif;">Tambah Data Jemaat</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- pengiriman data berupa photo -->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="namakeluarga" class="form-label">Nama Keluarga</label>
                                    <input type="text" class="form-control @error('namakeluarga') is-invalid @enderror"
                                        id="namakeluarga" name="namakeluarga" placeholder="Masukkan Nama Keluarga">
                                    @error('namakeluarga')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sektor" class="form-label">Sektor</label>
                                    <input type="text" class="form-control @error('sektor') is-invalid @enderror"
                                        id="sektor" name="sektor" placeholder="Masukkan Sektor">
                                    @error('sektor')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" placeholder="Masukkan Alamat">
                                    @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="namaayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control @error('namaayah') is-invalid @enderror"
                                        id="namaayah" name="namaayah" placeholder="Masukkan Nama Ayah">
                                    @error('namaayah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="namaibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control @error('namaibu') is-invalid @enderror"
                                        id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu">
                                    @error('namaibu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jumlahAnak">Jumlah Anak</label>
                                    <select class="form-control" id="jumlahAnak" name="jumlahAnak">
                                        @for ($i = 1; $i <= 30; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div id="anak">
                                    <div class="form-group">
                                        <label for="namaanak1" class="form-label">Nama Anak 1</label>
                                        <input type="text"
                                            class="form-control @error('namaanak.0') is-invalid @enderror"
                                            id="namaanak1" name="namaanak[]" placeholder="Masukkan Nama Anak">
                                        @error('namaanak.0')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div id="additionalFields"></div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
    @push('script')
    <script>
    $(document).ready(function() {
        $('#jumlahAnak').change(function() {
            var numAnak = $(this).val();
            var html = '';
            for (var i = 2; i <= numAnak; i++) {
                html += '<div class="form-group">';
                html += '<label for="namaanak' + i + '" class="form-label">Nama Anak ' + i + '</label>';
                html += '<input type="text" class="form-control @error("namaanak.' + (i - 1) +
                    '") is-invalid @enderror" id="namaanak' + i +
                    '" name="namaanak[]" placeholder="Masukkan Nama Anak">';
                html += '@error("namaanak.' + (i - 1) + '")';
                html += '<div class="alert alert-danger">{{ $message }}</div>';
                html += '@enderror';
                html += '</div>';
            }
            $('#additionalFields').html(html);
        });
    });
    </script>
    @endpush
    @push('scriptssss')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    const form = document.querySelector('form');
    const nama = document.querySelector('[name="nama"]');
    const jeniskelamin = document.querySelector('[name="jeniskelamin"]');
    const alamat = document.querySelector('[name="alamat"]');
    const notelpon = document.querySelector('[name="notelpon"]');

    form.addEventListener('submit', (event) => {
        if (nama.value === '' || jeniskelamin.value === 'Pilih Jenis Kelamin' || alamat.value === '' || notelpon
            .value === '') {
            event.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Harap isi semua data yang diperlukan!'
            });
        }
    });
    </script>

    @endpush