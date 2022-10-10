<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <title>Home | CodingAhay</title>
<?php include '../src/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                <li class="nav-item ms-2">
                    <a class="nav-link" href="about.php" id="about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-lg-0">
                <a class="btn btn-outline-success mx-3" href="login.php" role="button">Login</a>
                <a class="btn btn-outline-primary mx-3" href="daftar.php" role="button">Sign Up</a>
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </ul>
        </div>
    </div>
</nav>
<div class="main-container d-flex">
    <div class="sidebar bg-dark" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4">
            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">CL</span><span class="text-white">Coding League</span></h1>
            <button class="btn close-btn d-md-none d-block px-1 py-0 text-white"><i class="fa-regular fa-bars"></i></button>
        </div>
        <ul class="list-unstyled px-2">
            <li><a href="#" class="text-decoration-none"><i class="fa-regular fa-house-user"></i> Dashboard</a></li>
            <li><a href="#" class="text-decoration-none"><i class="fa-regular fa-list"></i> Categories</a></li>
            <li><a href="#" class="text-decoration-none">Dashboard</a></li>
        </ul>
        <hr class="h-color mx-3" >
    </div>
    <div class="content">

    </div>
</div>

<?php include '../src/footer.php' ?>
