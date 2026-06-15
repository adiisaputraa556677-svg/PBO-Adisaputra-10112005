<?php
class MahasiswaSIB {
    public $nama;
    public $nilai;

    public function __construct($nama, $nilai){
        $this->$nama = $nama;
        $this->$nilai = $nilai;
    }

    public function hitunggrade(){
        if ($this->nilai >= 85 ){
            return "A";
        }
        elseif ($this->nilai >= 70 ){
            return "B";
        }
        elseif ($this->nilai >= 60 ){
            return "C";
        }
        if ($this->nilai <= 60 ){
            return "D";
        }
    }
}

$daftarmahasiswa = [];
$daftarmahasiswa[] = new mahasiswa("putra", 90);
$daftarmahasiswa[] = new mahasiswa("alpin", 70);
$daftarmahasiswa[] = new mahasiswa("diput", 55);

while (true) {
    echo "\n====== MENU NILAI ======\n";
    echo "1. Tampilkan Data Nilai\n";
    echo "2. Tambah Data\n";
    echo "3. Update Nilai\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";
    
    $pilihan = trim(fgets(STDIN));

    if ($pilihan == "1") {
        echo "\n====== DATA NILAI MAHASISWA ======\n";
        echo "No | Nama | Nilai | Grade\n";
        foreach ($daftarmahasiswa as $index => $k) {
            $no = $index + 1;
            $total = number_format($k->hitungTotalGaji(), 0, ',', '.');
            echo "$no | {$k->nama} | {$k->golongan} | {$k->jamLembur} | Rp$total\n";
        }
    } 
    elseif ($pilihan == "2") {
        echo "Nama: "; $nama = trim(fgets(STDIN));
        echo "Nilai: "; $nilai = trim(fgets(STDIN));
        echo "Grade: "; $grade = trim(fgets(STDIN));
        
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







