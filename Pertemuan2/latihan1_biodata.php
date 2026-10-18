<?php
// Biodata Mahasiswa

$nim = "1234567";
$nama = "Made Budi";
$kodeJurusan = "SI";
$angkatan = 2025;
$umur = 20;
$gender = "Laki-laki";
$hobi = ["Gaming", "Editing", "Mendengarkan Musik"];

// Menampilkan biodata
echo "<h2>Biodata Mahasiswa</h2>";
echo "NIM: $nim <br>";
echo "Nama: $nama <br>";
echo "Kode Jurusan: $kodeJurusan <br>";
echo "Angkatan: $angkatan <br>";
echo "Umur: $umur tahun <br>";
echo "Gender: $gender <br>";
echo "Hobi: " . implode(", ", $hobi);
?>