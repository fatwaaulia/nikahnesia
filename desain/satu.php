<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <style>
    /* POPPINS FONT */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    /* FONT PLAYFAIR */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    /* FONT AWESOME ICON */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

    .font-playfair {
        font-family: 'Playfair Display', serif!important;
    }

    h1,h2,h3,h4,h5,h6,p,span,a,div,button,label {
        font-family: 'Poppins', sans-serif!important;
        /* letter-spacing: 0.3px!important; */
    }
    img, video, iframe {
        border-radius: 0.25rem;
    }
    a {
        text-decoration: none;
    }

    /* IMAGE STYLE */
    .img-style {
        background-repeat: no-repeat!important;
        background-size: cover!important;
        background-position-y: center!important;
        background-position-x: center!important;
        object-fit: cover!important;
    }

    /* FONT-SIZE */
    .fs-12 { font-size: 12px; } .fs-14 { font-size: 14px; } .fs-16 { font-size: 16px; } .fs-18 { font-size: 18px; } .fs-20 { font-size: 20px; } .fs-22 { font-size: 22px; } .fs-24 { font-size: 24px; } .fs-26 { font-size: 26px; } .fs-28 { font-size: 28px; } .fs-30 { font-size: 30px; } .fs-32 { font-size: 32px; } .fs-34 { font-size: 34px; } .fs-36 { font-size: 36px; } .fs-38 { font-size: 38px; } .fs-40 { font-size: 40px; } .fs-42 { font-size: 42px; } .fs-44 { font-size: 44px; } .fs-46 { font-size: 46px; } .fs-48 { font-size: 48px; } .fs-50 { font-size: 50px; } .fs-52 { font-size: 52px; } .fs-54 { font-size: 54px; } .fs-56 { font-size: 56px; } .fs-58 { font-size: 58px; } .fs-60 { font-size: 60px; } .fs-62 { font-size: 62px; } .fs-64 { font-size: 64px; } .fs-66 { font-size: 66px; } .fs-68 { font-size: 68px; } .fs-70 { font-size: 70px; } .fs-72 { font-size: 72px; } .fs-74 { font-size: 74px; } .fs-76 { font-size: 76px; } .fs-78 { font-size: 78px; } .fs-80 { font-size: 80px; } .fs-82 { font-size: 82px; } .fs-84 { font-size: 84px; } .fs-86 { font-size: 86px; } .fs-88 { font-size: 88px; } .fs-90 { font-size: 90px; } .fs-92 { font-size: 92px; } .fs-94 { font-size: 94px; } .fs-96 { font-size: 96px; } .fs-98 { font-size: 98px; } .fs-100 { font-size: 100px; }

    /* WIDTH HEIGHT */
    .wh-40 {
        width: 40px!important;
        height: 40px!important;
    }
    .wh-50 {
        width: 50px!important;
        height: 50px!important;
    }
    .wh-100 {
        width: 100px!important;
        height: 100px!important;
    }
    .wh-150 {
        width: 150px!important;
        height: 150px!important;
    }

    /* MEDIA */
    @media (max-width: 576px) { 
        .w-50 {
            width:100%!important;
        }
        .fs-50 {
            font-size: 30px;
        }
        .fs-30 {
            font-size: 26px;
        }
        .fs-24 {
            font-size: 20px;
        }
        .fs-20 {
            font-size: 16px;
        }
    }

    /* DARK HOVER */
    .dark-hover{
        background-color: #000;
        border-radius: 0.25rem;
    }
    .dark-hover img {
        display: block;
        opacity: 1;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .dark-hover img:hover {
        opacity: .5;
    }
    
    .form-control:focus, .form-check-input:focus {
        border-color: #9b8770;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(194, 173, 147, 0.6);
    }

    .c-main {
        color: #9b8770!important;
    }
    .bg-main {
        background-color: #9b8770!important;
    }

    .btn-main {
        background-color:#9b8770;
        color:#fff;
        border-radius:50px;
        border:2px solid #9b8770;
        padding: 8px 24px;
    }
    .btn-main:hover {
        background-color:#c2ad93;
        color:#fff;
        border:2px solid #9b8770;
    }

    .btn-outline-open {
        background-color:#fff;
        color:#000;
        border-radius:50px;
        border:2px solid #fff;
        padding: 10px 20px;
    }
    .btn-outline-open:hover {
        background-color:#000;
        color:#fff;
        border:2px solid #fff;
    }
    
    .socmed {
        filter: grayscale(100%);
        transition: transform .5s ease;   
    }
    .socmed:hover {
        filter: grayscale(0%);
    }
    </style>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <?php
        // for ($i=12; $i <=100 ; $i++) { 
        //     if ($i%2 == 0) {
        //         echo '
        //         .fs-'.$i.' {
        //             font-size: '.$i.'px;
        //         }';
        //     }
        // }
    ?>
<script>
    function open_invitation() {
        $('#halaman_1').toggleClass('d-block d-none');
        $('#halaman_2').toggleClass('d-none d-block');
    }
</script>

<div id="halaman_1" class="d-block">

    <section>
    <div class="container-fluid img-style p-0">
        <div class="img-style vh-100" style="background: linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)),url(<?= '../assets/img/beautiful-couple-having-their-wedding-beach-2-13.jpeg' ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white position-absolute top-50 start-50 translate-middle">
                        <img data-aos="zoom-in" data-aos-duration="1000" src="<?= '../assets/img/beautiful-couple-having-their-wedding-beach-2-13.jpeg' ?>" class="wh-150 img-style rounded-circle mb-4" alt="">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="mb-3">The Wedding of</h4>
                            <h1 class="mb-3 fs-50 font-playfair">Aang Muammar Zein & Lufita Sari Dwi Lestari</h1>
                            <p class="mb-3 fs-18">Dear Mr./ Mrs./ Ms.</p>
                            <h3 class="mb-3"><?= $_GET['to']??'Nama Tamu' ?></h3>
                            <p class="mb-4 fs-18">You are cordially invited to our wedding.</p>
                            <a href="#" class="btn btn-outline-open" onclick="open_invitation()">Open Invitation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    </section>

</div>

<div id="halaman_2" class="d-none position-relative">

    <section>
    <div class="container-fluid img-style p-0 position-fixed">
        <div class="img-style vh-100" style="background: linear-gradient(0deg, rgb(0 0 0 / 25%), rgb(0 0 0 / 25%)),url(<?= '../assets/img/bride-groom-having-their-wedding-beach-10.jpeg' ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white position-absolute top-50 start-50 translate-middle">
                        <h4 class="mb-5">The Wedding of</h4>
                        <h1 class="mb-3 fs-70 font-playfair">Romeo & Juliet</h1>
                        <p class="mb-3 fs-40 font-playfair">13 November 2022</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    </section>

    <section>
    <div class="vh-100">
        <!--  -->
    </div>
    </section>

    <style>
        .custom-shape-divider-bottom-1668584614 {
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1668584614 svg {
        position: relative;
        display: block;
        width: calc(131% + 1.3px);
        height: 136px;
    }

    .custom-shape-divider-bottom-1668584614 .shape-fill {
        fill: #e1e3e3;
    }
    </style>
    <div class="custom-shape-divider-bottom-1668584614">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>

    <section id="div-couple">
    <div class="container-fluid position-relative" style="background-color:#e1e3e3;margin-bottom:-85px;padding-bottom:50px">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="mb-2">The Beloved</h3>
                    <h1 class="font-playfair mb-3">Groom & Bride</h1>
                    <p class="fs-18">Once in awhile, right in the middle of an ordinary life, love gives us a fairy tale.</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-5 text-center position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="w-75 rounded-circle" style="margin-top:10%" src="<?= '../assets/img/man.png' ?>">
                        </div>
                        <div class="col-lg-12" style="position:absolute;">
                            <img class="w-100" src="<?= '../assets/img/frame-rustic.png' ?>">
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-2 text-center position-relative">
                    <h1 class="font-playfair position-absolute top-50 start-50 translate-middle fs-50">&</h1>
                </div> 
                <div class="col-lg-4 col-md-4 col-5 text-center position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="w-75 rounded-circle" style="margin-top:10%" src="<?= '../assets/img/woman.png' ?>">
                        </div>
                        <div class="col-lg-12" style="position:absolute;">
                            <img class="w-100" src="<?= '../assets/img/frame-rustic.png' ?>">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-5 text-center">
                    <h1 class="fs-30 mt-5 font-playfair">Aang Muammar Zein</h1>
                    <img src="<?= '../assets/img/divider-rustic.png' ?>" class="w-50 my-3" alt="">
                    <h3 class="fs-24">Anak Pertama dari</h3>
                    <p class="fs-20">Bapak Rudi Handoko & Ibu Nur Aini Azizah</p>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-facebook.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-twitter.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-instagram.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-youtube.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-2 text-center">
                    <!-- zero content -->
                </div> 
                <div class="col-lg-4 col-md-4 col-5 text-center">
                    <h1 class="fs-30 mt-5 font-playfair">Lufita Sari Dwi Lestari</h1>
                    <img src="<?= '../assets/img/divider-rustic.png' ?>" class="w-50 my-3" alt="">
                    <h3 class="fs-24">Anak Kedua dari</h3>
                    <p class="fs-20">Bapak Agus Haidori & Ibu Sulistiana</p>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-facebook.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-twitter.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-instagram.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-youtube.png' ?>" class="img-style wh-40 rounded-circle m-1" alt="">
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    </section>

    <style>
    .custom-shape-divider-bottom-293874932 {
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-293874932 svg {
        position: relative;
        display: block;
        width: calc(153% + 1.3px);
        height: 85px;
    }

    .custom-shape-divider-bottom-293874932 .shape-fill {
        fill: #C2AD93;
    }
    </style>
    <div class="custom-shape-divider-bottom-293874932">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <section class="position-relative" id="div-calendar">
    <div class="container-fluid" style="background-color:#c2ad93;padding-top:100px;padding-bottom:100px;margin-bottom:-85px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="background-color:#9b8770;border-radius:500px 500px 210px 210px;padding:70px 0 0 0;">
                        <div class="card-body">
                            <div class="text-center text-white">
                                <h4>Countdown to</h4>
                                <h1 class="font-playfair fs-50 mb-5">Our Happy Day</h1>
                                <div class="container">
                                    <div class="row mb-5">
                                        <div class="offset-lg-1 col-lg-2 offset-lg-1 col-md-3">
                                            <h1 class="fs-50" id="days"></h1>
                                            <p class="font-playfair">Days</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h1 class="fs-50" id="hours"></h1>
                                            <p class="font-playfair">Hours</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h1 class="fs-50" id="minutes"></h1>
                                            <p class="font-playfair">Minutes</p>
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <h1 class="fs-50" id="seconds"></h1>
                                            <p class="font-playfair">Seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card pb-4 border border-0" style="border-radius:300px 300px 200px 200px;">
                                <div class="card-header mb-3 text-white text-center img-style position-relative" style="border-radius:300px 300px 0 0;height:500px;background: linear-gradient(0deg, rgb(0 0 0 / 40%), rgb(0 0 0 / 40%)),url(<?= '../assets/img/beautiful-couple-having-their-wedding-beach-1-7.jpeg' ?>)">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <h3 class="fs-24">Where & When</h3>
                                        <h1 class="fs-50 font-playfair">Wedding Day</h1>
                                    </div>
                                </div>
                                <div class="px-lg-5 px-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12 my-3">
                                            <h1 class="font-playfair text-center">Holy Matrimony</h1>
                                            <hr style="border-top:2px solid #000">
                                            <div class="container">
                                                <div class="row mb-2">
                                                    <div class="col-2 col-md-1">
                                                        <i class="fa-regular fa-calendar"></i>
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <span>Saturday, 9 September 2022</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                <div class="col-2 col-md-1">
                                                        <i class="fa-regular fa-clock"></i>
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <span>10.00 - 12.00 WIB</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-2 col-md-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <b>Shangri-La Hotel Jakarta</b> <br>
                                                        <span>Jl. Jenderal Sudirman No.Kav. 1, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, DKI Jakarta 10220</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 text-center">
                                                        <a href="#">
                                                            <button class="btn-main mt-2 me-2">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                                Open Map
                                                            </button>
                                                        </a>
                                                        <a href="#">
                                                            <button class="btn-main mt-2">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                                Add to Calender
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-12 my-3">
                                            <h1 class="font-playfair text-center">Wedding Reception</h1>
                                            <hr style="border-top:2px solid #000">
                                            <div class="container">
                                                <div class="row mb-2">
                                                    <div class="col-2 col-md-1">
                                                        <i class="fa-regular fa-calendar"></i>
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <span>Saturday, 9 September 2022</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                <div class="col-2 col-md-1">
                                                        <i class="fa-regular fa-clock"></i>
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <span>18.00 - 21.00 WIB</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-2 col-md-1">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <b>Shangri-La Hotel Jakarta</b> <br>
                                                        <span>Jl. Jenderal Sudirman No.Kav. 1, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, DKI Jakarta 10220</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 text-center">
                                                        <a href="#">
                                                            <button class="btn-main mt-2 me-2">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                                Open Map
                                                            </button>
                                                        </a>
                                                        <a href="#">
                                                            <button class="btn-main mt-2">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                                Add to Calender
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-12 text-center">
                                            <i class="fa-solid fa-wifi fs-50"></i>
                                            <h1 class="font-playfair">Live Streaming</h1>
                                            <div class="row">
                                                <div class="offset-lg-2 col-lg-8 offset-lg-2">
                                                    <hr class="my-4">
                                                </div>
                                            </div>
                                            <p>We will broadcast the wedding ceremony virtually</p>
                                            <a href="#">
                                                <button class="btn-main my-2">
                                                    <i class="fa-solid fa-video"></i>
                                                    Join
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script>
    function makeTimer() {
        //	var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
        var endTime = new Date("29 December 2022 09:56:00 GMT+07:00");			
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400); 
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $("#days").html(days);
        $("#hours").html(hours);
        $("#minutes").html(minutes);
        $("#seconds").html(seconds);
    }
    setInterval(function() { makeTimer(); }, 1000);
    </script>

<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <script src="../assets/js/owl.carousel.min.js"></script>
         <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 30,
                nav: false,
                loop: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
              })
            })
         </script>

    <style>
    .custom-shape-divider-bottom-1668598235 {
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1668598235 svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 84px;
    }

    .custom-shape-divider-bottom-1668598235 .shape-fill {
        fill: #D2B591;
    }
    </style>
    <div class="custom-shape-divider-bottom-1668598235">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>

    <section class="position-relative" id="div-journey">
    <div class="container-fluid" style="background-color:#d2b591;padding-top:100px;padding-bottom:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-white">
                    <h4>The Journey</h4>
                    <h1 class="font-playfair fs-50 mb-3">Our Love Story</h1>
                    <p>How it all started</p>
                </div>
            </div>
        
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">

                        <?php 
                            $love_story = [
                            [
                                'tanggal' => '01 Januari 2019',
                                'img' => 'beautiful-couple-having-their-wedding-beach-2-13.jpeg',
                                'judul' => 'Awal Bertemu',
                                'deskripsi' => 'Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.',
                            ],
                            [
                                'tanggal' => '02 Februari 2020',
                                'img' => 'beautiful-couple-having-their-wedding-beach-3-5.jpeg',
                                'judul' => 'Meminta Restu Orang Tua',
                                'deskripsi' => 'Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.',
                            ],
                            [
                                'tanggal' => '03 Maret 2021',
                                'img' => 'beautiful-couple-having-their-wedding-beach-3-5.jpeg',
                                'judul' => 'Lamaran',
                                'deskripsi' => 'Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.',
                            ],
                            [
                                'tanggal' => '04 Juni 2022',
                                'img' => 'beautiful-couple-having-their-wedding-beach-3-5.jpeg',
                                'judul' => 'Akad Nikah',
                                'deskripsi' => 'Lorem ipsum dolor sit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.',
                            ],
                        ];
                        foreach ($love_story as $v) : 
                        ?>
                        <div class="">
                            <div class="text-center">
                                <div class="badge bg-main">
                                    <label class="fs-16"><?= $v['tanggal'] ?></label>
                                </div>
                            </div>
                            <hr style="border-top:5px solid #fff;width:110%" class="mb-0">
                            <div class="text-center c-main">
                                &#9551;
                            </div>
                            <div class="card text-white p-2 bg-main">
                                <img src="<?= '../assets/img/'.$v['img'] ?>" class="img-style w-100" style="height:150px" alt="">
                                <h5 class="pt-2"><?= $v['judul'] ?></h5>
                                <span><?= $v['deskripsi'] ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>



    <section class="position-relative" id="div-gallery">
    <div class="container-fluid" style="padding-top:100px;padding-bottom:100px;background-image:url(<?= '../assets/img/white-art-paper-background.jpg' ?>);margin-bottom:-85px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>A Glimpse of</h4>
                    <h1 class="font-playfair fs-50 mb-3">Our Moments</h1>
                    <span>I would rather share one lifetime with you than face all the ages of this world alone.</span> <br>
                    <b>J. R. R. Tolkien</b>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <iframe class="mt-5 w-100" style="height:35vw" src="https://www.youtube.com/embed/SvXXJsFh7L4" title="YouTube video player" allowfullscreen></iframe>
                </div>
            </div>
            
            <div class="row">
                <?php
                    $gallery = [
                        [
                            'img' => 'beautiful-couple-having-their-wedding-beach-2-13.jpeg',
                        ],
                        [
                            'img' => 'beautiful-couple-having-their-wedding-beach-3-5.jpeg',
                        ],
                        [
                            'img' => 'beautiful-couple-having-their-wedding-beach-1-7.jpeg',
                        ],
                        [
                            'img' => 'beautiful-couple-having-their-wedding-beach-4-3.jpeg',
                        ],
                    ];
                ?>
                <?php foreach($gallery as $v) : ?>
                    <div class="col-lg-6 col-md-6 col-6" style="margin-right:-5px;margin-left:-5px">
                        <div class="dark-hover">
                            <img src="<?= '../assets/img/'.$v['img'] ?>" class="img-style w-100 my-3 hover-shadow" style="height:25vw" onclick="openLightbox();toSlide(1)" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    </section>

    <style>
    .custom-shape-divider-bottom-1668597604 {
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1668597604 svg {
        position: relative;
        display: block;
        width: calc(153% + 1.3px);
        height: 85px;
    }

    .custom-shape-divider-bottom-1668597604 .shape-fill {
        fill: #d2b591;
    }
    </style>
    <div class="custom-shape-divider-bottom-1668597604">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <section class="position-relative">
    <div class="container-fluid" style="padding-top:100px;padding-bottom:100px;background-color:#d2b591">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>This event will be held using</h4>
                    <h1 class="font-playfair fs-50 mb-3">Health Protocol</h1>
                </div>
            </div>
            <div class="row text-center mt-5">
                        <div class="offset-lg-2 col-lg-2 offset-lg-2 col-md-4 col-4">
                            <img src="<?= '../assets/img/Asset-2.png' ?>" class="wh-100 img-style" alt="" />
                            <p class="mt-1">Wear Masker</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <img src="<?= '../assets/img/Asset-6.png' ?>" class="wh-100 img-style" alt="" />
                            <p class="mt-1">Use Soap</p>
                        </div>
                        <div class="col-lg-2 col-md-4 col-4">
                            <img src="<?= '../assets/img/Asset-7.png' ?>" class="wh-100 img-style" alt="" />
                            <p class="mt-1">Washing Hand</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="offset-lg-2 col-lg-2 offset-lg-2 col-md-4 col-4">
                            <img src="<?= '../assets/img/Asset-5.png' ?>" class="wh-100 img-style" alt="" />
                            <p class="mt-1">Avoid the Crowds</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <img src="<?= '../assets/img/Asset-4.png' ?>" class="wh-100 img-style" alt="" />
                            <p class="mt-1">Use Hand Sanitizer</p>
                        </div>
                        <div class="col-lg-2 col-md-4 col-4">
                            <img src="<?= '../assets/img/Asset-3.png' ?>" class="wh-100 img-style" alt="" />
                            <p class="mt-1">No Hand Shake</p>
                        </div>
                    </div>
        </div>
    </div> 
    </section>


    <section class="position-relative" id="div-rsvp">
    <div class="container-fluid" style="padding-top:100px;padding-bottom:100px;background-image:url(<?= '../assets/img/white-art-paper-background.jpg' ?>);margin-bottom:-85px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="font-playfair fs-50 mb-3">RSVP</h1>
                    <span>Please Confirm Your Attendance</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-2 offset-lg-2 col-lg-8 col-md-12 col-12">
                    <div class="card p-3">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan namamu">
                            </div>
                            <div class="mb-3">
                                <label for="kehadiran" class="form-label">Kehadiran</label>
                                <div class="form-check form-switch ps-5">
                                    <input class="form-check-input me-3" type="checkbox" name="kehadiran" role="switch" id="kehadiran" checked onclick="validate()" style="transform: scale(1.5);">
                                    <label class="form-check-label" for="kehadiran" id="statusKehadiran">Hadir</label>
                                </div>
                                <script>
                                    function validate(){
                                    if (document.getElementById('kehadiran').checked){
                                            document.getElementById('statusKehadiran').innerHTML = 'Hadir';
                                        } else {
                                            document.getElementById('statusKehadiran').innerHTML = 'Tidak Hadir';
                                        }
                                    }
                                </script>
                            </div>
                            <button type="submit" class="btn-main">
                                <i class="fa-solid fa-paper-plane me-1"></i>
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="font-playfair fs-50 mb-3 mt-5">Make a Wish</h1>
                    <span>It is an honor and pleasure for us, if you can attend and give us your blessing</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-2 offset-lg-2 col-lg-8 col-md-12 col-12">
                    <div class="card p-3">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan namamu">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Ucapan & Doa</label>
                                <textarea class="form-control" id="deskripsi" rows="3" placeholder="Semoga pernikahan kalian sakinah mawadah warohmah ya😊"></textarea>
                            </div>
                            <button type="submit" class="btn-main">
                                <i class="fa-solid fa-paper-plane me-1"></i>
                                Kirim
                            </button>
                        </form>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">
                                                <span>Fatwa Aulia</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <span>01 Januari 2022 19:30</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, veritatis. Ipsum corporis voluptatibus optio beatae incidunt corrupti tempora placeat magni, non, aperiam quaerat sequi accusamus deleniti. Quam, voluptatibus. Laboriosam, illum!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <style>
    .custom-shape-divider-bottom-1668602577 {
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1668602577 svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 53px;
    }

    .custom-shape-divider-bottom-1668602577 .shape-fill {
        fill: #D2B591;
    }
    </style>
    <div class="custom-shape-divider-bottom-1668602577">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <section class="position-relative" id="div-gift">
    <div class="container-fluid" style="padding-top:100px;padding-bottom:100px;background-color:#d2b591">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="font-playfair fs-50 mb-3">Send Gift</h1>
                    <p>Your prayers & blessings at our wedding is enough as a gift, but if you want to give more, we are happy to receive it and it will complement our happiness even more</p>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="offset-lg-1 col-lg-5 offset-lg-1 col-md-6 col-6">
                    <img src="<?= '../assets/img/icon-envelope.png' ?>" class="wh-100 img-style" alt="" />
                    <h3 class="mt-1">TF Bank</h3>
                    <button class="btn-main">
                        Buka
                    </button>
                </div>
                <div class="col-lg-5 col-md-6 col-6">
                    <img src="<?= '../assets/img/icon-envelope.png' ?>" class="wh-100 img-style" alt="" />
                    <h3 class="mt-1">Top Up</h3>
                    <button class="btn-main">
                        Buka
                    </button>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-lg-12 text-center">
                    <img src="<?= '../assets/img/icon-gift.png' ?>" class="wh-100 img-style" alt="" />
                    <h3 class="mt-1">Kirim Kado</h3>
                    <p>
                        Jl. Diponegoro No. 61 Genteng Banyuwangi 68465 <br>
                        Aselole Aselole<br>
                        08123456789
                
                    </p>
                    <button class="btn-main">
                        <i class="fa-regular fa-clone me-1"></i>
                        Salin Alamat
                    </button>
                </div>
            </div>

        </div>
    </div> 
    </section>

    
    <section>
    <div class="container-fluid img-style p-0 position-relative">
        <div class="img-style vh-100" style="background: linear-gradient(0deg, rgb(0 0 0 / 25%), rgb(0 0 0 / 25%)),url(<?= '../assets/img/bride-groom-having-their-wedding-beach-10.jpeg' ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white position-absolute top-50 start-50 translate-middle">
                        <h4>Thank You</h4>
                        <h1 class="my-5 fs-70 font-playfair">Romeo & Juliet</h1>
                        <h3>The Big Family of</h3>
                        <span>Bapak Rudi Handoko & Ibu Nur Aini Azizah</span> <br>
                        <span>Bapak Agus Haidori & Ibu Sulistiana</span>

                        <div class="mt-5">
                            <img src="<?= '../assets/img/logo-nikahnesia-white-v2.png' ?>" class="img-style" style="height:100px" alt="" />
                            <p class="mt-3">Made with ❤️ by Nikahnesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    </section>

</div>



    <!-- BOOTSTRAP 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
