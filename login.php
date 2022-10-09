<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>">
    <link href="http://fonts.cdnfonts.com/css/nsai" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/muge" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include 'src/header.php'; ?>
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
    
</body>
</html>