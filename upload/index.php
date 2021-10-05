<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widthdevice-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        File yang diupload : <input type="file" name="fupload"><br>
        Deskripsi File : <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br>
        <input type=submit value=Upload>
    </form>

    <br>
    <a href="download.php">Klik untuk Download</a>
</body>

</html>