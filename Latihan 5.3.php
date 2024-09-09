<?php
class mobil {
    $status_harga = "Murah";
    $status_bbm = "Mendapat Subsidi";
    $harga_bekas = 30000000;
    $jumlah_pajak = 1250000;
    $hari_operasi = "Selasa, Kamis, Sabtu";
    $tahun_pembuatan = 2018;
    $bahan_bakar = "Premium";

    $mobil = array(
        "status_harga" => "Murah",
        "status_bbm" => "Mendapat Subsidi",
        "harga_bekas" => 30000000,
        "jumlah_pajak" => 1250000,
        "hari_operasi" => array("Selasa", "Kamis", "Sabtu"),
        "tahun_pembuatan" => 2018
    );

    //status harga
      if ($mobil["harga_bekas"] > 50000000) {
        $mobil["status_harga"] = "Mahal";
      } else {
        $mobil["status_harga"] = "Murah";
      } 

      //pengecekan subsidi
      if ($mobil["tahun_pembuatan"] < 2005) {
        $mobil["status_bbm"] = "Dapat Subsidi";
      }

      //diskon berdasarkan tahun pembuatan
      if ($mobil["tahun_pembuatan"] > 2005) {
        $mobil["harga_bekas"] = $mobil["harga_bekas"] * 0.2;
      } elseif ($mobil["tahun_pembuatan"] >= 2000) {
        $mobil["harga_bekas"] = $mobil["harga_bekas"] * 0.3;
      } elseif ($mobil["tahun_pembuatan"] < 2000) {
        $mobil["harga_bekas"] = $mobil["harga_bekas"] * 0.4;
      }

      //menentukan pajak
      if ($mobil["tahun_pembuatan"] <= 2017){
        $mobil["jumlah_pajak"] = $mobil["harga_bekas"] * 0.025;
      }
      
// Pengecekan hari operasi
$plat_nomor = 2128; 
if ($plat_nomor % 2 == 0) {
  $hari_operasi = "Selasa, Kamis, Sabtu";
} else {
  $hari_operasi = "Senin, Rabu, Jumat, Minggu";
}
 
// Menampilkan hasil
echo "Status Harga: " . $mobil["status_harga"] . "<br>";
echo "Status BBM: " . $mobil["status_bbm"] . "<br>";
echo "Harga Bekas: " . $mobil["harga_bekas"] . "<br>";
echo "Jumlah Pajak: " . $mobil["jumlah_pajak"] . "<br>";
echo "Hari Operasi: " . $hari_operasi . "<br>";
}

?>