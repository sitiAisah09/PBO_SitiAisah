<?php
// Model: Kendaraan.php
class Kendaraan {
    private $Merek, $JumlahRoda, $Harga, $Warna, $BhnBakar;

    // Constructor
    public function __construct($merek, $jumlahroda, $harga, $warna, $bahanbakar) {
        $this->Merek = $merek;
        $this->JumlahRoda = $jumlahroda;
        $this->Harga = $harga;
        $this->Warna = $warna;
        $this->BhnBakar = $bahanbakar;
    }

    // Setters
    public function SetMerek($merek) { $this->Merek = $merek; }
    public function SetJumlahRoda($jumlahroda) { $this->JumlahRoda = $jumlahroda; }
    public function SetHarga($harga) { $this->Harga = $harga; }
    public function SetWarna($warna) { $this->Warna = $warna; }
    public function SetBhnBakar($bahanbakar) { $this->BhnBakar = $bahanbakar; }

    // Getters
    public function GetMerek() { return $this->Merek; }
    public function GetJumlahRoda() { return $this->JumlahRoda; }
    public function GetHarga() { return $this->Harga; }
    public function GetWarna() { return $this->Warna; }
    public function GetBhnBakar() { return $this->BhnBakar; }
}
?>
