<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodingAhay</title>
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>">
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
            <i class='bx bx-search mt-2 text-white'></i>
            <input type="text" placeholder="Search . . .">
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
        <li>
            <a href="#">
                <i class='bx bx-home'></i>
                <span class="links_name">Home</span>
            </a>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
        <li>
            <a href="#">
                <i class='bx bx-category'></i>
                <span class="links_name">Categories</span>
            </a>
            <!-- <span class="tooltip">Categories</span> -->
        </li>
        <li>
            <a href="#">
                <i class='bx bx-info-circle'></i>
                <span class="links_name">About</span>
            </a>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_detail">
                <img src="img/default.png" alt="">
                <span class="name">Guest</span>
            </div>
            <i class="bx bx-log-in" id="login"></i>
            <i class='bx bx-user-plus' id="register"></i>
        </div>
    </div>
</div>

<?php include '../src/footer.php' ?>
