<?php
include '../koneksi.php';

session_start();

$user = $_SESSION['user_id'];

$nama = $_POST['nama'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$birthplace = $_POST['tempat_lahir'];
$birthdate = $_POST['tanggal_lahir'];

$sql = "UPDATE user SET user_nama = ?, user_email = ?, user_gender = ?, user_birthplace = ?, user_birthdate = ? WHERE id = ?";

$stmt = $db->prepare($sql);
$updateData = [$nama, $email, $gender, $birthplace, $birthdate, $user];
$stmt->execute($updateData);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename_foto = $_FILES['foto']['name'];
$ext = pathinfo($filename_foto, PATHINFO_EXTENSION);

if($filename_foto!=""){
    if(in_array($ext,$allowed) ) {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$rand.'_'.$filename_foto);
        $x = $rand.'_'.$filename_foto;

        $sql = "UPDATE user SET user_img = ? WHERE id = ?"; 
        $hajar_foto = $db->prepare($sql); 
        $updateImg = [$x, $user];
        $hajar_foto->execute($updateImg); 
    }
}

header("location:profil.php?status=sukses");
?>