<?php
include '../koneksi.php';

session_start();
$id = $_SESSION['user_id'];

$sql = "SELECT * FROM user WHERE id = ?";

$stmt = $db->prepare($sql);
$online = [$id];
$stmt->execute($online);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php include '../src/header.php' ?>
<div class="sidebar bg-dark">
    <div class="logo_content">
        <div class="logo text-white">
            <div class="logo_name fw-bold title">Coding<span class="half-color">Ahay</span></div>
        </div>
        <i class='bx bx-menu text-white btn'></i>
    </div>
    <ul class="navbar-nav">
        <li>
            <i class='bx bx-search mt-2'></i>
            <form action="test.php" method="post">
                <input type="text" placeholder="Search . . .">
            </form> 
        </li>
        <li>
            <a href="index.php" class="home list">
                <i class='bx bx-home'></i>
                <span class="links_name">Home</span>
            </a>
        </li>
        <li>
            <a href="#" class="category list">
                <i class='bx bx-category'></i>
                <span class="links_name">Categories</span>
            </a>
        </li>
        <li>
            <a href="#" class="about list">
                <i class='bx bx-info-circle'></i>
                <span class="links_name">About</span>
            </a>
        </li>
        <li>
            <a href="profil.php" class="login list active">
                <i class='bx bx-user-circle'></i>
                <span class="links_name">Profil</span>
            </a>
        </li>
        <li>
            <a href="logout.php" class="login list">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Logout</span>
            </a>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_detail">
                <?php if($result['user_img'] == ""){ ?>
                    <a href="profil.php" class="list"><img src="../img/default.png" alt=""></a>
                <?php }else{ ?>
                    <img src="../img/<?= $result['user_img'] ?>" alt="" style="width: 45px;height: 45px;border-radius: 100%">
                <?php } ?>
                <span class="name"><?= $result['user_nama'] ?></span>
            </div>
        </div>
    </div>
</div>
<div class="home_content mt-4">
    <div class="row">
        <div class="col-lg-4 inputProfil ">
            <h2 class="fw-bold headerProfil text-center">Profil</h2><br />
            <div class="card bg-light bg-gradient">
                <div class="card-body">
                    <a href="profil.php" class="text-dark"><i class='bx bx-edit'></i>Kembali</a>
                    <?php 
                    if(isset($_GET['status'])){
                        if($_GET['status'] == "sukses"){
                        ?>
                        <div class="alert alert-success font-weight-bold text-center">Password telah diupdate.</div>
                        <?php
                        }elseif($_GET['status'] == "gagal"){ ?>
                        <div class="alert alert-danger font-weight-bold text-center">Password tidak sama!</div>
                    <?php
                        }
                    }
                    ?>
                    <form action="password_proses.php" method="post">
                        <div class="form-group mt-3">
                            <label class="fw-bold">Password Baru</label>
                            <input type="password" name="password"/>
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Konfirmasi Password Baru</label>
                            <input type="password" name="passwordConfirm"/>
                        </div>
                        <input type="submit" value="Ganti Password" class="btn btn-primary mt-4"/>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>