<?php
include '../koneksi.php';

$sql = "SELECT * FROM user";

$stmt = $db->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
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
            <a href="index.php" class="home list active">
                <i class='bx bx-home'></i>
                <span class="links_name">Home</span>
            </a>
        </li>
        <li>
            <a href="category.php" class="category list">
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
            <a href="../login.php" class="login list">
                <i class='bx bx-log-in' ></i>
                <span class="links_name">Login</span>
            </a>
        </li>
        <li>
            <a href="../daftar.php" class="login list">
                <i class='bx bx-user-plus'></i>
                <span class="links_name">Register</span>
            </a>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_detail">
                <?php if($result['user_img'] == ""){ ?>
                    <a href="profil.php" class="list"><img src="../img/default.png" alt="" style="width: 35px;height: 35px;border-radius: 100%"></a>
                <?php }else{ ?>
                    <img src="../img/<?= $result['user_img'] ?>" alt="" style="width: 35px;height: 35px;border-radius: 100%">
                <?php } ?>
                <span class="name"><?= $result['user_nama'] ?></span>
            </div>
        </div>
    </div>
</div>
<div class="home_content mt-4">
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
            <div class="card bg-light bg-gradient mt-3">
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
                        <small class="mt-1 pull-right text-muted font-italic">Kategori: <?php echo $threadShow['category_name']; ?></small>
                        
                        <hr />
                    </div>
                    
                    <h4 class="ms-4"><?= $threadShow['judul_thread'] ?></h4><hr />
                    <div class="mt-2">
                        <?php echo $threadShow['isi_thread']; ?>
                    </div>
                </div>
                <div class="card-footer">
                    <i class='bx bx-like like-btn' data-id="<?= $threadShow['id_thread']; ?>"></i>
                    <i class='bx bx-comment btn btn-primary komen'><span>Komentar</span></i>
                    <div class="row formComment">
                        <div class="col-lg-10">
                            <?php
                            $sqlKoment = "SELECT * FROM komentar WHERE komentar_thread = {$threadShow['id_thread']}";

                            $koment = $db->query($sqlKoment);
                            $koment->execute();
                                
                            
                            if($koment->rowCount() == 0){
                                echo 'Belum ada komen';
                            }else{
                                while($komentVal = $koment->fetch(PDO::FETCH_ASSOC)){ ?>
                                <div class="clearfix">
                                    <span class="pull-left">
                                    <?php 
                                    if($komentVal['komentar_img'] == ""){
                                        ?>
                                        <img src="../img/default.png" class="mr-1" style="width: 35px;height: 35px;border-radius: 100%">
                                        <?php
                                    }else{
                                        ?>
                                        <img src="../img/<?php echo $komentVal['komentar_img']; ?>" class="mr-1" style="width: 35px;height: 35px;border-radius: 100%">
                                        <?php
                                    }
                                    ?>
                                    <?php echo $komentVal['komentar_user_nama']; ?>
                                    </span>
                                    <br /><small class="mt-1 pull-right text-muted font-italic"><?php echo date('d-m-Y H:i:s',strtotime($komentVal['tanggal_komentar'])); ?></small>
                                </div>
                                
                                <div class="mt-2">
                                    <?php echo $komentVal['isi_komentar']; ?>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }
        } ?>
    </div>
</div>
<script>
    let btn = document.querySelector(".btn");
    let sidebar = document.querySelector(".sidebar");
    let search = document.querySelector(".bx-search");
    let plus = document.querySelector(".tambahThread");
    let form = document.querySelector(".formThread");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }

    plus.onclick = function(){
        form.classList.toggle("active");
    }

    search.onclick = function(){
        sidebar.classList.toggle("active");
    }
</script>

<?php include '../src/footer.php' ?>