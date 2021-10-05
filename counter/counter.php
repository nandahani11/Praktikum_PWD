<?php

$filecounter = "counter.txt";
$fileload = fopen($filecounter, "r+");
$hit = fread($fileload, filesize($filecounter));

echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
echo ("<td width=250 valign=middle align=center>");
echo ("<font face=verdana size=2 color=#FF0000><b>");
echo ("Anda Pengunjung yang ke:");
echo ($hit);
echo ("</b></font>");
echo ("</td>");
echo ("</tr></table>");
fclose($fileload);

$fl = fopen($filecounter, "w+");
$hit = $hit + 1;
fwrite($fl, $hit, strlen($hit));
fclose($fl);
