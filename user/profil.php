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
    <div class="row">
        <div class="col-lg-6 inputProfil">
            <h2 class="fw-bold headerProfil">Pengaturan Profil</h2><br />
            
            <form action="profil_proses.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                    <?php 
                    if(isset($_GET['status'])){
                            if($_GET['status'] == "sukses"){
                            ?>
                            <div class="alert alert-success font-weight-bold text-center">Profil telah diupdate.</div>
                            <?php
                        }
                    }
                    ?>

                    <?php if($result['user_img'] == ""){ ?>
                        <img src="../img/default.png" alt="" class="fotoProfilSet">
                    <?php }else{ ?>
                        <img src=<?= $result['user_img'] ?> alt="" class="fotoProfilSet">
                    <?php } ?>
                        <div class="form-group mt-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required" value="<?php echo $result['user_nama'] ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required="required" value="<?php echo $result['user_email'] ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control">
                                <option value=""> - Pilih - </option>
                                <option <?php if($result['user_gender'] == "Male"){echo "selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
                                <option <?php if($result['user_gender'] == "Female"){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $result['user_birthplace'] ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $result['user_birthdate'] ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label>Foto Profil <br> <small>Kosongkan jika tidak ingin mengubah foto profil</small></label>
                            <input type="file" name="foto">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary btn-sm pull-right" value="Update Profil">
                    </div>
                </div>
            </form>
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