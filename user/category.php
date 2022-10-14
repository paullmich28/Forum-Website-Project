<?php
include '../koneksi.php';

session_start();
$id = $_SESSION['user_id'];
if($_SESSION['user_status'] != 'online'){
    session_destroy();
    header('location:../login.php?status=logout');
}

$sql = "SELECT * FROM user WHERE id = ?";

$stmt = $db->prepare($sql);
$online = [$id];
$stmt->execute($online);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['action'])){
    $post_id = $_POST['post_id'];
    $action = $_POST['action'];

    switch($action){
        case 'like':
            $sql = "INSERT INTO suka(suka_user, suka_thread, status)
                    VALUES({$id}, {$post_id}, '{$action}')
                    ON DUPLICATE KEY UPDATE status='like'";
            break;

        case 'unlike':
            $sql = "DELETE FROM suka WHERE suka_user = {$id} AND suka_thread = {$post_id}";
            break;

        default:
            break;
    }

    $db->query($sql);
    exit(0);
}

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
            <a href="index.php" class="home list">
                <i class='bx bx-home'></i>
                <span class="links_name">Home</span>
            </a>
        </li>
        <li>
            <a href="category.php" class="category list active">
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
    <h4>Silahkan pilih kategori: </h4>
    <?php $i = 0; ?>
    <div class="row row-cols-1 row-cols-md-3 g-4 kartus">
        <?php
        $categoryQuery = "SELECT * FROM category";

        $categoryPrep = $db->prepare($categoryQuery);
        $categoryPrep->execute();

        while($categoryFetch = $categoryPrep->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="col w-25">
            <div class="card h-100">
                <img src="../icon/<?= $i ?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="<?= strtolower($categoryFetch) ?>.php" class="btn btn-primary">Gaskeun</a>
                </div>
            </div>
        </div>
        <?php $i++; } ?>
    </div>
</div>

<script type="text/javascript" src="likeDislikeSystem.js"></script>
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