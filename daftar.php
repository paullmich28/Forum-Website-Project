<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>">
    <link href="http://fonts.cdnfonts.com/css/nsai" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/muge" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <?php include 'src/header.php'; ?>
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
</body>
</html>