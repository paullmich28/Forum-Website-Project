<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodingAhay</title>
<?php include '../src/header.php'; ?>

<div class="sidebar bg-dark">
    <div class="logo_content">
        <div class="logo text-white">
            <div class="logo_name fw-bold">Coding<span class="half-color">Ahay</span></div>
        </div>
        <i class='bx bx-menu text-white btn'></i>
    </div>
    <ul class="navbar-nav">
        <li>
            <i class='bx bx-search mt-2'></i>
            <input type="text" placeholder="Search . . .">
        </li>
        <li>
            <a href="#" class="home list active">
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
                <img src="../img/default.png" alt="">
                <span class="name">Guest</span>
            </div>
        </div>
    </div>
</div>
<div class="home_content">
<div class="threads">
    <?php
    $sqlThread = "SELECT * FROM thread, user, category WHERE thread_user = id AND id_category = thread_category ORDER BY tanggal_thread";
    $jumlahThread = $db->prepare($sqlThread);
    $jumlahThread->execute();
    
    if($jumlahThread->rowCount() == 0){ ?>
        <h3>Belum ada thread nih, tambahin yuk!</h3>
    <?php
    }else{
    while($threadShow = $jumlahThread->fetch(PDO::FETCH_ASSOC)){?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-light bg-gradient">
                <div class="card-body">
                    <div class="clearfix">
                        <span class="pull-left">
                        <?php 
                        if($threadShow['user_img'] == ""){
                            ?>
                            <img src="../img/default.png" class="mr-1" style="width: 35px;height: 35px;border-radius: 100%">
                            <?php
                        }else{
                            ?>
                            <img src="../img/<?php echo $threadShow['user_img']; ?>" class="mr-1" style="width: 35px;height: 35px;border-radius: 100%">
                            <?php
                        }
                        ?>
                        <?php echo $threadShow['user_nama']; ?>
                        </span>
                        <br /><small class="mt-1 pull-right text-muted font-italic"><?php echo date('d-m-Y H:i:s',strtotime($threadShow['tanggal_thread'])); ?></small><br />
                        <small class="mt-1 pull-right text-muted font-italic">Kategori: <?php echo $threadShow['category_name']; ?></small><hr />
                    </div>
                    <h4 class="ms-4"><?= $threadShow['judul_thread'] ?></h4><hr />
                    <div class="mt-2">
                        <?php echo $threadShow['isi_thread']; ?>
                    </div>
                </div>
                <div class="card-footer">
                    <i class='bx bxs-like like-btn' ></i>
                    <form action=""></form>
                </div>
            </div>
        </div>
        <?php }
        } ?>
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
