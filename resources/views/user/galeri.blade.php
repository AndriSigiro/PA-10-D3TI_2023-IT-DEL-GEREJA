@extends('layout.user')
@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="assetsz/css/galeri.css" rel="stylesheet">
@endpush
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('assetsz/img/home/alkitab.jpg'); background-size: 30em; height:20em; width:100%;">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Galeri</h2>
                <a href="/" style="color:white;">
                    <h3>Home
                </a><span style="color:blue;">/Galeri</span></h3>
            </div>
        </div>
        </div><!-- End Breadcrumbs -->
        <br><br>

        </div>
        <div class="container" style="padding-top: 10px; position: relative;">
            <h1
                style="padding:0 1em 0 1em; display: flex; flex-direction: column; justify-content: center;align-items: center; text-align: center; color: blue; font-family: Great Vibes, cursive;">
                HKBP HUTANAMORA</h1>
            <div class="row">
                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img id="modalImage" src="" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($data as $row)
                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 21rem; position: relative; border-radius: 10px;">
                        <img src="{{ asset($row->photo) }}"
                            style="width: 21rem; height: 21rem; border-radius: 10px; cursor: pointer;" alt=""
                            class="card-img">
                        <div class="card-body">
                            <h5 class="card-title">{{$row->nama}}</h5>
                            <span class="image-date" data-date="{{ $row->tanggal }}">{{ $row->tanggal }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dapatkan semua elemen gambar dengan kelas card-img
        var images = document.querySelectorAll('.card-img');

        // Tambahkan event listener untuk setiap gambar
        images.forEach(function(img) {
            img.addEventListener('click', function() {
                // Dapatkan URL gambar dari elemen yang diklik
                var src = img.getAttribute('src');

                // Setel URL gambar ke dalam elemen modalImage
                document.getElementById('modalImage').setAttribute('src', src);

                // Tampilkan modal
                var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
                myModal.show();
            });
        });
    });
    </script>
    @endpush