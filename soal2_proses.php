<?php
$jumlah_uang_awal = (int)$_POST['jumlah_uang'];
$sisa = $jumlah_uang_awal;
$denominasi = [100000, 50000, 20000, 5000, 100, 50];
$hasil_pecahan = [];

foreach ($denominasi as $nilai) {
    $jumlah_lembar = floor($sisa / $nilai);
    $hasil_pecahan[$nilai] = $jumlah_lembar;
    $sisa = $sisa % $nilai;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 2: Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Pecahan Uang</h1>
    <p>Jumlah Uang yang Diambil: Rp. **<?php echo number_format($jumlah_uang_awal, 0, ',', '.'); ?>**</p>
    <hr>
    <h2>Pecahan Uang yang Diperoleh:</h2>
    <ul>
        <?php foreach ($hasil_pecahan as $nilai => $jumlah) : ?>
            <li>**<?php echo $jumlah; ?>** lembar uang pecahan Rp. **<?php echo number_format($nilai, 0, ',', '.'); ?>**</li>
        <?php endforeach; ?>
    </ul>
    
    <?php if ($sisa > 0) : ?>
        <p>Tersisa uang yang tidak dapat dipecah: Rp. **<?php echo $sisa; ?>**</p>
    <?php endif; ?>
</body>
</html>
