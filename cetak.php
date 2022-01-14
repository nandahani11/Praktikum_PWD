<!DOCTYPE html>
<html>

<head>
    <title>Hasil Rekomendasi Penerima Beasiswa SD</title>
</head>

<body>

    <center>

        <h2>Hasil Rekomendasi Penerima Beasiswa SD</h2>
    </center>

    <?php
    include 'config.php';
    ?>

    <table border="1" style="width: 70%" align="center">
        <tr>
            <th width="10%">Peringkat</th>
            <th>Nama Siswa</th>
            <th width="20%">Nilai</th>
        </tr>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT id,nama,id_alternatif,nilai FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>

                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nilai'] ?></td>

            </tr>
        <?php
        }
        ?>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>