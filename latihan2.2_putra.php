<?php

class BelanjaWarung {

    public $kasir;
    public $pembeli;
    public $namaBarang;
    public $harga;
    public $jumlah;
    public $diskon;
    public $uangBayar;

    public static $pajak = 0.02;

    public function tampilStruk() {

        $subtotal = $this->harga * $this->jumlah;
        $nilaiDiskon = $subtotal * $this->diskon;
        $setelahDiskon = $subtotal - $nilaiDiskon;
        $pajak = $setelahDiskon * self::$pajak;
        $totalAkhir = $setelahDiskon + $pajak;
        $kembalian = $this->uangBayar - $totalAkhir;

        echo "================ WARUNG A =================<br>";
        echo "Kasir     : " . $this->kasir . "<br>";
        echo "Pembeli   : " . $this->pembeli . "<br>";
        echo "-------------------------------------------<br>";
        echo $this->namaBarang . " x " . $this->jumlah . " @ " . number_format($this->harga,0,",",".") . "<br>";
        echo "-------------------------------------------<br>";
        echo "SUBTOTAL  : Rp " . number_format($subtotal,0,",",".") . "<br>";
        echo "DISKON    : Rp " . number_format($nilaiDiskon,0,",",".") . "<br>";
        echo "PAJAK 2%  : Rp " . number_format($pajak,0,",",".") . "<br>";
        echo "-------------------------------------------<br>";
        echo "TOTAL BAYAR : Rp " . number_format($totalAkhir,0,",",".") . "<br>";
        echo "UANG BAYAR  : Rp " . number_format($this->uangBayar,0,",",".") . "<br>";
        echo "KEMBALIAN   : Rp " . number_format($kembalian,0,",",".") . "<br>";
        echo "===========================================<br>";
    }
}

$warung = new BelanjaWarung();

$warung->kasir = "SISTEM";
$warung->pembeli = "Putra";
$warung->namaBarang = "Sunscreen";
$warung->harga = 75000;   // harga per pcs
$warung->jumlah = 3;      // 3 pcs
$warung->diskon = 0.1;    // 10%
$warung->uangBayar = 500000; // 500 ribu

$warung->tampilStruk();

?>
