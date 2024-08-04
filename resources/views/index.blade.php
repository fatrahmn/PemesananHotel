<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Pemesanan Hotel</title>
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/parallax/jarallax.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/theme/css/style.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/recaptcha.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="https://mobirise.com/extensions/advisorym5/business-consulting/assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section data-bs-version="5.1" class="menu menu1 advisorym5 cid-twFGb9Wfv6" once="menu" id="menu1-0">



        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="menu_box container-fluid">
                <div class="navbar-brand d-flex d-lg-none">

                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption display-4" href="../index.html">AdvisoryM5
                        </a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-brand d-none d-lg-flex">

                        <span class="navbar-caption-wrap"><a class="navbar-caption display-4" href="../index.html">Pemesanan <br>Hotel<br></a></span>
                    </div>
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-primary display-4" href="../index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link link text-primary display-4" href="#features2-2">Tasks</a></li>
                        <li class="nav-item"><a class="nav-link link text-primary display-4" href="#slider3-f">Team</a></li>
                        <li class="nav-item"><a class="nav-link link text-primary display-4" href="#pricing1-6">Pricing</a></li>
                    </ul>
                    <div class="mbr-section-btn-main" role="tablist">
                        @if(Route::has('login'))
                        @auth
                        @if(auth()->user()->level == 'Customer')
                        <a class="btn btn-primary display-4" href="{{route('customer.customer.dashboard')}}">Dashboard</a>
                        @else
                        <a class="btn btn-primary display-4" href="{{route('admin.admin.dashboard')}}">Dashboard</a>
                        @endif
                        @else
                        <a class="btn btn-primary display-4" href="{{route('login')}}">
                            Login
                        </a>
                        @endauth
                        @endif
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <section data-bs-version="5.1" class="header2 advisorym5 cid-twFGbx6O0a" id="header2-1">





        <div class="container-fluid">
            <div class="row">
                <div class="col-12 card">
                    <div class="image-wrapper">
                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/background1.jpg" alt="">
                    </div>
                    <div class="title-wrapper">
                        <h1 class="mbr-section-title mbr-fonts-style display-1">Business Consulting</h1>
                        <div class="text-wrapper">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Odio optio quisquam ratione <br> reiciendis sequi tempore <br> ullam veniam vitae.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content3 advisorym5 cid-twFGtIWo9U" id="content3-3">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            The company business <br> consulting
                        </h2>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary display-4" href="#">
                                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features2 advisorym5 cid-twFGsmDoXt" id="features2-2">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            About our <br> business tasks
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row cards">
                        <div class="item features-image сol-12 col-lg-6">
                            <div class="item-wrapper">
                                <a href="#">
                                    <div class="item-img">
                                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image6.jpg" alt="">
                                        <span class="mbr-iconfont mobi-mbri-play mobi-mbri"></span>
                                    </div>
                                </a>
                                <div class="item-content">
                                    <div class="item-title">
                                        <div class="item-title-wrap">
                                            <h4 class="mbr-card-title mbr-fonts-style display-7">
                                                Saepe <br> —
                                            </h4>
                                            <h6 class="mbr-desc mbr-fonts-style display-7">
                                                Card Subtitle
                                            </h6>
                                        </div>
                                    </div>
                                    <p class="mbr-text mbr-fonts-style display-4">
                                        Officia perferendis, quibusdam quidem vitae.
                                    </p>
                                    <p class="mbr-loc mbr-fonts-style display-4">
                                        Germany
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item features-image сol-12 col-lg-6">
                            <div class="item-wrapper">
                                <a href="#">
                                    <div class="item-img">
                                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image13.jpg" alt="">
                                        <span class="mbr-iconfont mobi-mbri-play mobi-mbri"></span>
                                    </div>
                                </a>
                                <div class="item-content">
                                    <div class="item-title">
                                        <div class="item-title-wrap">
                                            <h4 class="mbr-card-title mbr-fonts-style display-7">
                                                Saepe <br> —
                                            </h4>
                                            <h6 class="mbr-desc mbr-fonts-style display-7">
                                                Card Subtitle
                                            </h6>
                                        </div>
                                    </div>
                                    <p class="mbr-text mbr-fonts-style display-4">
                                        Officia perferendis, quibusdam quidem vitae.
                                    </p>
                                    <p class="mbr-loc mbr-fonts-style display-4">
                                        Germany
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="#">
                            <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features5 advisorym5 cid-twFGY0JeQP" id="features5-d">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 card">
                    <div class="image-wrap">
                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image8.jpg" alt="">
                    </div>
                    <div class="image-wrap">
                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image16.jpg" alt="">
                    </div>
                    <div class="image-wrap">
                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image15.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 card">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            The company's <br> main objectives
                        </h2>
                    </div>
                    <div class="cards">
                        <div class="card-wrapper">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi aspernatur autem
                                consectetur consequuntur cum deserunt.
                            </p>
                        </div>
                        <div class="card-wrapper">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi aspernatur autem
                                consectetur consequuntur cum deserunt. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features3 advisorym5 cid-twFGZAM39p" id="features3-e">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            Consectetur adipisicing elit. Ad deleniti distinctio <br> eius, eum
                            eveniet facilis, maiores non quia quo quod.
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card">
                    <div class="card-wrapper">
                        <div class="icon-wrapper">
                            <span class="mbr-iconfont mobi-mbri-unlock mobi-mbri"></span>
                        </div>
                        <h3 class="mbr-card-title mbr-fonts-style display-5">
                            Maiores non <br> quia quo quod
                        </h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Consectetur adipisicing elit. Consectetur deserunt distinctio eligendi esse est eum explicabo
                            facere incidunt laborum nostrum obcaecati, odit officia, qui quidem repellat repudiandae soluta
                            vel voluptate.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card">
                    <div class="card-wrapper">
                        <div class="icon-wrapper">
                            <span class="mbr-iconfont mobi-mbri-sites mobi-mbri"></span>
                        </div>
                        <h3 class="mbr-card-title mbr-fonts-style display-5">
                            Dolore eius <br> illum optio
                        </h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt distinctio
                            eligendi esse est eum explicabo facere incidunt laborum nostrum obcaecati, odit officia, qui
                            quidem repellat repudiandae soluta vel.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card">
                    <div class="card-wrapper">
                        <div class="icon-wrapper">
                            <span class="mbr-iconfont mobi-mbri-layers mobi-mbri"></span>
                        </div>
                        <h3 class="mbr-card-title mbr-fonts-style display-5">
                            Consequuntur <br> delectus eligendi
                        </h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt distinctio
                            eligendi esse est eum explicabo facere incidunt laborum nostrum obcaecati, odit officia, qui
                            quidem.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="#">
                            <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content2 advisorym5 cid-twFGUyQ3LA" id="content2-c">





        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-2 card">
                    <div class="image-wrap">
                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image1.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-2 card">
                    <div class="image-wrap">
                        <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image9.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-8 card">
                    <div class="text-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            About our company structure
                        </h2>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Est fugiat iure, <br> laborum
                            magni numquam perferendis quam quo <br> recusandae repudiandae vero. Adipisci <br> culpa
                            facilis magni voluptas adipisci.
                        </p>
                        <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="#">
                                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>Structure</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="slider3 mbr-embla advisorym5 cid-twFHlORsOJ" id="slider3-f">





        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">
                        Top team
                    </h2>
                </div>
                <div class="embla" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play-interval="5" data-draggable="true">
                    <div class="embla__viewport">
                        <div class="embla__container">
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            Allen Klein
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image7.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            Erin Davis
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image14.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            Dora Morgan
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image10.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            Anthony Gray
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image16.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            Linda Brown
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            Matthew Ramos
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            John Jones
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="card-wrap">
                                    <div class="item-wrapper position-relative">
                                        <div class="image-wrap">
                                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image13.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <p class="mbr-name mbr-fonts-style display-7">
                                            George Shaw
                                        </p>
                                        <p class="mbr-role mbr-fonts-style display-4">
                                            Main Manager
                                        </p>
                                        <div class="soc-wrapper">
                                            <div class="soc-wrap">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="embla__button embla__button--prev">
                        <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Previous</span>
                    </button>
                    <button class="embla__button embla__button--next">
                        <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="tabs1 advisorym5 cid-twFGNScKJ2" id="tabs1-a">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 tabs-wrap">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item first mbr-fonts-style">
                            <a class="nav-link mbr-fonts-style show active display-5" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tab1" aria-selected="true">
                                Audrey Wells
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style display-5" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tab2" aria-selected="true">
                                Larry Wilson
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style display-5" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tab3" aria-selected="true">
                                Daniel Rogers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style display-5" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tab4" aria-selected="true">
                                Carol Smith
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="col-12 col-lg-6 tab-content-wrap">
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane in active" role="tabpanel">
                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image2.jpg" alt="">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur blanditiis
                                ducimus ea eaque explicabo praesentium suscipit voluptatibus.
                            </p>
                        </div>
                        <div id="tab2" class="tab-pane" role="tabpanel">
                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image4.jpg" alt="">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Deleniti esse est fugit harum illo ipsa labore mollitia neque non quis similique
                                sit tempora tenetur ullam voluptatibus.
                            </p>
                        </div>
                        <div id="tab3" class="tab-pane" role="tabpanel">
                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image10.jpg" alt="">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur blanditiis
                                ducimus ea eaque explicabo praesentium suscipit voluptatibus.
                            </p>
                        </div>
                        <div id="tab4" class="tab-pane" role="tabpanel">
                            <img src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/images/image7.jpg" alt="">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Asperiores consequuntur omnis repellat repudiandae temporibus veniam voluptatem. Corporis
                                eum nam obcaecati officia, officiis porro similique tenetur.
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="image1 advisorym5 cid-twFGB5Nnof mbr-fullscreen mbr-parallax-background" id="image1-4">




        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(29, 29, 29);">
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-1">
                            Business Consulting
                        </h2>
                        <p class="mbr-desc mbr-fonts-style display-7">
                            A doloremque harum nisi tempora <br> temporibus totam unde
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="form1 advisorym5 cid-twFGIu041V" id="form1-8">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5 card">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            Contacts
                        </h2>
                    </div>
                    <div class="contacts-wrap">
                        <p class="mbr-desc mbr-fonts-style display-4">
                            Our email
                        </p>
                        <a href="#">
                            <p class="mbr-link mbr-fonts-style display-7">
                                mobi@rise.com
                            </p>
                        </a>
                    </div>
                    <div class="contacts-wrap contacts-address">
                        <p class="mbr-desc mbr-fonts-style display-4">
                            Our address
                        </p>
                        <a href="#">
                            <p class="mbr-link mbr-fonts-style display-7">
                                1 CITY PIER CANANDAIGUA NY, USA
                            </p>
                        </a>
                    </div>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="#">
                            <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                            Go to map
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7 mx-auto mbr-form" data-form-type="formoid">
                    <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="BEsNTtNxKUdamd/b5EB7kdeRhbBp65jVa6o9RkgTvAWdQWKom7KugZZf/KS76pLAyymYJFVHBtA90q6jMYgKkxLfn6XzIJA29zuq0FWmVYFOh5V1Pd3PDUtf0WA7kvYL.eAbYn5FbRrB6VV6zzOjs6FUnU7s5B619fwln8JBvscvf20yiER3jz4+tF/hw7SoD9O1xZQnMr2DmuEFT6USfkim9Q9TyKcrPdVOmL/28qyKCI+rrsuCoXTZTDrmjpsFJ">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                                the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> Oops...! some
                                problem!
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="mbr-text mbr-fonts-style display-7">Fill the form below to get started
                                </p>
                            </div>
                            <div class="col-lg col-md col-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Your name" data-form-field="name" class="form-control display-7" value="" id="name-form1-8">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email" style="">
                                <input type="email" name="email" placeholder="Your email" data-form-field="email" class="form-control display-7" value="" id="email-form1-8">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="textarea">
                                <textarea name="textarea" placeholder="Your message" data-form-field="textarea" class="form-control display-7" id="textarea-form1-8"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-4">
                                    <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                                    Send message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="pricing1 advisorym5 cid-twFGErZxWc" id="pricing1-6">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            Our pricing
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card">
                    <div class="card-wrapper">
                        <div class="card-wrap">
                            <h3 class="mbr-card-title mbr-fonts-style display-5">
                                Basic
                            </h3>
                            <p class="mbr-price mbr-fonts-style display-1">
                                $30
                            </p>
                            <div class="list-wrap">
                                <ul class="list mbr-fonts-style display-7">
                                    <li class="item-wrap">Sit amet consectetur</li>
                                    <li class="item-wrap">Adipisicing molestiae</li>
                                    <li class="item-wrap">Debitis odit</li>
                                    <li class="item-wrap">Deleniti velit</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary display-4" href="#">
                                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                                Buy now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card">
                    <div class="card-wrapper">
                        <div class="card-wrap">
                            <h3 class="mbr-card-title mbr-fonts-style display-5">
                                Middle
                            </h3>
                            <p class="mbr-price mbr-fonts-style display-1">
                                $60
                            </p>
                            <div class="list-wrap">
                                <ul class="list mbr-fonts-style display-7">
                                    <li class="item-wrap">Alias consectetur</li>
                                    <li class="item-wrap">Consectetur elit</li>
                                    <li class="item-wrap">Doloremque illo</li>
                                    <li class="item-wrap">Expedita unde</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary display-4" href="#">
                                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                                Buy now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card">
                    <div class="card-wrapper">
                        <div class="card-wrap">
                            <h3 class="mbr-card-title mbr-fonts-style display-5">
                                Full
                            </h3>
                            <p class="mbr-price mbr-fonts-style display-1">
                                $90
                            </p>
                            <div class="list-wrap">
                                <ul class="list mbr-fonts-style display-7">
                                    <li class="item-wrap">Tempora earum</li>
                                    <li class="item-wrap">Voluptatibus debitis</li>
                                    <li class="item-wrap">Asperiores maxime</li>
                                    <li class="item-wrap">Impedit totam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary display-4" href="#">
                                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                                Buy now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content4 advisorym5 cid-twFGLYkcP9" id="content4-9">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="title-wrapper">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                            FAQ
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-7 card-wrap">
                    <div id="bootstrap-accordion_12" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_12" aria-expanded="false" aria-controls="collapse1">
                                    <h3 class="panel-title-edit mbr-fonts-style display-5">
                                        Nam neque perferendis quod?
                                    </h3>
                                    <span class="sign mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                                </a>
                            </div>
                            <div id="collapse1_12" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_12">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">
                                        Ipsum dolor sit amet, consectetur adipisicing elit. A, aut beatae blanditiis
                                        dolor expedita fugit laboriosam molestiae molestias nam neque nesciunt placeat
                                        quasi, repellat repellendus sapiente, sequi sint velit voluptatum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_12" aria-expanded="false" aria-controls="collapse2">
                                    <h3 class="panel-title-edit mbr-fonts-style display-5">
                                        Repellendus sapiente sequi?
                                    </h3>
                                    <span class="sign mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                                </a>
                            </div>
                            <div id="collapse2_12" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_12">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">
                                        A aliquam animi aspernatur
                                        cum cumque dicta doloremque dolores doloribus dolorum error fugit laboriosam maxime
                                        optio, provident quaerat sunt velit, vitae voluptatum!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_12" aria-expanded="false" aria-controls="collapse3">
                                    <h3 class="panel-title-edit mbr-fonts-style display-5">
                                        Quibusdam quidem repellat?
                                    </h3>
                                    <span class="sign mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                                </a>
                            </div>
                            <div id="collapse3_12" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_12">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">
                                        Architecto cum deserunt eaque fugiat, hic id illum ipsum libero minus molestias
                                        pariatur quia quibusdam quidem repellat saepe sit. Oloremque dolores doloribus
                                        dolorum error fugit laboriosam maxime optio, provident quaerat sunt velit,
                                        vitae voluptatum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_12" aria-expanded="false" aria-controls="collapse4">
                                    <h3 class="panel-title-edit mbr-fonts-style display-5">
                                        Laborum necessitatibus obcaecati?
                                    </h3>
                                    <span class="sign mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                                </a>
                            </div>
                            <div id="collapse4_12" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_12">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">
                                        Amet, consectetur adipisicing elit. Cum esse excepturi illum,
                                        minima modi perferendis quidem tempore voluptatum? Adipisci aperiam beatae debitis
                                        enim in itaque laborum necessitatibus obcaecati perspiciatis unde.
                                        Cum cumque dicta doloremque dolores doloribus dolorum error fugit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFive">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_12" aria-expanded="false" aria-controls="collapse5">
                                    <h3 class="panel-title-edit mbr-fonts-style display-5">
                                        Optio provident quaerat?
                                    </h3>
                                    <span class="sign mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                                </a>
                            </div>
                            <div id="collapse5_12" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_12">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">
                                        Culpa cupiditate doloremque, dolorum eaque incidunt iste modi molestias natus odio
                                        officia officiis quia quos sed tempora tempore velit? dolorum error fugit laboriosam
                                        maxime optio, provident quaerat sunt velit, vitae voluptatum.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="footer1 advisorym5 cid-twFGDsg78k" once="footers" id="footer1-5">






        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5 card">
                    <div class="list-wrapper">

                    </div>
                </div>
                <div class="col-12 col-lg-2 card">

                    <h4 class="mbr-section-title mbr-fonts-style display-7">Business Consulting</h4>
                </div>
                <div class="col-12 col-lg-5 card">
                    <div class="list-wrapper_2">

                    </div>
                </div>
                <div class="col-12">
                    <div class="text-wrapper">
                        <p class="mbr-text mbr-fonts-style display-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ea eius, eligendi.
                        </p>
                    </div>
                    <div class="copy-wrapper">
                        <p class="copyright mbr-fonts-style display-4">
                            © Copyright 2030 Mobirise - All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/parallax/jarallax.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/ytplayer/index.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/embla/embla.min.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/embla/script.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/mbr-tabs/mbr-tabs.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/theme/js/script.js"></script>
    <script src="https://mobirise.com/extensions/advisorym5/business-consulting/assets/formoid.min.js"></script>



</body>

</html>