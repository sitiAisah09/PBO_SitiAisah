<?php
//akses properties
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($x)
    {
        $this->merek = $x;
    }
    function getMerek()
    {
        return $this->merek;
    }
    function setHarga($y)
    {
        $this->harga = $y;
    }
    function getHarga()
    {
        return $this->harga;
    }

}
$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
echo "<br>";