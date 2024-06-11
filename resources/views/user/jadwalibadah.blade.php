@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
table {
    width: 100%;
}

th,
td {
    text-align: left;
    padding: 8px;
}
</style>
@endpush

@section('content')

<main id="main">
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('assetsz/img/home/alkitab.jpg'); background-size: 30em; height:20em; width:100%;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Jadwal Ibadah</h2>
            <a href="/" style="color:white;">
                <h3>Home
            </a><span style="color:blue;">/Jadwal Ibadah</span></h3>
        </div>
    </div>
    <br><br>

    <div class="container">
        <div style="overflow-x: auto; border-radius: 8px;">
            <table id="myTable" class="table">
                <thead class="bg-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Ibadah</th>
                        <th>Ayat Alkitab</th>
                        <th>Tanggal</th>
                        <th>Pelayan Ibadah</th>
                        <th>Lokasi Ibadah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $row->namaibadah }}</td>
                        <td>{{ $row->ayatalkitab }}</td>
                        <td>{{ $row->haritanggal->format('D d M Y') }}</td>
                        <td>{{ $row->pelayan }}</td>
                        <td>{{ $row->lokasiibadah }}</td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection


@push('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush