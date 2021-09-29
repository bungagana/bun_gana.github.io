<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('frontend/img/favicon.ico" type="image/x-icon')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/timelines.css')}}" />
    <title>INVFEST 6.0</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="navbarTop">
        <div class="container">
            <!-- Navbar Logo -->
            <a class="navbar-brand mx-auto mx-lg-0" data-scroll href="#">
                <img src="{{ asset('frontend/img/logo.png')}}" alt="Logo" width="120" />
            </a>
            <!-- Navbar Menu  -->
            <div class="d-none d-lg-block" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#details">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#timelines">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                    </li>
                    <a class="btn btn-rounded my-sm-0 ml-auto primary-color" data-scroll href="{{route('daftar')}}">
                        <span class="fas fa-user" style="margin-right: 10px"></span>Register
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Bottom Navbar -->
    <nav class="
				navbar navbar-light navbar-expand
				p-0
				d-md-none d-lg-none d-xl-none
				fixed-bottom
				top-shadow
			"
        id="bottomNav">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fas fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="tracking.html" class="nav-link"><i class="fas fa-info"></i>
                    <p>Tracking</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="register.html" class="nav-link"><i class="fas fa-user"></i>
                    <p>Register</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End of Bottom Navbar -->

    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('frontend/img/astro.png')}}" class="img-fluid" alt="Header Img" />
                </div>
                <div class="col-sm-12 col-md-6 order-md-last">
                    <h4 class="font-weight-bolder">
                        Innovation Key to Growth Economy with Financial Technology.
                    </h4>
                    <a href="#details" class="btn primary-color btn-rounded">Detail</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Card -->
    <section id="kompetisi">
        <div class="container">
            <h4 class="text-center my-5 font-weight-bold">Kompetisi</h4>
            <div class="card-deck">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/img/mobile.svg')}}" class="img-fluid py-5 mx-auto" alt="Mobile" />
                    <div class="card-body">
                        <h5 class="card-title">Mobile Apps</h5>
                        <p class="card-text">
                            Buatlah Aplikasi Mobile atau Web Mobile yang telah siap untuk
                            dipakai.
                        </p>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/img/ui.svg')}}" class="img-fluid py-5 w-50 mx-auto" alt="UI/UX" />
                    <div class="card-body">
                        <h5 class="card-title">UI/UX</h5>
                        <p class="card-text">
                            Buatlah rancangan design atau prototype untuk aplikasi atau
                            website semenarik mungkin dan kreatif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Card -->

    <!-- Details -->
    <section class="details" id="details">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-sm-12 col-md">
                    <div class="py-5 px-5 details-img">
                        <img src="{{ asset('frontend/img/detail.png')}}" class="img-fluid d-block mx-auto w-75" alt="alternative" />
                    </div>
                </div>
                <div class="col text-white">
                    <h2>Apa itu INVFEST 6.0 ?</h2>
                    <p class="mt-3">
                        INVFEST ( Informatics Innovation Festival ) yaitu acara kompetisi
                        nasional tahunan yang ke empat, pada tahun ini bertemakan
                        "Innovation Key to Growth Economy with Financial Technology".
                        INVFEST merupakan salah satu program kerja dari HMIF ( Himpunan
                        Mahasiswa Informatika ) divisi Minat dan Bakat.
                    </p>
                    <p>
                        Acara ini memiliki tujuan untuk mengembangkan ekonomi Indonesia
                        yang lebih maju dengan adanya teknologi finansial yang nantinya
                        akan berguna bagi masyarakat sekitar. Selain itu, juga untuk
                        mengembangkan kemampuan pemuda pemudi untuk berfikir lebih
                        inovatif dan siap menghadapi persaingan ekonomi mendatang di
                        bidang teknologi.
                    </p>
                    <a class="btn btn-light btn-rounded" href="register.html">Register</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Details -->

    <!-- Timeline -->
    <section class="timeline_area my-5" id="timelines">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section_heading text-center">
                        <h4>INVFEST 6.0 Timelines</h4>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-12">
                            <!-- Timeline Area-->
                            <div class="apland-timeline-area">
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInLeft;
           ">
                                        <p>18 Okt - 26 Nov 2021</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="single-timeline-content d-flex wow fadeInLeft"
                                                data-wow-delay="0.3s" style="
              visibility: visible;
              animation-delay: 0.3s;
              animation-name: fadeInLeft;
             ">
                                                <div class="timeline-icon">
                                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                                </div>
                                                <div class="timeline-text">
                                                    <h6>Updated 5.0</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInLeft;
           ">
                                        <p>27 Nov - 5 Des 2021</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="single-timeline-content d-flex wow fadeInLeft"
                                                data-wow-delay="0.3s" style="
              visibility: visible;
              animation-delay: 0.3s;
              animation-name: fadeInLeft;
             ">
                                                <div class="timeline-icon">
                                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                </div>
                                                <div class="timeline-text">
                                                    <h6>Updated 4.4.0</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInLeft;
           ">
                                        <p>12 Des 2021</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="single-timeline-content d-flex wow fadeInLeft"
                                                data-wow-delay="0.3s" style="
              visibility: visible;
              animation-delay: 0.3s;
              animation-name: fadeInLeft;
             ">
                                                <div class="timeline-icon">
                                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                                </div>
                                                <div class="timeline-text">
                                                    <h6>Updated 4.0</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInLeft;
           ">
                                        <p>18 Des 2021</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="single-timeline-content d-flex wow fadeInLeft"
                                                data-wow-delay="0.3s" style="
              visibility: visible;
              animation-delay: 0.3s;
              animation-name: fadeInLeft;
             ">
                                                <div class="timeline-icon">
                                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                                </div>
                                                <div class="timeline-text">
                                                    <h6>Updated 4.0</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInLeft;
           ">
                                        <p>19 Des 2021</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="single-timeline-content d-flex wow fadeInLeft"
                                                data-wow-delay="0.3s" style="
              visibility: visible;
              animation-delay: 0.3s;
              animation-name: fadeInLeft;
             ">
                                                <div class="timeline-icon">
                                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                                </div>
                                                <div class="timeline-text">
                                                    <h6>Updated 4.0</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 my-auto d-none d-lg-block">
                    <img class="w-75 float-right" src="{{ asset('frontend/img/timeline.png')}}" alt="alternative" />
                </div>
            </div>
        </div>
    </section>
    <!-- End of Timeline -->

    <!-- Media Partner -->
    <section class="details">
        <div class="container py-4">
            <div class="section_heading text-center text-white">
                <h4 class="pb-2">Media Partner</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/arenalomba.jpg')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/eventmahasiswa.jpg')}}" alt="logo"
                        class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/kegiatan_lomba.jpg')}}" alt="logo"
                        class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/info_lomba.jpg')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/infolomba.png')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/kampuspwt.jpg')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/lombamahasiswa.png')}}" alt="logo"
                        class="my-auto mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/ILE.png')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/LM.png')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
                <div class="col-4 col-md-2 bg-white sponsor-item">
                    <img src="{{ asset('frontend/img/media/SL.png')}}" alt="logo" class="img-fluid mx-auto d-block rounded" />
                </div>
            </div>
        </div>
    </section>
    <!-- End of Media Partner -->

    <!-- Contacts -->
    <section class="py-5 mt-5 contact container" id="contact">
        <div class="row">
            <div class="col-12 col-md-4 mb-5 mb-md-0 text-center">
                <div class="contact_icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <p>example@mail.com</p>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-md-0 text-center">
                <div class="contact_icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <a href="https://wa.me/6281235678911" target="blank">+62 81235678911</a>
            </div>
            <div class="col-12 col-md-4 mb-md-0 text-center">
                <div class="contact_icon">
                    <i class="fas fa-clock"></i>
                </div>
                <p>
                    Work Hours <br />
                    Senin - Jumat <br />
                    7:00 - 20:00
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-white shadow-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="footer_logo">
                        <img src="{{ asset('frontend/img/logo.png')}}" alt="logo" class="img-fluid d-block" width="120" />
                        <p class="text-muted mt-4">2021 © IT TEAM INVFEST.</p>
                        <h5 class="fw-bold mt-4">Follow Us</h5>
                        <ul class="list-inline fot_social mt-4">
                            <li class="list-inline-item">
                                <a href="" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-icon"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-icon"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer_menu">
                        <h5 class="fw-bold">Navigation</h5>
                        <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Tracking</a></li>
                            <li><a href="#">Details</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer_menu">
                        <h5 class="fw-bold">More</h5>
                        <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Rulebook</a></li>
                            <li><a href="#">Template</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- script js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/utility.js"></script>

</body>


</html>