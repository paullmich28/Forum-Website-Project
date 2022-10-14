<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodingAhay</title>
<?php include 'src/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
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
<div class="container form">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <a href="index.php" class="list-style-none">Go Back</a>
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
                            <input type="radio" name="user_gender" value="Laki-laki" class="form-check-input">Male<span class="mx-1"></span>
                            <input type="radio" name="user_gender" value="Perempuan" class="form-check-input">Female
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

    window.onload = checkingWindow;
    setInterval(checkingWindow, 500);
</script>
<?php
include 'src/footer.php';
?>