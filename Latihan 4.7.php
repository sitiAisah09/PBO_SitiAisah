<?php
class kendaraan
{
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

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

$Data1 = array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2004');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Peremium', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');

for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 5; $i++) {
        ${"kendaraan$i"} = new kendaraan();
        ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
        ${"kendaraan$i"}->setjmlroda(${"Data$i"}[1]);
        ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
        ${"kendaraan$i"}->setwarna(${"Data$i"}[3]);
        ${"kendaraan$i"}->setbhnbakar(${"Data$i"}[4]);
        ${"kendaraan$i"}->settahun(${"Data$i"}[5]);
    }
}
for ($i = i; $i <= 3; $i++) {
    echo "\$kendaraan$i<br>"
        . ${"kendaraan$i"}->getMerek() . "<br>"
        . ${"kendaraan$i"}->getjmlroda() . "<br>"
        . ${"kendaraan$i"}->getHarga() . "<br>"
        . ${"kendaraan$i"}->getwarna() . "<br>"
        . ${"kendaraan$i"}->getbhnbakar() . "<br>"
        . ${"kendaraan$i"}->gettahun() . "<br>"
        . ${"kendaraan$i"}->statusharga() . "<br>"
        . ${"kendaraan$i"}->dapatsubsidi() . "<br>"
        . ${"kendaraan$i"}->hargasecondkendaraan() . "<br><br>";
}


