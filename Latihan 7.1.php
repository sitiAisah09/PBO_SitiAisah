<?php
class manusia {
    //class induk
    // property class manusia
    public $nama_saya;
    //method pada class manusia
    function berinama($saya){
        $this->nama_saya = $saya;
    }
}
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
    //property class teman
    public $nama_teman;
    //method pada class
    function berinamateman($teman){
        $this->nama_teman = $teman;
    }
}
// instansiasi class nteman
$Objectteman = new teman;
//method beri nama adalah method pada class m,anusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$Objectteman->berinama("Dika");
$Objectteman->berinamateman("Andra");

//menampilkan isi property
echo "Nama saya :".$Objectteman->nama_saya."<br/>";
echo "Nama teman saya :".$Objectteman->nama_teman;
?>