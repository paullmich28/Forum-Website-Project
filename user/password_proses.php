<?php
include '../koneksi.php';

session_start();
$id = $_SESSION['user_id'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

if($password == $passwordConfirm){
    $passwordNow = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE user SET user_password = ? WHERE id = ?";

    $stmt = $db->prepare($sql);
    $gantiPass = [$passwordNow, $id];
    $stmt->execute($gantiPass);

    header("location:password.php?status=sukses");
}else{
    header("location:password.php?status=gagal");
}



?>