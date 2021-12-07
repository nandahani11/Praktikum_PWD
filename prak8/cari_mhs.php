<?php
include 'koneksi.php';
?>

<h3>Form Pencarian Dengan PHP MAHASISWA</h3>

<form action="" method="get">
    <label>Cari:</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>

<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil Pencarian :" . $cari . "</b>";
}
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $sql = "SELECT * from mahasiswa WHERE nama like'%" . $cari . "%'";
        $tampil = mysqli_query($con, $sql);
    } else {
        $sql = "SELECT * from mahasiswa";
        $tampil = mysqli_query($con, $sql);
    }
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $r['nama']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>