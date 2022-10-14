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
            <a href="index.php">
                <i class='bx bx-arrow-back' ></i>
                Go back
            </a>
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
                        }elseif($_GET['status'] == 'logout'){ ?>
                            <div class="alert alert-danger text-center mt-4 mb-4 w-75 mx-auto">
                                <span class="font-weight-bold">Anda telah logout.</span><br />
                            </div>  
                    <?php
                        }
                    }
                    ?>
                    <form action="login_proses.php" method="post" class="login-form">
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
