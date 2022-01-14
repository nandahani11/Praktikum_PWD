<<<<<<< HEAD
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
=======
<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];
		if(isset($_POST['atribut'])){
			tambahDataKt($jenis,$nama, $_POST['atribut']);
		}
		else {
			tambahData($jenis,$nama);
		}
		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>

<section class="content">
	<div class="ui fluid card">
		<div class="content">
			<h2 class="header">Tambah <?php echo $jenis?></h2>
		</div>
		<div class="content">
			<form class="ui form" method="post" action="tambah.php">
			<div class="two field">
				<div class="inline field">
					<label>Nama <?php echo $jenis ?></label>
					<input type="text" name="nama" placeholder="<?php echo $jenis?> baru">
					<input type="hidden" name="jenis" value="<?php echo $jenis?>">
				</div>
				<div class="inline field">
					<?php if($jenis == 'kriteria')
					{
						echo "<label>Atribut ".$jenis."</label> 
						<select name='atribut' class='ui selection dropdown'>
						    <i class='dropdown icon'></i>
						    <option value='1'>Cost</option>
						    <option value='2'>Benefit</option>
						</select>";
					}
					?>
				</div>
			</div>
		</div>
		<div class="extra content">
				<input class="ui green button" type="submit" name="tambah" value="SIMPAN">
			</form>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>
>>>>>>> 9b5b0b6 (Responsi Praktikum)
