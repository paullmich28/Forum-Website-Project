<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodingAhay</title>
<?php include 'src/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="main">
            <img src="profil/profile_temp.png" alt="Logo" width="40" height="auto" class="d-inline-block align-text-bottom">
            <span class="judul">CodingAhay</span>
        </a>
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
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card bg-dark bg-gradient text-light">
                <div class="card-body">
                <h5 class="text-center bg-primary text-light p-3 rounded w-50 mx-auto">Register Page</h5>
                    <?php
                    if(isset($_GET['status'])){
                        if($_GET['status'] == "terdaftar"){
                    ?>
                        <div class="alert alert-danger text-center">
                            <span class="font-weight-bold">Email sudah terdaftar.</span><br />
                            <span class="font-weight-light">Silahkan daftar menggunakan email lain.</span>
                        </div>
                    <?php
                        }
                    }
                    ?>
                    <form action="daftar_proses.php" method="post">
                        <div class="form-group mt-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="user_nama" class="form-control" autocomplete="off" placeholder="Masukkan nama lengkap .." required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Email</label>
                            <input type="email" name="user_email" class="form-control" autocomplete="off" placeholder="Masukkan email .." required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Password</label>
                            <input type="password" name="user_password" class="form-control" autocomplete="off" placeholder="Masukkan password .." required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Jenis Kelamin</label><br />
                            <input type="radio" name="user_gender" value="Male" class="form-check-input">Male
                            <input type="radio" name="user_gender" value="Female" class="form-check-input">Female
                        </div>
                        <div class="form-group mt-3">
                            <label>Tempat Lahir</label>
                            <input type="text" name="user_birthplace" class="form-control" autocomplete="off" placeholder="Masukkan tempat lahir .." required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="user_birthdate" class="form-control" placeholder="Masukkan tgl lahir .." required>
                        </div>
                        <div class="text-center mt-3">
                            <input type="submit" class="btn btn-primary btn-block w-50" value="Daftar">
                        </div>
                        <p class="text-center mt-3">
                            Sudah punya akun? 
                            <br>
                            <small><a href="login.php">Login</a></small>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'src/footer.php';
?>