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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-kW7gMX7x8PpTklfRlFfbJhjOMAOqJCMTlx6vU4udgzeKNgP5LQD2BIBqmU8MG+FmW6Ut1+PoFfD/lUToBnZThQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
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
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link href="assets/img/hero-carousel/gerejaku1.png" rel="icon">
    @stack('css')
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
                            <a class="dropdown-item" href="/about#galeri">Galeri</a>
                            <a class="dropdown-item" href="/about#Contact">Kontak & Alamat</a>
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

    @yield('content')
    <br><br><br><br><br>
    <section class="ftco-section ftco-section-parallax bg-secondary ftco-no-pb">
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
                            <li><a href="/about#galeri" class="py-1 d-block"><span
                                        class="fas fa-arrow-right mr-3"></span>Galeri</a></li>
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

    // Fungsi untuk menyembunyikan semua 
    function hideAllSubmenus() {
        var submenus = document.querySelectorAll(".submenu");
        submenus.forEach(function(submenu) {
            submenu.style.display = "none";
        });
    }
    </script>
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
    @stack('js')

</body>

</html>