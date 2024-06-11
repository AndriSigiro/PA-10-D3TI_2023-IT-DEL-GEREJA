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
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;"> Berita</h1>
    <div class="container">
        <a href="/tambahberita " type="button" class="btn btn-success">Tambah+</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">berita</th>
                        <th soper="col">Tanggal</th>
                        <th soper="col">keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $i=1 ?>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row"><?= $i ?> </th>
                        <td>{{ $row->judul }}</td>
                        <td> <img src="{{ asset($row->gambar) }}" style="width: 70px" height="40px" alt=""></td>
                        <td>{{ $row->date }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>
                            <a href="tampilkanberita/{{ $row->id }} "
                                class="btn btn-outline-warning waves-effect">Edit</a>
                            <a href="#" class="btn btn-outline-danger waves-effect delete" nama="{{ $row->judul }}"
                                id="{{ $row->id }}">Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('s')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script>
    $('.delete').click(function() {
        var id = $(this).attr('id');
        Swal.fire({
            title: 'Yakin?',
            text: "Kamu akan menghapus data tersebut",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deleteberita/" + id + ""
                Swal.fire(
                    'Dihapus!',
                    'Data sudah terhapus',
                    'success'
                )
            }
        })
    })
    </script>
    @endpush
    @endsection