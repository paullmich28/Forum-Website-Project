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
            <div class="logo_name">CodingAhay</div>
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
            <a href="index.php" class="home list active">
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
            <a href="profil.php" class="login list">
                <i class='bx bx-cog'></i>
                <span class="links_name">Pengaturan Profil</span>
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
                    <img src=<?= $result['user_img'] ?> alt="">
                <?php } ?>
                <span class="name"><?= $result['user_nama'] ?></span>
            </div>
        </div>
    </div>
</div>
<div class="home_content mt-4">
    <h3>Halo, <?= $result['user_nama'] ?></h3>
</div>
<script>
    let btn = document.querySelector(".btn");
    let sidebar = document.querySelector(".sidebar");
    let search = document.querySelector(".bx-search");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }

    search.onclick = function(){
        sidebar.classList.toggle("active");
    }

</script>
<?php include '../src/footer.php' ?>