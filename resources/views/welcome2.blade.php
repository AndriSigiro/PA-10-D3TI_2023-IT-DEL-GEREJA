<!DOCTYPE html>
<html lang="en">

<head>
    <title>HKBP Hutanamora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{asset('asset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link href="assets/img/hero-carousel/gerejaku1.png" rel="icon">
</head>
<style>
.bg-dark {
    background-color: #000 !important;
    position: fixed;
    width: 100%;
    z-index: 9999;
    border-radius: 0 0 8px 8px;
}

.bg-white {
    background-color: #fff !important;
}

.navbar-expand-lg .navbar-nav .nav-link {
    color: #ffffff;
    /* Warna teks putih */
}

.navbar-expand-lg.bg-white .navbar-nav .nav-link {
    color: #000000;
    /* Warna teks hitam saat navbar putih */
}

.navbar-expand-lg .navbar-toggler-icon {
    background-color: #0000;
    /* Icon toggler putih */
}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">HKBP<span>Hutanamora</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/about" id="navbarDropdownMenuLink1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang Gereja
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="/about#layanan">Layanan Gereja</a>
                            <a class="dropdown-item" href="/about#section-counter">Data</a>
                            <a class="dropdown-item" href="/about#pelayan">Pelayan Gereja</a>
                            <a class="dropdown-item" href="/about#events">Events</a>
                            <a class="dropdown-item" href="/about#alamat">Kontak & Alamat</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/jadwalibadahh" id="navbarDropdownMenuLink2"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jadwal ibadah & Warta Jemaat
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="/jadwalibadahh">Jadwal Ibadah</a>
                            <a class="dropdown-item" href="/wartajemaatt">Warta Jemaat</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jemaat & Keuangan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="/datajemaatt">Data Jemaat</a>
                            <a class="dropdown-item" href="/keuangann">Informasi Keuangan</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/photoo">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-wrap js-fullheight" style="background-image: url('assets/img/hero-carousel/gereja2.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-0">Helping Grow Your Faith</h1>
                    <h3 class="subheading mb-4 pb-1">Submit your presence to the creator of the universe</h3>
                    <p><a href="#" class="btn btn-primary py-3 px-4">New here!</a> <a href="/about#events"
                            class="btn btn-white py-3 px-4"><i class="nav-icon fas fa-video"></i> Growth video</a></p>
                    <div class="mouse">
                        <a href="#kata" class="mouse-icon">
                            <div class="mouse-wheel"><span class="fas fa-arrow-down"></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="ftco-daily-verse bg-light" id="kata">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 daily-verse text-center p-5">
                    <span class="fas fa-bible"></span>
                    <h3 class="ftco-animate">"For God so loved the world, that he gave his only begotten Son, that
                        whosoever believeth in him should not perish, but have everlasting life."</h3>
                    <h4 class="h5 mt-4 font-weight-bold ftco-animate">&mdash; John 3:16 KJV</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="layanan">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span class="px-4">Spring Church Services</span></h2>
                    <span class="subheading">Church Services</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex services ftco-animate text-lg-right">
                        <div class="icon order-lg-last d-flex align-items-center justify-content-center"><span
                                class="fa praying-hands"></span></div>
                        <div class="media-body pr-lg-5">
                            <h3 class="heading mb-3">Daily Prayers</h3>
                            <p>These daily prayers are designed to strengthen your faith, provide a source of strength
                                and hope, and bring a sense of serenity to your daily life. </p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-right">
                        <div class="icon order-lg-last d-flex align-items-center justify-content-center"><span
                                class="flaticon-church"></span></div>
                        <div class="media-body pr-lg-5">
                            <h3 class="heading mb-3">Church Community</h3>
                            <p>We gather regularly for worship, fellowship, and various activities that strengthen our
                                bonds and deepen our faith. By joining our community, you will find a place where you
                                can connect with others, share your experiences, and grow spiritually.</p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-right">
                        <div class="icon order-lg-last d-flex align-items-center justify-content-center"><span
                                class="flaticon-bible"></span></div>
                        <div class="media-body pr-lg-5">
                            <h3 class="heading mb-3">Teaching</h3>
                            <p>Through a variety of classes, Bible studies, and seminars, we offer opportunities for all
                                ages to grow in their knowledge of God's word.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex services ftco-animate text-lg-left">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-social-care"></span></div>
                        <div class="media-body pl-lg-5">
                            <h3 class="heading mb-3">Helpers</h3>
                            <p>Whether it's offering a helping hand with daily tasks, providing emotional support, or
                                extending a warm welcome to new members, our team of dedicated volunteers is here to
                                serve with love and kindness.</p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-left">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-rings"></span></div>
                        <div class="media-body pl-lg-5">
                            <h3 class="heading mb-3">Wedding</h3>
                            <p>Our Wedding Ministry is a sacred service dedicated to uniting couples in the bond of
                                marriage within the loving embrace of our faith community. </p>
                        </div>
                    </div>
                    <div class="d-flex services ftco-animate text-lg-left">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-promotion"></span></div>
                        <div class="media-body pl-lg-5">
                            <h3 class="heading mb-3">Events</h3>
                            <p>Our Events ministry is dedicated to creating vibrant and meaningful gatherings that
                                foster fellowship, spiritual growth, and community engagement. </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-last d-flex flex-column align-items-stretch">
                    <div class="img d-flex align-self-stretch align-items-center justify-content-center"
                        style="background-image:url('asset/images/gereja.jpg'); height:;">
                        <div class="desc">
                            <h3><a href="#" class="p-2">Sunday Services</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-5 py-5" id="tentang">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section heading-section-no-line ftco-animate">
                            <h2 class="mb-4">About Church</h2>
                            <p>Below we attach data related to this church
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <i class="nav-icon fas fa-user" style="font-size: 40px"></i>
                                    </div>
                                    <a href="/datajemaat"><strong class="number">{{$totalJemaat}}</strong></a>
                                    <span>Members</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <i class="nav-icon bi bi-cash-coin" style="font-size: 40px"></i>
                                    </div>
                                    <a href="/keuangann"><strong class="number">Rp.
                                            {{number_format($saldo, 0)}}</strong></a>
                                    <span>Kas Gereja</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <i class="nav-icon bi bi-card-list" style="font-size: 48px;"></i>
                                    </div>
                                    <strong class="number">{{$totalPelayan}}</strong>
                                    <span>Pelayan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <i class="nav-icon bi bi-book" style="font-size: 40px"></i>
                                    </div>
                                    <strong class="number">{{$dataKhotbah}}</strong>
                                    <span>Ayat Mingguan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pelayan" class="ftco-section testimony-section"
        style="background-image: url('asset/images/bg_3.jpg.webp'); width:75%; position:relative; left:12.5%; margin-bottom: 50px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-2">Pangula Ni Huria</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    @if(count($dataPelayan) > 0)
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($dataPelayan as $data)
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4">
                                    <img src="{{ asset($data->photo) }}" style="border-radius: 30px; height:100%">
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">{{ $data->nama }}</p>
                                    <span class="position">{{ $data->jabatan }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <p class="mb-4">Belum ada data pelayan yang tersedia.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb" id="events" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-5">
                    <div class="heading-section heading-section-no-line ftco-animate mb-5">
                        <h2 class="mb-2">Faith Growth Video</h2>
                        <span class="subheading">Growing Faith</span>
                    </div>
                    @foreach($dataVideo as $data)
                    <div class="event-wrap d-md-flex ftco-animate">
                        <div class="img"
                            style="background-image: url('{{ $data->gambar }}'); background-size: cover; background-position: center; width:100%; border-radius: 30px;">
                        </div>
                        <div class="text pl-md-5">
                            <h2 class="mb-3"><a href="sermons.html">{{ $data->judul }}</a></h2>
                            <div class="meta">
                                <p>
                                    <span><i class="nav-icon bi bi-calendar-date-fill"></i> {{$data -> tanggal}}</span>
                                    <span><i class="nav-icon bi bi-book"></i> {{$data->keterangan}}</span>
                                </p>
                            </div>
                            <p><a href="{{$data->link}}" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="subsermon p-5">
                        <h2 class="heading mb-5 ftco-animate">Faith Growth Video</h2>
                        <div class="sermon-wrap mb-4 ftco-animate">
                            <a href="sermons.html" class="img mb-3"
                                style="background-image: url('assets/img/hero-carousel/gerejaku1.png');"></a>
                            <div class="text"><br>
                                <h2 class="mb-4"><a href="sermon.html">God is sufficient for all our needs, whether in
                                        happiness or sadness, in abundance or in lack. He is an infinite source of
                                        strength, love and mercy, who always provides a way for us at every step of our
                                        lives. By relying on Him, we can face every challenge with confidence and calm,
                                        for He is a faithful helper and gracious provider. In all things, God is a
                                        sustaining force.</a></h2>
                                <div class="meta">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="ftco-section ftco-gallery" id="alamat">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.320216548277!2d99.19636697509677!3d2.399435897579788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302dffda9d2c9743%3A0xbf7fd577d0ae98dc!2sGereja%20HKBP%20Hutanamora!5e0!3m2!1sid!2sid!4v1714354312885!5m2!1sid!2sid"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-section-parallax bg-secondary ftco-no-pb" id="contact">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div
                        class="col-md-7 text-center heading-section heading-section-white heading-section-no-line ftco-animate">
                        <h2>Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">the true meaning of the church</h2>
                        <p>"Church" refers to a congregation of Christians or a spiritual community who worship together
                            and share a belief in Jesus Christ as Savior. More than just a physical building, the church
                            represents a fellowship of believers in Christ, guided by Biblical teaching, participating
                            in worship, serving others, and glorifying God.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">About</h2>
                        <ul class="list-unstyled">
                            <li><a href="/about#layanan" class="py-1 d-block"><span
                                        class="fas fa-arrow-right mr-3"></span>Layanan Gereja</a></li>
                            <li><a href="/about#section-counter" class="py-1 d-block"><span
                                        class="fas fa-arrow-right mr-3"></span>Data</a></li>
                            <li><a href="/abobut#pelayan" class="py-1 d-block"><span
                                        class="fas fa-arrow-right mr-3"></span>Pelayan Gereja</a></li>
                            <li><a href="/about#events" class="py-1 d-block"><span
                                        class="fas fa-arrow-right mr-3"></span>Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Service Hours</h2>
                        <div class="opening-hours">
                            <h4>Services Hours</h4>
                            <p class="pl-3">
                                <span class="mb-3">Saturday Prayer Meeting &mdash; 10:00 am to 11:30 am</span>
                                <span>Sunday Service &mdash; 8:30 am to 11:30 am</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made Kelompok 10</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('asset/js/jquery.waypoints.min.j')}}s"></script>
    <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/aos.js')}}"></script>
    <script src="{{asset('asset/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('asset/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('asset/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s">
    </script>
    <script src="{{asset('asset/js/google-map.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"87590c421ca33d92","version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
    <script>
    // Ambil semua elemen "li" yang merupakan item menu dropdown
    var dropdownItems = document.querySelectorAll(".dropdown");

    // Loop melalui setiap elemen "li" dan tambahkan event listener
    dropdownItems.forEach(function(dropdownItem) {
        dropdownItem.addEventListener("click", function(event) {
            var submenu = this.querySelector("ul.submenu");
            // Sembunyikan semua submenu terlebih dahulu
            hideAllSubmenus();

            // Periksa apakah submenu ada dan apakah sudah tersembunyi atau ditampilkan
            if (submenu) {
                if (submenu.style.display === "block") {
                    submenu.style.display = "none"; // Sembunyikan submenu jika sudah ditampilkan
                } else {
                    submenu.style.display = "block"; // Tampilkan submenu jika sudah tersembunyi
                }
            }
        });
    });

    // Fungsi untuk menyembunyikan semua submenu
    function hideAllSubmenus() {
        var submenus = document.querySelectorAll(".submenu");
        submenus.forEach(function(submenu) {
            submenu.style.display = "none";
        });
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    var navbar = document.querySelector('.navbar');
    var brandText = document.querySelector('.navbar-brand'); // Merujuk ke keseluruhan elemen <a>
    var togglerIcon = document.querySelector('.navbar-toggler-icon');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            navbar.classList.add('bg-white');
            brandText.style.color = 'black'; // Mengubah warna teks "HKBP Hutanamora" menjadi hitam
            togglerIcon.style.color = 'black'; // Mengubah warna ikon toggler menjadi hitam
        } else {
            navbar.classList.remove('bg-white');
            brandText.style.color = 'white'; // Mengubah warna teks "HKBP Hutanamora" menjadi putih
            togglerIcon.style.color = ''; // Mengembalikan warna ikon toggler ke warna aslinya
        }
    });
    </script>






</body>

</html>