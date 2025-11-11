<!DOCTYPE html>
<html>
<head>
    <title>Soal 3: Form Pendaftaran Online (POST)</title>
</head>
<body>
    <h1>Form Pendaftaran Online Mahasiswa Baru</h1>
    <form method="get" action="soal4_proses.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl_lahir" required>
                        <?php for ($i = 1; $i <= 31; $i++) echo "<option value=\"$i\">$i</option>"; ?>
                    </select>
                    <select name="bln_lahir" required>
                        <?php for ($i = 1; $i <= 12; $i++) echo "<option value=\"$i\">$i</option>"; ?>
                    </select>
                    <select name="thn_lahir" required>
                        <?php for ($i = 2005; $i >= 1980; $i--) echo "<option value=\"$i\">$i</option>"; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat_rumah" rows="4" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" required></td>
            </tr>
            <tr>
                <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilai_uan" required></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Reset Form">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
