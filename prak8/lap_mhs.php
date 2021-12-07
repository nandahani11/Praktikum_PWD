<?php

require('fpdf/fpdf.php');
$pdf = new FPDF('l', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(190, 7, 'PRODI TIF', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', '12');
$pdf->Cell(190, 7, 'DAFTAR MHS MATKUL PWD', 0, 1, 'C');
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'NIM', 1, 0);
$pdf->Cell(50, 6, 'NAMA MHS', 1, 0);
$pdf->Cell(25, 6, 'J KEL', 1, 0);
$pdf->Cell(50, 6, 'ALAMAT', 1, 0);
$pdf->Cell(30, 6, 'TGL LAHIR', 1, 1);

$pdf->SetFont('Arial', '', 10);

include 'koneksi.php';
$mahasiswa = mysqli_query($con, "SELECT*FROM mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(20, 6, $row['nim'], 1, 0);
    $pdf->Cell(50, 6, $row['nama'], 1, 0);
    $pdf->Cell(25, 6, $row['jkel'], 1, 0);
    $pdf->Cell(50, 6, $row['alamat'], 1, 0);
    $pdf->Cell(30, 6, $row['tgl_lahir'], 1, 1);
}

$pdf->Output();
