<?php
include '../koneksi.php';

session_start();

date_default_timezone_set('Asia/Jakarta');

$user = $_SESSION['user_id'];
$date = date('Y-m-d H:i:s');
$judul = $_POST['judul_thread'];
$isi = $_POST['isi_thread'];
$category = $_POST['category'];

$sql = "INSERT INTO status(id_user, judul_thread, isi_thread, tanggal_thread, id_category)
VALUES(?, ?, ?, ?, ?)";

$stmt = $db->prepare($sql);
$data = [$user, $judul, $isi, $date, $category];
$stmt->execute($data);
?>