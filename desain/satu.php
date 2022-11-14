<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

    <style>
        .btn-open {
            background-color:#000;
            color:#fff;
            border-radius:50px;
            border:2px solid #fff;
            padding: 10px 20px;
        }
        .btn-open:hover {
            background-color:#fff;
            color:#000;
            border:2px solid #000;
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

        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .center-bottom {
            position: absolute;
            left: 50%;
            top: 80%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        
        .socmed {
            filter: grayscale(100%);
            transition: transform .5s ease;   
        }
        .socmed:hover {
            filter: grayscale(0%);
        }
    </style>

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

    <div class="container-fluid img-style p-0">
        <div class="img-style" style="height:100vh;background: linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)),url(<?= '../assets/img/beautiful-couple-having-their-wedding-beach-2-13.jpeg' ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white center">
                        <img src="<?= '../assets/img/beautiful-couple-having-their-wedding-beach-2-13.jpeg' ?>" class="img-150 img-style rounded-circle mb-4" alt="">
                        <h4 class="mb-3">The Wedding of</h4>
                        <h1 class="mb-3 fs-50 font-playfair">Romeo & Juliet</h1>
                        <p class="mb-3 fs-18">Dear Mr./ Mrs./ Ms.</p>
                        <h3 class="mb-3"><?= $_GET['to']??'Nama Tamu' ?></h3>
                        <p class="mb-4 fs-18">You are cordially invited to our wedding.</p>
                        <a href="#" class="btn btn-outline-open">Open Invitation</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <div class="container-fluid img-style p-0 div-relative">
        <div class="img-style" style="height:100vh;background: linear-gradient(0deg, rgb(0 0 0 / 25%), rgb(0 0 0 / 25%)),url(<?= '../assets/img/bride-groom-having-their-wedding-beach-10.jpeg' ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white center">
                        <h4 class="mb-5">The Wedding of</h4>
                        <h1 class="mb-3 fs-70 font-playfair">Romeo & Juliet</h1>
                        <p class="mb-3 fs-40 font-playfair">13 November 2022</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="container-fluid" style="background-image:url(<?= '../assets/img/white-art-paper-background.jpg' ?>)">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="mb-2">The Beloved</h3>
                    <h1 class="font-playfair mb-3">Groom & Bride</h1>
                    <p class="fs-18">Once in awhile, right in the middle of an ordinary life, love gives us a fairy tale.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-5 text-center div-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="w-75 rounded-circle" style="margin-top:10%" src="<?= '../assets/img/man.png' ?>">
                        </div>
                        <div class="col-lg-12" style="position:absolute;">
                            <img class="w-100" src="<?= '../assets/img/frame-rustic.png' ?>">
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-2 text-center div-relative">
                    <h1 class="font-playfair center fs-50">&</h1>
                </div> 
                <div class="col-lg-4 col-md-4 col-5 text-center div-relative">
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
                                <img src="<?= '../assets/img/icon-facebook.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-twitter.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-instagram.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-youtube.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
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
                                <img src="<?= '../assets/img/icon-facebook.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-twitter.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-instagram.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                            <a href="#" class="socmed">
                                <img src="<?= '../assets/img/icon-youtube.png' ?>" class="img-style img-40 rounded-circle m-1" alt="">
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color:#c2ad93;padding-top:100px;padding-bottom:100px">
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
                                <div class="card-header mb-3 text-white text-center img-style div-relative" style="border-radius:300px 300px 0 0;height:500px;background: linear-gradient(0deg, rgb(0 0 0 / 40%), rgb(0 0 0 / 40%)),url(<?= '../assets/img/beautiful-couple-having-their-wedding-beach-1-7.jpeg' ?>)">
                                    <div class="center-bottom">
                                        <h3 class="fs-30">Where & When</h3>
                                        <h1 class="fs-50 font-playfair">Wedding Day</h1>
                                    </div>
                                </div>
                                <div class="px-5 px-2-mobile">
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
                                                        <a href="#" class="btn btn-open mb-1">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            Open Map
                                                        </a>
                                                        <a href="#" class="btn btn-open mb-1">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            Add to Calender
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
                                                        <a href="#" class="btn btn-open mb-1">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            Open Map
                                                        </a>
                                                        <a href="#" class="btn btn-open mb-1">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            Add to Calender
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
                                            <a href="#" class="btn btn-open mb-1">
                                                <i class="fa-solid fa-video"></i>
                                                Join
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <div class="container-fluid" style="background-color:#d2b591;padding-top:100px;padding-bottom:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-white">
                    <h4>The Journey</h4>
                    <h1 class="font-playfair fs-50 mb-3">Our Love Story</h1>
                    <p>How it all started</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-top:100px;padding-bottom:100px;background-image:url(<?= '../assets/img/white-art-paper-background.jpg' ?>)">
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
                            'name' => 'beautiful-couple-having-their-wedding-beach-2-13.jpeg',
                        ],
                        [
                            'name' => 'beautiful-couple-having-their-wedding-beach-3-5.jpeg',
                        ],
                        [
                            'name' => 'beautiful-couple-having-their-wedding-beach-1-7.jpeg',
                        ],
                        [
                            'name' => 'beautiful-couple-having-their-wedding-beach-4-3.jpeg',
                        ],
                    ];
                ?>
                <?php foreach($gallery as $v) : ?>
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="dark-hover">
                            <img src="<?= '../assets/img/'.$v['name'] ?>" class="img-style w-100 my-3" style="height:25vw" onclick="openLightbox();toSlide(1)" class="hover-shadow" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="lightbox" class="modal" style="background-color: rgba(0, 0, 0, 0.8)">
        
        <span class="close pointer" onclick="closeLightbox()">&times;</span>
        <div class="w-80 center">
            <?php foreach ($gallery as $v) : ?>
            <div class="slide">
                <img src="<?= '../assets/img/'.$v['name'] ?>" class="w-100 img-style" style="height:40vw" alt="" />
            </div>
            <?php endforeach; ?>

            <div class="div-relative">
                <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>






<!-- LIGHTBOX -->
<style>
.slide {
  display: none;
}

img.active{
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
} 

.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.previous,
.next {
  cursor: pointer;
  position: absolute;
  bottom: 50%;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.previous:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

</style>



<script>
    
var slideIndex = 1;
showSlide(slideIndex);

function openLightbox() {
  document.getElementById('lightbox').style.display = 'block';
}

function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
}

function changeSlide(n) {
	showSlide(slideIndex += n);
}

function toSlide(n) {
	showSlide(slideIndex = n);
}

function showSlide(n) {

  const slides = document.getElementsByClassName('slide');

  if (n > slides.length) {
    slideIndex = 1;	
  }
  
  if (n < 1) {
  	slideIndex = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  
  slides[slideIndex - 1].style.display = 'block';
}
</script>
