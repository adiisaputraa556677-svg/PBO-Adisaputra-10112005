<?php

$member = $_POST['member'];
$belanja = $_POST['belanja'];
$diskon = 0;

if ($member == "ya") {

    if ($belanja > 100000) {
        $diskon = 15000;
    } 
    elseif ($belanja > 500000) {
        $diskon = 50000;
    }

} 
else {

    if ($belanja > 100000) {
        $diskon = 5000;
    }

}

$total = $belanja - $diskon;

echo "<h2>Struk Belanja</h2>";
echo "Apakah ada kartu member : $member <br>";
echo "Total belanjaan : Rp $belanja <br>";
echo "Diskon : Rp $diskon <br>";
echo "Total Bayar : Rp $total";

?>