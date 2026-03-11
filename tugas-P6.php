<!DOCTYPE html>
<html>
<head>
    <title>Volume Bangun Ruang</title>
    <style>
        table{
            border-collapse: collapse;
            width: 60%;
        }
        th, td{
            border:1px solid black;
            padding:8px;
            text-align:center;
        }
        th{
            background-color:skyblue;
            color:white;
        }
    </style>
</head>
<body>

<?php

class BangunRuang {

    public $sisi;
    public $jari;
    public $tinggi;

    function __construct($sisi=0,$jari=0,$tinggi=0){
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    function hitungVolume($jenis){

        switch($jenis){

            case "Bola":
                return (4/3) * pi() * pow($this->jari,3);
                break;

            case "Kerucut":
                return (1/3) * pi() * pow($this->jari,2) * $this->tinggi;
                break;

            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi,2) * $this->tinggi;
                break;

            case "Kubus":
                return pow($this->sisi,3);
                break;

            case "Tabung":
                return pi() * pow($this->jari,2) * $this->tinggi;
                break;
        }
    }
}

$data = [
    ["jenis"=>"Bola","sisi"=>0,"jari"=>7,"tinggi"=>0],
    ["jenis"=>"Kerucut","sisi"=>0,"jari"=>14,"tinggi"=>10],
    ["jenis"=>"Limas Segi Empat","sisi"=>8,"jari"=>0,"tinggi"=>24],
    ["jenis"=>"Kubus","sisi"=>30,"jari"=>0,"tinggi"=>0],
    ["jenis"=>"Tabung","sisi"=>0,"jari"=>7,"tinggi"=>10]
];

echo "<table>";
echo "<tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

foreach($data as $d){

    $obj = new BangunRuang($d['sisi'],$d['jari'],$d['tinggi']);
    $volume = $obj->hitungVolume($d['jenis']);

    echo "<tr>
            <td>".$d['jenis']."</td>
            <td>".$d['sisi']."</td>
            <td>".$d['jari']."</td>
            <td>".$d['tinggi']."</td>
            <td>".$volume."</td>
          </tr>";
}

echo "</table>";

?>

</body>
</html>