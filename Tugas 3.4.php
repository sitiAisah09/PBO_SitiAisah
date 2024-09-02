<?php
class angsuran
{
    var $besarPinjman= 1000000;
    var $bunga = 0.10;
    var $total_pinjaman; 
    var $lamaangsuran = 5;
    var $besar_angsuran = 220000;
   
//menghitung total pinjaman
function total_pinjaman($besarPinjaman, $bunga) {
    return ($besarpinjaman * $bunga);
}
//mennghitung angsuran bulanan
function angsuranbulanan($besarPinjaman, $bunga, $bulan ) {
    return($total_pinjaman* $bunga)/$lamaangsuran
}
$Objekangsuran = new angsuran();//pembuatan objek dari kelas
echo "<br>";
echo "status total_pinjaman: ".$objekangsuran->total_pinjaman();
echo "<br>";
echo "status angsuranbulanan: ".$objekangsuran->angsuranbulanan();
?>

