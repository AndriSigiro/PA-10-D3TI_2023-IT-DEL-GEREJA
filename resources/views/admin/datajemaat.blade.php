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
                        {{-- <li class="breadcrumb-item active">Tambah Data</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Data Jemaat</h1>

    <div class="container">
        <a href="/tambahjemaat" type="button" class="btn btn-success mb-3">Tambah+</a>

        <div class="row">
            <!-- Menampilkan pesan success jika data berhasil di inpunput -->
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $message }}
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Nama Keluarga</th>
                            <th style="text-align: center;">Sektor</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $row)
                        <tr>
                            <td style="text-align: center;">{{ $index + $data->firstItem() }}</td>
                            <td style="text-align: center;">{{ $row->namakeluarga }}</td>
                            <td style="text-align: center;">{{ $row->sektor }}</td>
                            <td style="text-align: center;">{{ $row->alamat }}</td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group">
                                    <a href="/viewdatajemaat/{{ $row->id }}" class="btn btn-outline-primary">View</a>
                                    <a href="/tampilkandata/{{ $row->id }}" class="btn btn-outline-warning">Edit</a>
                                    <button type="button" class="btn btn-outline-danger delete" data-id="{{ $row->id }}"
                                        data-nama="{{ $row->namakeluarga }}">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        Swal.fire({
            title: 'Yakin?',
            text: "Kamu akan menghapus data " + nama + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletedata/" + id;
                Swal.fire(
                    'Dihapus!',
                    'Data sudah terhapus',
                    'success'
                )
            }
        })
    });

    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', (event) => {
            const nama = document.querySelector('[name="nama"]');
            const jeniskelamin = document.querySelector('[name="jeniskelamin"]');
            const alamat = document.querySelector('[name="alamat"]');
            const notelpon = document.querySelector('[name="notelpon"]');

            if (nama.value === '' || jeniskelamin.value === 'Pilih Jenis Kelamin' || alamat.value ===
                '' || notelpon.value === '') {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Harap isi semua data yang diperlukan!'
                });
            }
        });
    }
});
</script>
@endpush

@push('ye')
<style>
tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
@endpush