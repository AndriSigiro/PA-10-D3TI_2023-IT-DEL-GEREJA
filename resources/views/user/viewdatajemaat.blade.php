@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet">
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    padding: 10px;
    border: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

ul {
    padding: 0;
    margin: 0;
}

ul li {
    list-style-type: none;
    margin-bottom: 5px;
}
</style>
@endpush

@section('content')
<main id="main">
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('assetsz/img/home/alkitab.jpg') }}'); background-size: 30em; height:20em; width:100%;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Data Jemaat</h2>
            <a href="/" style="color:white;">
                <h3>Home
            </a><span style="color:blue;">/Data Jemaat</span>
            </h3>
        </div>
    </div>
    <br><br>

    <div class="container">
        <div class="family-header" style="text-align:center;">
            <h1>Data Keluarga</h1>
            <h2><b>{{ $jemaat->namakeluarga }}</b< /h2>
        </div>

        <div class="family-details">
            <table class="family-table">
                <tr>
                    <th>Nama Ayah</th>
                    <td>{{ $keluarga->first()->namaayah ?? 'Data tidak ditemukan' }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>{{ $keluarga->first()->namaibu ?? 'Data tidak ditemukan' }}</td>
                </tr>
                <tr>
                    <th>Nama Anak</th>
                    <td>
                        <ul>
                            @foreach($keluarga as $item)
                            <li>{{ $item->namaanak }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</main>
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush