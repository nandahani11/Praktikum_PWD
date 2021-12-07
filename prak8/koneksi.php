<?php

// connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'akademik';

$con = mysqli_connect($host, $username, $password);

if (!$con) {
    echo "Tidak dapat terkoneksi dengan server";
    exit();
}

if (!mysqli_select_db($con, $database)) {
    echo "Tidak dapat menemukan database";
    exit();
}
