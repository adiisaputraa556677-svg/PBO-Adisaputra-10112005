<?php

// Parent Class
class Employee {
    protected $nama;
    protected $gaji;
    protected $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji() {
        return $this->gaji;
    }

    public function tampil() {
        echo "Nama: {$this->nama}<br>";
        echo "Gaji: " . $this->hitungGaji() . "<br><br>";
    }
}

// Programmer
class Programmer extends Employee {

    public function hitungGaji() {
        if ($this->lamaKerja < 1) {
            $bonus = 0;
        } elseif ($this->lamaKerja <= 10) {
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
        } else {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }

        return $this->gaji + $bonus;
    }
}

// Direktur
class Direktur extends Employee {

    public function hitungGaji() {
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;

        return $this->gaji + $bonus + $tunjangan;
    }
}

// Pegawai Mingguan
class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stok;
    private $totalPenjualan;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $totalPenjualan) {
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->totalPenjualan = $totalPenjualan;
    }

    public function hitungGaji() {
        if ($this->totalPenjualan > 0.7 * $this->stok) {
            $bonus = 0.10 * $this->hargaBarang * $this->totalPenjualan;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->totalPenjualan;
        }

        return $this->gaji + $bonus;
    }
}

// =====================
// TESTING
// =====================

echo "<h3>Programmer</h3>";
$p = new Programmer("Putra", 5000000, 5);
$p->tampil();

echo "<h3>Direktur</h3>";
$d = new Direktur("Azkia", 10000000, 12);
$d->tampil();

echo "<h3>Pegawai Mingguan</h3>";
$pm = new PegawaiMingguan("Diput", 2000000, 2, 50000, 100, 80);
$pm->tampil();

?>