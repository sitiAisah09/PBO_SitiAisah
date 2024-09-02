<?php
//cara pertama
//membuat array yang berisi nama buah-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur');
//menampilkan data array dengan nomor urut 2
echo $buah[2];
?>

<?php
//penamaan isi array
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "apel";
$buah['anggur'] = "harganya mahal";
//menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
?>

<?php
// penamaan isi array variabel buah
$buah = array('semangka' => "isinya merah", 'jeruk' => "rasanya manis", 'apel' => "warnanya merah", 'anggur' => "harganya mahal");
// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
?>