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
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>">
    <link href="http://fonts.cdnfonts.com/css/nsai" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/muge" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'src/header.php'; ?>
    <div class="backgroundImg">
        <div class="container my-3">
            <!-- <h2 class="text-center mt-md-4">Mau belajar apa?</h2>
            <div class="row">
                <?php /* for ($i=0; $i < iterator_count($count) - 1; $i++) : */ ?>
                <div class="col-md-3 justify-content-center">
                    <div class="card mt-4 mb-4 w-75 mx-auto text-light bg-dark bg-gradient">
                        <img src="img/<?php /* echo $i */ ?>.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3"><?= $lang[$i]; ?></h5>
                            <a href="#" class="d-flex btn btn-primary justify-content-center">Gaskeun..</a>
                        </div>
                    </div>
                </div>
                <?php /* endfor; */ ?>
            </div> -->
            <h2 class="text-center mt-5 fw-bold">Halo! Selamat datang di CodingAhay!</h2><br />
            <div class="row mt-4">
                <div class="col-sm-4 ms-auto">
                    <p>
                        <small>CodingAhay adalah sebuah forum dimana para programmer dari seluruh Indonesia berkumpul.<br /><br />
                        Ayo kita semua belajar bersama di <span><a href="#">CodingAhay!</a></span><br />
                        Ingin menjadi bagian dari kami? <br /><span><a class="btn btn-primary mt-2" href="daftar.php" role="button">Sign Up</a></span><br /><br />
                        Sudah menjadi bagian dari kami?<br />
                        <span><a class="btn btn-success mt-2" href="login.php" role="button">Login</a></span></small>
                    </p>
                </div>
                <div class="col-sm-5">
                    <img src="ilustrations/ilustrations.svg" alt="ilustrasi" class="rounded float-start mt-4 w-75" />
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#about').removeClass('active')
        })
    </script>
</body>
</html>