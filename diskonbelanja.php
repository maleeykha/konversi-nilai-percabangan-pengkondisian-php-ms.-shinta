<?php

$belanja = 400000;

if ($belanja >= 500000) {
    $diskon = 20;
} elseif ($belanja >= 300000) {
    $diskon = 15;
} elseif ($belanja >= 100000) {
    $diskon = 10;
} else {
    $diskon = 0;
}

$potongan = $belanja * $diskon / 100;
$total = $belanja - $potongan;

echo "Total belanja: Rp" . $belanja . "<br>";
echo "Diskon: " . $diskon . "%<br>";
echo "Potongan: Rp" . $potongan . "<br>";
echo "Total bayar: Rp" . $total;

?>
