<html>

<head>
    <title?>Tambah Data Mahasiswa</title>
</head>

<body>
    <<a href="index.php">Go to Home</a>
        <br /><br />

        <form action="tambah.php" method="POST" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nim</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Gender (L/P)</td>
                    <td><input type="text" name="jkel"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td><input type="text" name="tgl_lahir"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Tambah"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['Submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jkel = $_POST['jkel'];
            $alamat = $_POST['alamat'];
            $tgl_lahir = $_POST['tgl_lahir'];

            include_once("koneksi.php");

            $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgl_lahir) VALUES('$nim','$nama','$jkel','$alamat','$tgl_lahir')");

            echo "Data berhasil disimpan.<a href='index.php'>View Users</a>";
        }
        ?>

</body>

</html>