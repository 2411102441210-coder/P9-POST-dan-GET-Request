<?php
$nama = $_GET['nama'];
$usia = $_GET['usia'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 9.5 - Proses GET</title>
</head>
<body>
    <h1>Data Anda</h1>
    <p>Selamat datang, **<?php echo $nama; ?>**!</p>
    <p>Usia Anda adalah **<?php echo $usia; ?>** tahun.</p>
</body>
</html>