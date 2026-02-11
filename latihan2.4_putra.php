<?php

class KalkulatorSuhu {

    public $celsius;
    public $fahrenheit;
    public $kelvin;

    public function __construct($celsius) {
        $this->celsius = $celsius;
        $this->hitungKonversi();
    }

    public function hitungKonversi() {
        $this->fahrenheit = ($this->celsius * 9/5) + 32;
        $this->kelvin = $this->celsius + 273.15;
    }

    public function tampilkan() {
        echo "<pre>";
        echo "================= KALKULATOR SUHU =================\n";
        echo "Satuan : Celsius (°C)\n";
        echo "----------------------------------------------------\n";
        echo "SUHU (C)   : " . $this->celsius . "\n";
        echo "FAHRENHEIT : " . $this->fahrenheit . "\n";
        echo "KELVIN     : " . $this->kelvin . "\n";
        echo "====================================================\n";
        echo "</pre>";
    }
}

$suhu = new KalkulatorSuhu(30);
$suhu->tampilkan();

?>