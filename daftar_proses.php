<?php
include 'koneksi.php';

$nama = $_POST['user_nama'];
$email = $_POST['user_email'];
$password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
$gender = $_POST['user_gender'];
$birthplace = $_POST['user_birthplace'];
$birthdate = $_POST['user_birthdate'];

$sql_checking = "SELECT * FROM user WHERE user_email = ?";

$checking = $db->prepare($sql_checking);
$email_checking = [$email];
$checking->execute($email_checking);

$counter = $checking->rowCount();

if($counter == 1){
    header("location:daftar.php?status=terdaftar");
}else{
    $sql = "INSERT INTO user(user_nama, user_email, user_password, user_gender, user_birthplace, user_birthdate, user_img)
            VALUES(?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $db->prepare($sql);
    $data = [$nama, $email, $password, $gender, $birthplace, $birthdate, ""];
    $stmt->execute($data);

    header("location:login.php?status=registerdone");
}
?>