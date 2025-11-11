<?php
$saldo_awal = (float)$_POST['saldo_awal'];
$bunga = (float)$_POST['bunga'];
$bulan = (int)$_POST['bulan'];
$bunga_total = $saldo_awal * $bunga * $bulan;
$saldo_akhir = $saldo_awal + $bunga_total;
$saldo_akhir_rupiah = number_format($saldo_akhir, 0, ',', '.');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 1: Hasil Saldo Akhir Bank</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir Bank</h1>
    <p>Saldo Awal: Rp. **<?php echo number_format($saldo_awal, 0, ',', '.'); ?>**</p>
    <p>Bunga Per Bulan: **<?php echo ($bunga * 100); ?>%**</p>
    <p>Lama Menabung: **<?php echo $bulan; ?>** bulan</p>
    <hr>
    <p>Besar Bunga Total: Rp. **<?php echo number_format($bunga_total, 0, ',', '.'); ?>**</p>
    <h2>**Saldo Akhir** setelah <?php echo $bulan; ?> bulan adalah: **Rp. <?php echo $saldo_akhir_rupiah; ?>,-**</h2>
</body>
</html>
