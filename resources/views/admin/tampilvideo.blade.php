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
                        <li class="breadcrumb-item active">video</li>
                        <li class="breadcrumb-item active">Edit video</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <h1 class="text-center mt-4" style="font-family: 'Josefin Sans', sans-serif;">Edit video</h1>
    <div class="container">
        <form method="POST" action="/updatevideo/{{ $data->id }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul}}">
            </div>
            {{-- @error('nama')
                  <span class="text-danger" > {{ $message }}</span>
            @enderror --}}
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="judul" name="link" value="{{ $data->link}}">
            </div>
            {{-- @error('link')
                  <span class="text-danger" > {{ $message }}</span>
            @enderror --}}
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>




    @endsection