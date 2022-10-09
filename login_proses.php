<?php
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(substr($email, -10) == '@admin.com'){

}else{
    $sql = "SELECT * FROM user WHERE user_email = ?";

    $stmt = $db->prepare($sql);
    $loginData = [$email];
    $stmt->execute($loginData);

    $checking = $stmt->rowCount();

    if($checking == 1){
        /* session_start();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_status'] = 'login'; */
        $pw = $stmt->fetch(PDO::FETCH_ASSOC);
        $pwCheck = $pw['user_password'];

        if(password_verify($password, $pwCheck)){
            header("location:login.php?status=success");
        }else{
            header("location:login.php?status=loginfail");
        }
    }
}


?>