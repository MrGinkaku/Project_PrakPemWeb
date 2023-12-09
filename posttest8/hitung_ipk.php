<?php

$jml_matkul = count($_POST['nilai_matkul']);
$total_nilai = 0;

for ($i = 0; $i < $jml_matkul; $i++) {
    $nilai_matkul = $_POST['nilai_matkul'][$i];
    $total_nilai += $nilai_matkul;
}

$ipk = $total_nilai / $jml_matkul;

$status = ($ipk >= 70) ? "Lulus" : "Tidak Lulus";

echo "IPK Anda adalah: " . $ipk;
echo "<br>";
echo "Status Anda adalah: " . $status;