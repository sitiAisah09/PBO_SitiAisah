<?php
class perulangan{
    public function loop(){
        $array = array('Subang','Bandung','Jakarta','Surabaya','Yogyakarta');
        foreach ($array as $key) {
            echo $key."<br/>";
        }
    }
}
$Objekperulangan = new perulangan();
echo "Nama-Nama kota di pulau jawa : "."<br/>";
echo $Objekperulangan->loop()."<br/>";
?>