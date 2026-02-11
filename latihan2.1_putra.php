<?php

class belanja {
    public $namapembeli="putra";
    public $namabarang="sampo";
    public $hargabarang="9000";
    public $jumlahbarang="2";
    public $totalbayar;
    public $diskon=0.1;
    public static $pajak="0.02";
    public function totalharga(){
        $subtotal = $this->hargabarang * $this->jumlahbarang;

        return $subtotal;
    }

}

$belanja1 = new belanja();

echo "subtotal: Rp " . $belanja1->totalharga() . "\n";
?>