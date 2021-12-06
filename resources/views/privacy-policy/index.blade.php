<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="landingpage/assets/img/header/logo/favicon.png">
    <title>IPOS</title>
    <!-- -------- anime css ------ -->
    <link rel="stylesheet" href="landingpage/assets/css/animate.css">
    <!-- --------- tiny slider css ------ -->
    <link rel="stylesheet" href="landingpage/assets/css/tiny-slider.css">
    <!-- --------- font awsome css ------ -->
    <link rel="stylesheet" href="landingpage/assets/css/all.css">
    <!-- -------- venobox css ------- -->
    <link rel="stylesheet" href="landingpage/assets/css/venobox.css" type="text/css" media="screen" />
    <!-- ---- Bootstrap css--- -->
    <link rel="stylesheet" href="landingpage/assets/css/bootstrap.min.css">
    <!-- ---------- default css --------- -->
    <link rel="stylesheet" href="landingpage/assets/css/default.css">
    <!-- --- style css -->
    <link rel="stylesheet" href="landingpage/assets/css/style.css">
</head>

<body>
    <!-- --------- preloader ------------ -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------   Header star ------>
    <header class="header-area">
        <div class="navbar-area">
            <!---- navbar star--->
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img class="image" src="{{ url('') . $data->logo }}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" data-scroll-nav="0" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-scroll-nav="1" href="#download">Download</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" data-scroll-nav="2" href="/login">Login</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!---- navbar end--->
        <div class="header-hero-sub-page">
            <!---- home star ------>
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="container">
                <div class="row  justify-content-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12 mt-6">
                        <div class="header-hero-content mt-6">
                            <h1 class="header-title wow fadeInLeftBig mt-6" data-wow-duration="3s"
                                data-wow-delay="0.2s">
                                Privacy Policy
                            </h1>
                            <p class="text wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.4s">
                                {{ $privacy->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div></div>
                <div class="header-shape-2">
                    <img src="assets/img/header/header-shape-2.svg" alt="">
                </div>
            </div>
        </div>
        <!---- home star ------>
    </header>
    <!--------   Header End ----  -->


    


    <!-- ---- jquery Js ---- -->
    <script src="landingpage/assets/js/jquery-1.12.4.min.js"></script>
    <!-- -------- venobox js ------ -->
    <script type="text/javascript" src="landingpage/assets/js/venobox.min.js"></script>
    <!-- ---------- wow js ---------- -->
    <script src="landingpage/assets/js/wow.min.js"></script>
    <!-- ---------- tiny slider js --------- -->
    <script src="landingpage/assets/js/tiny-slider.js"></script>
    <!-- ---------- scrollit js ---------- -->
    <script src="landingpage/assets/js/scrollIt.min.js"></script>
    <!-- -------- font awsome js --------- -->
    <script src="landingpage/assets/js/all.js"></script>
    <!-- ---- Bootstrap Js ---- -->
    <script src="landingpage/assets/js/bootstrap.min.js"></script>
    <!-- ---- main js --- -->
    <script src="landingpage/assets/js/main.js"></script>
</body>

</html>
