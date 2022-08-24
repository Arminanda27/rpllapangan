<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
</head>
<body>
    <a href="../welcome.php">Back to Home</a>
    <h1>Silahkan isi bidang di bawah ini</h1>
    <form action="../input/input_data_pembayaran.php" method="post">

        <label for="">Id Pembayaran</label><br>
        <input type="text" name="id_pembayaran" id=""value="<?= rand(0000, 9999)?>" readonly>
        <br></br>
        <label for="">Id Pendaftar</label><br>
        <input type="text" name="id_pendaftar" id="" id=""value="<?= rand(0000, 9999)?>" readonly>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="A">Lapangan A (Matras)</option>
            <option value="B">Lapangan B (Sintetis)</option>
            <option value="C">Lapangan C (Viny)</option>
        </select>
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="jenis_pembayaran" id="">
            <option value="cash">Cash</option>
            <option value="transfer">Transfer</option>
        </select>
        <br><br>
        <label for="">Nominal Pembayaran</label><br>
        <input type="text" name="nominal_pembayaran" id="">
        <br><br>
        <label for="">Status Pembayaran</label><br>
        <select name="status_pembayaran" id="">
            <option>...</option>
            <option value="Lunas">Lunas</option>
        <select>
        <br><br>

        <button type="submit">Kirim Data</button>
    </form>

</body>
</html>