<?php

$myDir = "C:/xampp/htdocs/prak_PWD21/praktikum1/upload/";
$dir = opendir($myDir);
echo "Isi Folder (Klik link untuk download : <br>";
while ($tmp = readdir($dir)) {
    echo "<a href= '$tmp' target= '_blank'>$tmp</a><br>";
}
closedir($dir);
