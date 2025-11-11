<?php
$nama = $_POST['nama_lengkap'];
$tempat = $_POST['tempat_lahir'];
$tgl = $_POST['tgl_lahir'];
$bln = $_POST['bln_lahir'];
$thn = $_POST['thn_lahir'];
$alamat = $_POST['alamat_rumah'];
$jk = $_POST['jenis_kelamin'];
$asal = $_POST['asal_sekolah'];
$uan = $_POST['nilai_uan'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 3: Hasil Pendaftaran (POST)</title>
</head>
<body>
    <h1>Hasil Pendaftaran Online Mahasiswa Baru</h1>
    
    <h2>Terimakasih **<?php echo $nama; ?>** sudah mengisi form pendaftaran.</h2>
    <hr>
    
    <table>
        <tr><td>Nama Lengkap</td><td>:</td><td>**<?php echo $nama; ?>**</td></tr>
        <tr><td>Tempat Lahir</td><td>:</td><td>**<?php echo $tempat; ?>**</td></tr>
        <tr><td>Tanggal Lahir</td><td>:</td><td>**<?php echo "$tgl - $bln - $thn"; ?>**</td></tr>
        <tr><td>Alamat Rumah</td><td>:</td><td>**<?php echo nl2br($alamat); ?>**</td></tr>
        <tr><td>Jenis Kelamin</td><td>:</td><td>**<?php echo $jk; ?>**</td></tr>
        <tr><td>Asal Sekolah</td><td>:</td><td>**<?php echo $asal; ?>**</td></tr>
        <tr><td>Nilai UAN</td><td>:</td><td>**<?php echo $uan; ?>**</td></tr>
    </table>
</body>
</html>