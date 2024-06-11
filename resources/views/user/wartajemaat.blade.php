@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('assetsz/img/home/alkitab.jpg'); background-size: 30em; height:20em; width:100%;">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Warta Jemaat</h2>
                <a href="/" style="color:white;">
                    <h3>Home
                </a><span style="color:blue;">/Warta Jemaat</span></h3>
            </div>
        </div>
        </div><!-- End Breadcrumbs -->
        <br><br>


        <!-- ======= Blog Section ======= -->
        <div class="container" style="padding-top: 10px; position:relative;">
            <div style="overflow-x: auto; border-radius: 8px;">
                <table class="table" id="myTable">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" style="width: 100px; text-align: center;">No</th>
                            <th scope="col" style="width: 100px; text-align: center;">Judul</th>
                            <th scope="col" style="width: 100px; text-align: center;">Keterangan</th>
                            <th scope="col" style="width: 100px; text-align: center;">Tanggal</th>
                            <th scope="col" style="width: 100px; text-align: center;">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach ($data as $index=>$row)
                        <tr>
                            <th scope="row" style="width: 100px; text-align: center;">{{ $index + $data->firstitem() }}
                            </th>
                            <!-- firstitem agar nomor terurut walau dipagination berbeda-->
                            <td style="width: 100px; text-align: center;">{{ $row->judul }}</td>
                            <td style="width: 100px; text-align: center;">{{ $row->keterangan }}</td>
                            <td style="width: 100px; text-align: center;">{{ $row->tanggal }}</td>
                            <td style="width: 100px; text-align: center;">
                                <a href="{{ asset($row->file) }}" target="_blank">Lihat File</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- End Blog Section -->

    </main><!-- End #main -->

    @endsection

    @push('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function showmore(image, title, deskripsi) {
        Swal.fire({
            title: title,
            text: deskripsi,
            imageUrl: image,
            imageWidth: 500,
            imageHeight: 400,
            imageAlt: 'Custom image',
        });
    }

    $(document).ready(function() {
        $('.moredetails').click(function(event) {
            event.preventDefault();
            var postitem = $(this).closest('.post-item');
            var image = postitem.find('img').attr('src');
            var title = postitem.find('.post-title').text();
            var deskripsi = postitem.find('p').text();

            showmore(image, title, deskripsi);
        });

        $('#myTable').DataTable();
    });
    </script>
    @endpush