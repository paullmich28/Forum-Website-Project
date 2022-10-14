<?php
include '../koneksi.php';

session_start();

date_default_timezone_set('Asia/Jakarta');

$user = $_SESSION['user_id'];
$date = date('Y-m-d H:i:s');
$isi = $_POST['isi_komen'];
$thread = $_POST['idthread'];

$sqlBase = "SELECT * FROM user WHERE id = ?";
$dataGet = $db->prepare($sqlBase);
$dataUser = [$user];
$dataGet->execute($dataUser);

$datasUser = $dataGet->fetch(PDO::FETCH_ASSOC);

$sqlKomen = "INSERT INTO komentar(komentar_user_nama, komentar_thread, isi_komentar, tanggal_komentar, komentar_img)
VALUES(?, ?, ?, ?, ?)";

$stmt = $db->prepare($sqlKomen);
$data = [$datasUser['user_nama'], $thread, $isi, $date, $datasUser['user_img']];
$stmt->execute($data);

header("Location:index.php");
?>