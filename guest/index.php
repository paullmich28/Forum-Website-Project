<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <title>Home | CodingAhay</title>
<?php include '../src/header.php'; ?>

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
            <input type="text" placeholder="Search . . .">
        </li>
        <li>
            <a href="#" class="home list">
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
            <a href="#" class="login list">
                <i class="bx bx-log-in"></i>
                <span class="links_name">Login</span>
            </a>
        </li>
        <li>
            <a href="#" class="register list">
                <i class='bx bx-user-plus'></i>
                <span class="links_name">Register</span>
            </a>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_detail">
                <img src="img/default.png" alt="">
                <span class="name">Guest</span>
            </div>
        </div>
    </div>
</div>
<div class="home_content">
    <div class="row mt-4">
        <div class="col-sm-4">
            <p>
                <small>CodingAhay adalah sebuah forum dimana para programmer dari seluruh Indonesia berkumpul.<br /><br />
                    Ayo kita semua belajar bersama di <span><a href="guest/index.php">CodingAhay!</a></span><br /><br />
                    Ingin menjadi bagian dari kami? <br /><span><a class="btn btn-primary mt-2" href="daftar.php" role="button">Sign Up</a></span><br /><br />
                    Sudah menjadi bagian dari kami?<br />
                    <span><a class="btn btn-success mt-2" href="login.php" role="button">Login</a></span>
                </small>
            </p>
        </div>
    </div>
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
