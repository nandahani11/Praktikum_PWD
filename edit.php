<?php

include_once("koneksi.php");
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $result = mysqli_query($con, "UPDATE mahasiswa SET nama='$nama',jkel='$jkel',alamat='$alamat',tgl_lahir='$tgl_lahir' WHERE nima='$nim'");
    header("Location:index.php");
}
?>

<?php
$nim = $_GET['nim'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");

while ($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgl_lahir = $user_data['tgl_lahir'];
}
?>

<html>

<head>
    <title>Edit data mahasiswa</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_mahasiswa" method="POST" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="jkel" value=<?php echo $jkel; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgl_lahir" value=<?php echo $tgl_lahir; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim']; ?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>

</html>