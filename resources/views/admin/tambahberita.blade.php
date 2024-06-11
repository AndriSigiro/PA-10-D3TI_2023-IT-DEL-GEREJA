@extends('layout.admin2')

@section('content')
<!-- Content Header (Page header) -->


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

    <h1 class="text-center mt-4" style="font-family: 'Josefin Sans', sans-serif;">Tambah berita</h1>
    <div class="container">
        <form method="POST" action="/insertberita" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="wkwkw" name="judul" />
            </div>
            <div class="form-group">
                <label for="gambar">Photo</label>
                <input type="file" class="form-control" id="wkws" name="gambar" required>
            </div>
            <div class="form-group">
                <label for="date">Hari & Tanggal</label>
                <input type="date" class="form-control" name="date" required>
            </div>
            <div class="form-group">
                <label for="keterangan">keterangan</label>
                <input type="text" class="form-control" name="keterangan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    @endsection