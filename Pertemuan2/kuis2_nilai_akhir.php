<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    return $nilaiAkhir;
}

$tugas = 80;
$uts = 80;
$uas = 90;

$nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);

echo "Nilai Akhir: " . $nilaiAkhir . "<br>";

if ($nilaiAkhir >= 70) {
    echo "Status: Lulus";
} else {
    echo "Status: Tidak Lulus";
}
?>