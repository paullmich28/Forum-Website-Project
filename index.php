<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodingAhay</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php include 'src/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php" id="main">
            Coding<span class="half-font">Ahay</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <a class="btn btn-outline-success mx-3" id="login" href="login.php" role="button">
                    <i class="bx bx-log-in mx-auto"></i>
                    Login
                </a>
                <a class="btn btn-outline-primary mx-3" id="register" href="daftar.php" role="button">
                    <i class='bx bx-user-plus'></i>
                    Sign Up
                </a>
            </ul>
        </div>
    </div>
</nav>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active c-item" data-bs-interval="5000">
            <img src="homeimage/1.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 data-aos="fade-down" data-aos-duration="1000">Halo!</h5>
                <p data-aos="fade-up" data-aos-duration="1000">Selamat datang di CodingAhay!</p>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
            <img src="homeimage/2.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Ingin belajar coding bersama?</h5>
                <p>
                    Klik <a href="guest/index.php" class="text-white">Disini</a> aja!
                </p>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
            <img src="homeimage/3.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tertarik menjadi bagian dari kami?</h5>
                <a class="btn btn-primary mx-auto mt-3 buttons" href="daftar.php" role="button">
                    <i class='bx bx-user-plus'></i>
                    SIGN UP
                </a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="homeimage/4.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sudah menjadi bagian dari kami?</h5>
                <a class="btn btn-success mx-auto mt-3 buttons" href="login.php" role="button">
                    <i class="bx bx-log-in mx-auto"></i>
                    LOGIN
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="ilustrations/ilustrations.svg" alt="ilustrasi" class="img-fluid" data-aos="fade-left" data-aos-duration="1000">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2 data-aos="fade-right" data-aos-duration="1000">Apa itu CodingAhay?</h2>
                    <p data-aos="fade-left" data-aos-duration="1000">
                        CodingAhay adalah sebuah forum komunitas
                        dimana para programmer berkumpul dan
                        berdiskusi seputar hal percodingan.
                        Mulai dari yang awam sampai yang profesional,
                        semua ada disini. Kamu juga bisa belajar lewat
                        website ini loh!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutus section-padding bg-info">
    <div class="container">
        <h2 class="text-center" data-aos="fade-down" data-aos-duration="2500">Siapa kita?</h2>
        <div class="row mt-5">
            <div class="col-sm">
                <div class="card" data-aos="fade-down" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="ilustrations/biru.webp" alt="" class="w-100 h-auto">
                        <h4 class="text-center">Paulus Michael Leang</h4>
                        <div class="d-flex justify-content-center">
                            <i class='bx bxl-instagram ig'></i>
                            <p class="mt-1">@paullmich2801</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" data-aos="fade-down" data-aos-duration="1500">
                    <div class="card-body">
                        <img src="ilustrations/ijo.webp" alt="" class="w-100 h-auto">
                        <h4 class="text-center">Jonathan Dharma</h4>
                        <div class="d-flex justify-content-center">
                            <i class='bx bxl-instagram ig'></i>
                            <p class="mt-1">@nathan_dharma</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" data-aos="fade-down" data-aos-duration="2000">
                    <div class="card-body">
                        <img src="ilustrations/kuning.webp" alt="" class="w-100 h-auto">
                        <h4 class="text-center">James Bernard William</h4>
                        <div class="d-flex justify-content-center">
                            <i class='bx bxl-instagram ig'></i>
                            <p class="mt-1">@userrnamebw</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" data-aos="fade-down" data-aos-duration="2500">
                    <div class="card-body">
                        <img src="ilustrations/merah.webp" alt="" class="w-100 h-auto">
                        <h4 class="text-center">Liusianto</h4>
                        <div class="d-flex justify-content-center">
                            <i class='bx bxl-instagram ig'></i>
                            <p class="mt-1">@liusianto12 <br />(wajib follow ini no debat)</p><hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function checkingWindow(){
        let login = document.querySelector("#login");
        let register = document.querySelector("#register");

        if(window.innerWidth >= 576 && window.innerWidth <= 992){
            login.classList.remove("btn-outline-success");
            login.classList.add("btn-success");
            login.classList.add("mx-auto");
            login.classList.add("mt-2");

            register.classList.remove("btn-outline-primary");
            register.classList.add("btn-primary");
            register.classList.add("mx-auto");
            register.classList.add("mt-2");
        }else{
            login.classList.add("btn-outline-success");
            login.classList.remove("btn-success");
            login.classList.remove("mx-auto");
            login.classList.remove("mt-2");

            register.classList.add("btn-outline-primary");
            register.classList.remove("btn-primary");
            register.classList.remove("mx-auto");
            register.classList.remove("mt-2");
        }
    }

    $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    });

    window.onload = checkingWindow;
    setInterval(checkingWindow, 500);
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<?php
include 'src/footer.php';
?>