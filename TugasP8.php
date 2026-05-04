<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;

    // 5. Constructor dengan parameter
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
    }

    // 1. Method getGajiPokok sesuai ketentuan gambar
    public function getGajiPokok() {
        $daftarGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        return $daftarGaji[$this->golongan] ?? 0;
    }

    public function hitungTotalGaji() {
        // 2. Besaran lembur Rp 15.000
        return $this->getGajiPokok() + ($this->jamLembur * 15000);
    }

    // 7. Destructor untuk unset objek
    public function __destruct() {
        // Objek dihapus dari memori
    }
}

// 4. Array untuk menampung data (Simulasi Database)
$daftarKaryawan = [];

// Data awal agar tampilan sama dengan contoh gambar
$daftarKaryawan[] = new Karyawan("Winny", "IIb", 30);
$daftarKaryawan[] = new Karyawan("Stendy", "IIIc", 32);
$daftarKaryawan[] = new Karyawan("Alfred", "IVb", 30);

// 3. Perulangan untuk Menu Utama
while (true) {
    echo "\n====== MENU GAJI KARYAWAN ======\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";
    
    $pilihan = trim(fgets(STDIN));

    if ($pilihan == "1") {
        // TAMPILKAN DATA (Sesuai output image_993c99.jpg)
        echo "\n====== DATA GAJI KARYAWAN ======\n";
        echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";
        foreach ($daftarKaryawan as $index => $k) {
            $no = $index + 1;
            $total = number_format($k->hitungTotalGaji(), 0, ',', '.');
            echo "$no | {$k->nama} | {$k->golongan} | {$k->jamLembur} | Rp$total\n";
        }
    } 
    elseif ($pilihan == "2") {
        // TAMBAH DATA (Create)
        echo "Nama: "; $nama = trim(fgets(STDIN));
        echo "Golongan: "; $gol = trim(fgets(STDIN));
        echo "Jam Lembur: "; $lembur = trim(fgets(STDIN));
        
        $daftarKaryawan[] = new Karyawan($nama, $gol, (int)$lembur);
        echo "Data berhasil ditambahkan!\n";
    } 
    elseif ($pilihan == "3") {
        // UPDATE DATA
        echo "Masukkan No urut yang akan diupdate: ";
        $id = (int)trim(fgets(STDIN)) - 1;
        if (isset($daftarKaryawan[$id])) {
            echo "Nama Baru: "; $daftarKaryawan[$id]->nama = trim(fgets(STDIN));
            echo "Golongan Baru: "; $daftarKaryawan[$id]->golongan = trim(fgets(STDIN));
            echo "Jam Lembur Baru: "; $daftarKaryawan[$id]->jamLembur = (int)trim(fgets(STDIN));
        } else { echo "Data tidak ditemukan!\n"; }
    } 
    elseif ($pilihan == "4") {
        // HAPUS DATA (Delete + Destruct)
        echo "Masukkan No urut yang akan dihapus: ";
        $id = (int)trim(fgets(STDIN)) - 1;
        if (isset($daftarKaryawan[$id])) {
            unset($daftarKaryawan[$id]); // Memicu destructor
            $daftarKaryawan = array_values($daftarKaryawan); // Reset index array
            echo "Data berhasil dihapus.\n";
        } else { echo "Data tidak ditemukan!\n"; }
    } 
    elseif ($pilihan == "5") {
        echo "Keluar program...\n";
        break;
    } 
    else {
        echo "Pilihan tidak valid!\n";
    }
}