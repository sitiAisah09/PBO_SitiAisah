<?php
class Guru
{
    var $nama_nama = array("de", "ce", "ve", "re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class Murid
{
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

class Kurikulum
{
    var $tahun_akademik;
    var $sks_matkul;

}
class Mobil
{
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 12000000;
    var $merk = 'A';

    public function statusHarga()
    {
        if ($this->harga > 5000000)
            $status = 'Mahal';
        else
            $status = 'Murah';
        return $status;
    }


}

$objekBMW = new Mobil;//ini adalah objek BMW dari class mobil
$objekTesla = new Mobil;//ini adalah objek Tesla dari class mobil
$objekAudi = new Mobil;//ini adalah objek Audi dari mobil

?>