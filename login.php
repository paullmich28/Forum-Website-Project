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
                <div class="card-body pt-4 pb-3">
                    <h5 class="text-center bg-success text-light p-3 rounded w-50 mx-auto">Login Page</h5>
                    <?php
                    if(isset($_GET['status'])){
                        if($_GET['status'] == "registerdone"){ ?>
                            <div class="alert alert-success text-center mt-4 mb-4 w-75 mx-auto">
                                <span class="font-weight-bold">Anda berhasil mendaftar.</span><br />
                                <small class="font-weight-light">Selanjutnya silahkan login.</small>
                            </div>
                    <?php
                        }elseif($_GET['status'] == "success"){ ?>
                            <div class="alert alert-success text-center mt-4 mb-4 w-75 mx-auto">
                                <span class="font-weight-bold">Anda berhasil login.</span><br />
                            </div>   
                    <?php
                        }elseif($_GET['status'] == 'loginfail'){ ?>
                            <div class="alert alert-danger text-center mt-4 mb-4 w-75 mx-auto">
                                <span class="font-weight-bold">Anda gagal login.</span><br />
                            </div>  
                    <?php
                        }
                    }
                    ?>
                    <form action="login_proses.php" method="post">
                        <div class="form-group mt-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Masukkan email .." required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password .." required>
                        </div>
                        <div class="col text-center mt-4">
                            <input type="submit" class="btn btn-primary btn-block w-50" value="LOGIN">
                        </div>
                        <p class="text-center mt-3">
                            Belum punya akun?<br />
                            <small><a href="daftar.php">Daftar Sekarang</a></small>
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