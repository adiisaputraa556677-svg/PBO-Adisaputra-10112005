<?php

class belanja {
    public $namapembeli;
    public $namabarang;
    public $hargabarang;
    public $jumlahbarang;
    public $totalbayar;
    public $diskon;
    public $pajak="0.02";

   public function __construct($namapembeli, $namabarang, $hargabarang, $jumlahbarang, $diskon)
   {
    $this->namapembeli = $namapembeli;
    $this->namabarang = $namabarang;
    $this->hargabarang = $hargabarang;
    $this->jumlahbarang = $jumlahbarang;
    $this->diskon = $diskon;
   } 

   public function totalharga() {
    $subtotal = $this->hargabarang * $this->jumlahbarang;

    return $subtotal;
   }
}

$belanja1 = new belanja("putra", "sampo", "9000", "2", "0.1");
echo "<pre>";
echo "nama pembeli: " . $belanja1->namapembeli . "\n";
echo "nama barang: " . $belanja1->namabarang . "\n";
echo "harga barang: " . $belanja1->hargabarang . "\n";
echo "jumlah barang: " . $belanja1->jumlahbarang . "\n";
echo "diskon: " . ($belanja1->diskon * 100) . "%\n";
echo "subtotal: Rp " . $belanja1->totalharga() . "\n";
echo "</pre>";