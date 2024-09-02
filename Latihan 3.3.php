<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}
$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek="Yamaha MIO";//set properti
$objekKendaraan1->harga="100000000";//set properti

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek="Toyota Avanza";//set properti
$objekKendaraan2->harga="100000000";//set properti

echo "merek:".$objekKendaraan2->merek; //merek:Toyota Avanza
echo "<br>";
echo "Nominal Harga: ".$objekKendaraan2->harga; //Nominal harga :100000000
echo "<br>";
echo "status harga kendaraan: ".$objekKendaraan2->statusHarga();//status harga kendaraan : Mahal
?>
