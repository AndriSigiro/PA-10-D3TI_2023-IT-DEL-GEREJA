@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Detail Jemaat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Jemaat</li>
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center mb-4" style="font-family: 'Josefin Sans', sans-serif;">Edit Data Jemaat</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('updatedata', $jemaat->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="namakeluarga" class="form-label">Nama Keluarga</label>
                                <input type="text" name="namakeluarga" class="form-control" id="namakeluarga"
                                    value="{{ old('namakeluarga', $jemaat->namakeluarga) }}">
                            </div>
                            <div class="mb-3">
                                <label for="sektor" class="form-label">Sektor</label>
                                <input type="text" name="sektor" class="form-control" id="sektor"
                                    value="{{ old('sektor', $jemaat->sektor) }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat"
                                    value="{{ old('alamat', $jemaat->alamat) }}">
                            </div>
                            <div class="mb-3">
                                <label for="namaayah" class="form-label">Nama Ayah</label>
                                <input type="text" name="namaayah" class="form-control" id="namaayah"
                                    value="{{ old('namaayah', $keluarga->first()->namaayah ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="namaibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="namaibu" class="form-control" id="namaibu"
                                    value="{{ old('namaibu', $keluarga->first()->namaibu ?? '') }}">
                            </div>
                            <h4>Data Anak</h4>
                            <div id="dataAnak">
                                @php $nomorAnak = 1; @endphp
                                @foreach($keluarga as $anggota)
                                <div class="mb-3">
                                    <label for="namaanak{{ $nomorAnak }}" class="form-label">Nama Anak
                                        {{ $nomorAnak }}</label>
                                    <input type="text" name="namaanak[]" class="form-control"
                                        id="namaanak{{ $nomorAnak }}"
                                        value="{{ old('namaanak.'.$loop->index, $anggota->namaanak) }}">
                                </div>
                                @php $nomorAnak++; @endphp
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scriptssss')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    const inputs = form.querySelectorAll('input');
    let valid = true;
    inputs.forEach(input => {
        if (!input.value) {
            valid = false;
        }
    });
    if (!valid) {
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