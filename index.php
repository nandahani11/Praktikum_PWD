<?php


include_once("koneksi.php");
$result = mysqli_query($con, "SELECT* FROM mahasiswa");
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if (isset($_SESSION['username'])) { // Jika session username ada berarti dia sudah login
    header('location: ');
}

?>

<html>

<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body><br /><br />
    <h1><b>LOGIN</b></h1>

    <div style="color: red;margin-bottom: 15px;">
        <center>
            <?php
            // Cek apakah terdapat cookie dengan nama message
            if (isset($_COOKIE["message"])) { // Jika ada
                echo $_COOKIE["message"]; // Tampilkan pesannya
            }
            ?>
        </center>

    </div>
    <div class="kotak_login">

        <form method="post" action="login.php">
            <label>Username</label><br>
            <input type="text" class="form_login" name="username" placeholder=" Masukkan Username"><br><br>

            <label>Password</label><br>
            <input type="password" class="form_login" name="password" placeholder="Masukkan Password"><br><br>
            <label>Captcha<br>
                <img src='captcha.php' />
            </label>
            <td>:<input name='captcha_code' type='text' class="form_login"></td>

            <center><button type="submit" class="tombol_login">Login</button></center>
        </form>

    </div>


</body>

</html>