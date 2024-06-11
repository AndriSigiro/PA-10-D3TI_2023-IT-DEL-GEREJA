@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pelayan</li>
                        <li class="breadcrumb-item active">Edit Pelayan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <h1 class="text-center mt-4" style="font-family: 'Josefin Sans', sans-serif;">Edit Pelayan</h1>
    <div class="container">
        <form method="POST" action="/updatepelayan/{{ $data->id }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="photo">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
    @endsection