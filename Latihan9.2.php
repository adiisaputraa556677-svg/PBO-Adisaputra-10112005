<?php

// class manusia
class manusia {
    // property
    protected $nama = "Ardi";
    var $kelas = "SI 2";

    // method protected
    protected function nama() {
        return "Nama : " . $this->nama;
    }

    public function tampilkan_nama() {
        return $this->nama();
    }

    // ubah jadi public supaya bisa dipanggil dari luar
    public function tampilkan_kelas() {
        return "Kelas : " . $this->kelas;
    }
}

// instansiasi
$manusia = new manusia();

// output
echo $manusia->tampilkan_nama() . "<br />";
echo $manusia->tampilkan_kelas() . "<br />";

?>