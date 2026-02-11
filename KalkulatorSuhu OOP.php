<?php
class KalkulatorSuhu {

    public $suhu; // dalam Celsius

    // Method Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Method Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }
}


// ================= OBJECT =================

$kalkulator = new KalkulatorSuhu();
$kalkulator->suhu = 30; // isi suhu dalam Celsius


// ================= OUTPUT =================

echo "<pre>";
echo "================= KALKULATOR SUHU =================\n";
echo "Satuan  : Celsius (°C)\n";
echo "---------------------------------------------------\n";
echo "SUHU (C)    : " . $kalkulator->suhu . "\n";
echo "FAHRENHEIT  : " . $kalkulator->cToF() . "\n";
echo "KELVIN      : " . $kalkulator->cToK() . "\n";
echo "===================================================\n";
echo "</pre>";
?>
