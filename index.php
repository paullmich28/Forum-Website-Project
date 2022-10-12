<?php 
include 'src/isiKartu.php'; 
include 'img/counter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodingAhay</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
<?php include 'src/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php" id="main">
            Coding<span class="half-font">Ahay</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                <li class="nav-item ms-2">
                    <a class="nav-link fw-bold" href="about.php" id="about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-lg-0">
                <a class="btn btn-outline-success mx-3" href="login.php" role="button">
                    <i class="bx bx-log-in mx-auto"></i>
                    Login
                </a>
                <a class="btn btn-outline-primary mx-3" href="daftar.php" role="button">
                    <i class='bx bx-user-plus'></i>
                    Sign Up
                </a>
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
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
                <h5>Halo!</h5>
                <p>Selamat datang di CodingAhay!</p>
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
                <a class="btn btn-primary mx-auto mt-3 p-3 fs-1" href="daftar.php" role="button">
                    <i class='bx bx-user-plus'></i>
                    Sign Up
                </a>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
            <img src="homeimage/4.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sudah menjadi bagian dari kami?</h5>
                <a class="btn btn-success mx-auto mt-3 p-3 fs-1" href="login.php" role="button">
                    <i class="bx bx-log-in mx-auto"></i>
                    Login
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<?php
include 'src/footer.php';
?>