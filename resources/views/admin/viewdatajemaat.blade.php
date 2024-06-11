@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Jemaat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Jemaat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Jemaat</h3>
            </div>
            <div class="card-body">
                @if($jemaat)
                <p>Nama Keluarga: {{ $jemaat->namakeluarga }}</p>
                <p>Sektor: {{ $jemaat->sektor }}</p>
                <p>Alamat: {{ $jemaat->alamat }}</p>
                @if($keluarga->isNotEmpty())
                <p>Nama Ayah: {{ $keluarga->first()->namaayah }}</p>
                <p>Nama Ibu: {{ $keluarga->first()->namaibu }}</p>
                <h4>Data Anak</h4>
                <ul>
                    @php
                    $nomorAnak = 1;
                    @endphp
                    @foreach($keluarga as $anggota)
                    <li>Nama Anak {{ $nomorAnak }}: {{ $anggota->namaanak }}</li>
                    @php
                    $nomorAnak++;
                    @endphp
                    @endforeach
                </ul>
                @else
                <p>Data keluarga tidak ditemukan.</p>
                @endif
                @else
                <p>Data jemaat tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection