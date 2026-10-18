<?php
function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

echo "Luas lingkaran dengan jari-jari 7 adalah " . hitungLuasLingkaran(7);
?>