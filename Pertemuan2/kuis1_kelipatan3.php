<?php
$angka = range(1, 20);

foreach ($angka as $i) {
    if ($i % 3 == 0) {
        echo "$i <br>";
    }
}
?>