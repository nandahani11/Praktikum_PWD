<?php
include 'koneksi.php';
?>

<?php
$tambah = mysqli_query($con, "ALTER TABLE akademik ADD dosen VARCHAR(50) NOT NULL ");
?>
<html>

<body>
    <h1> Input Data Dosen </h1>
    <form method="post" action="">
        <tr>
            <td>Nama</td>
            <td>:<input name='nama' type='text'></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:<input name='nip' type='text'></td>
        </tr>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>