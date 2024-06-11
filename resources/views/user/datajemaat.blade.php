@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('assetsz/img/home/alkitab.jpg'); background-size: 30em; height:20em; width:100%;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Data Jemaat</h2>
            <a href="/" style="color:white;">
                <h3>Home
            </a><span style="color:blue;">/Data Jemaat</span></h3>
        </div>
    </div>
    </div><!-- End Breadcrumbs -->
    <br><br>

    <div class="container">
        <div class="input-group mb-3 mt-4 position-relative">
            <div class="dropdown-menu w-100" id="dropdownMenu"
                style="display: none; max-height: 200px; overflow-y: auto; position: absolute; top: 100%; left: 0; z-index: 1000;">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Keluarga</th>
                        <th scope="col">Sektor</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $nomor }}</td>
                        <td>{{ $row->namakeluarga }}</td>
                        <td>{{ $row->sektor }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td> <a href="{{ url('lihatdatajemaat/'.$row->id) }}" class="btn btn-outline-primary">View</a>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
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