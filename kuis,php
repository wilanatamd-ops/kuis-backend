<?php

function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 30 / 100) + ($uts * 30 / 100) + ($uas * 40 / 100);

    if ($nilaiAkhir >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Status: " . $status;
}

$tugas = 80;
$uts = 80;
$uas = 90;

hitungNilaiAkhir($tugas, $uts, $uas);

?>