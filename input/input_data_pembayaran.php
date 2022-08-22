<?php
include "koneksi.php";

$id_pembayaran = $_POST['id_pembayaran'];
$id_pendaftar = $_POST['id_pendaftar'];
$jenis_lapangan = $_POST['jenis_lapangan'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
$nominal_pembayaran = $_POST['nominal_pembayaran'];
$status_pembayaran = $_POST['status_pembayaran'];

$insert = mysqli_query($koneksi, "INSERT INTO data_pembayaran SET id_pembayaran='$id_pembayaran', id_pendaftar='$id_pendaftar',
jenis_lapangan='$jenis_lapangan', jenis_pembayaran='$jenis_pembayaran', nominal_pembayaran='$nominal_pembayaran',
status_pembayaran='$status_pembayaran'");

if ($insert == true) {
    header('loaction: index.php');
} else {
    echo "<script>alert('Gagal input data pembayaran')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
</body>
</html>