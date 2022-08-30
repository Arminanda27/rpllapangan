<?php
    session_start();

    if ($_SESSION['level'] = "") {

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>

<body>
    <a href="../logout.php">Logout</a>
    <br>
    <h3>Masuk Sebagai Admin</h3>
    <a href="data_lapangan.php">Isi Data Lapangan</a> ||
    <a href="data_pembayaran.php">Update Pembayaran</a>
</body>

</html>