@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet">
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

<!-- ======= Breadcrumbs ======= -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('assetsz/img/home/alkitab.jpg'); background-size: 30em; height:20em; width:100%;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Data Keuangan</h2>
            <a href="/" style="color:white;">
                <h3>Home
            </a><span style="color:blue;">/Keuangan</span></h3>
        </div>
    </div>
    </div><!-- End Breadcrumbs -->
    <br><br>
    <!-- End Breadcrumbs -->

    <div class="container">
        <!-- /.card-header -->
        <h2 style="text-align:center;">Data Keuangan untuk Bulan {{ \Carbon\Carbon::now()->format('F Y') }}</h2>

        <div style="overflow-x: auto; border-radius: 8px;">
            <table class="table" id="myTable">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Pengeluaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->kategori }}</td>
                        <td>{!! nl2br(e($row->keterangan)) !!}</td>
                        <td>
                            @if ($row->pemasukan == 0)
                            -
                            @else
                            Rp.{{ number_format($row->pemasukan, 0, ',', '.') }}
                            @endif
                        </td>
                        <td>
                            @if ($row->pengeluaran == 0)
                            -
                            @else
                            Rp.{{ number_format($row->pengeluaran, 0, ',', '.') }}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;">TOTAL</td>
                        <td>Rp.{{ number_format($pengeluaran ,0,',','.') }}</td>
                        <td>Rp.{{ number_format($pemasukan ,0,',','.') }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;">TOTAL SALDO</td>
                        <td>Rp.{{ number_format($saldo ,0,',','.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <form method="get" action="{{ route('keuangann') }}" class="mb-3">
            <div class="form-group">
                <label for="bulan">Pilih Bulan Untuk Melihat Data:</label>
                <select name="bulan" id="bulan" class="form-control">
                    @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}"
                        {{ $i == $bulan_sekarang ? 'selected' : '' }}>
                        {{ \Carbon\Carbon::create(null, $i, 1)->format('F') }}
                        </option>
                        @endfor
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tampilkan Data</button>
        </form>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->
    </div>
    </div>

    </div>

    @endsection

    @push('jsss')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    @endpush

    @push('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    @endpush