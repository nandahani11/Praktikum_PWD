<?php
session_start(); // Start session nya

include('config.php'); // Load file koneksi.php
//include('settings.php');

$username = mysqli_real_escape_string($koneksi, $_POST['username']); // Ambil value username yang dikirim dari form
$password = mysqli_real_escape_string($koneksi, $_POST['password']); // Ambil value password yang dikirim dari form
$password = md5($password); // Kita enkripsi (encrypt) password tadi dengan md5

if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    // Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "'");
    $data = mysqli_fetch_array($sql); // Ambil datanya dari hasil query tadi

    $login = mysqli_query($koneksi, $sql);

    $ketemu = mysqli_num_rows($login);
    //$r = mysqli_fetch_array($login);

    // Cek apakah variabel $data ada datanya atau tidak
    if (!empty($data)) { // Jika tidak sama dengan empty (kosong)
        $_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
        $_SESSION['nama'] = $data['nama']; // Set session untuk nama (simpan nama di session)


        setcookie("message", "delete", time() - 1); // Kita delete cookie message

        header("location: utama.php"); // Kita redirect ke halaman main.php
    } else { // Jika $data nya kosong
        // Buat sebuah cookie untuk menampung data pesan kesalahan
        setcookie("message", "Maaf, Username atau Password salah", time() + 3600);

        header("location: index.php"); // Redirect kembali ke halaman index.php
    }
} else {
    // Buat sebuah cookie untuk menampung data pesan kesalahan
    setcookie("message", "CAPTCHA salah, Silahkan Ulangi", time() + 3600);

    header("location: index.php"); // Redirect kembali ke halaman index.php

    //echo "<center>Login Gagal! Captcha tidak sesuai<br>";
    //echo "<a href=form_login.php>ULANGI LAGI</b></a></center>";
}
