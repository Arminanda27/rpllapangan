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
    <a href="logout.php">Logout</a>
    <br>
    <h1>Selamat Datang <?php echo strtoupper($_SESSION['username']) ?> di RPLLAPANGAN</h1>
    <p>Silahkan klik tombol daftar dibawah ini</p>
    <a href="form/pendaftar.php">Daftar</a>
</body>

</html>