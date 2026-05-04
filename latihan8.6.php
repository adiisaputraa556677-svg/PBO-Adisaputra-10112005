<?php

class KonversiSuhu {
    public $celsius;

    // 5. Tambahkan constructor (mengambil nilai awal saat objek dibuat)
    public function __construct($suhu) {
        $this->celsius = $suhu;
    }

    // Fungsi untuk menghitung konversi berdasarkan jenisnya
    public function hitung($ke) {
        // 4. Tambahkan percabangan
        if ($ke == "Kelvin") {
            return $this->celsius + 273.15;
        } elseif ($ke == "Fahrenheit") {
            return ($this->celsius * 9/5) + 32;
        } elseif ($ke == "Reamur") {
            return $this->celsius * 4/5;
        }
        return 0;
    }
}

// 1. Inputkan get (mengambil angka dari URL, misal: ?celsius=36)
// Jika tidak ada input di URL, defaultnya adalah 36 seperti di gambar
$inputSuhu = isset($_GET['celsius']) ? $_GET['celsius'] : 36;

// Membuat objek baru (Constructor otomatis berjalan)
$konversi = new KonversiSuhu($inputSuhu);

// 2. Tambahkan deklarasi array (daftar jenis suhu yang mau dikonversi)
$daftarSuhu = ["Kelvin", "Fahrenheit", "Reamur"];

echo "<h2>Konversi Suhu dari Celcius</h2>";
echo "suhu dalam celcius = " . $konversi->celsius . " derajat <br><br>";

// 3. Tambahkan perulangan untuk menampilkan hasil konversi dari array
foreach ($daftarSuhu as $jenis) {
    $hasil = $konversi->hitung($jenis);
    
    // 6. Menampilkan Suhu Celsius, Reamur, Fahrenheit, dan Kelvin
    echo "suhu dalam " . strtolower($jenis) . " = " . $hasil . " derajat <br>";
}

echo "<br><i>Sekian konversi suhu yang bisa dilakukan</i>";

?>