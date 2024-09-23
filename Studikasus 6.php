<?php
class perulangan {
    public function loop1(){
        for ($i = 1; $i < 6; $i++){
            //hitung jumlah bintang yang akan ditampilkan
            $jumlahBintang = $i * 2;
        
            for ($j = $i; $j <= 6; $j++){
                echo "&nbsp;&nbsp;";//it will print blank space
               
            }
            for ($j = 1; $j <= $jumlahBintang; $j++){
                echo "*";
            }
            echo '<br/>';
    }
  }
  public function loop2(){
    for ($i = 1; $i <= $t=6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = $t=6 - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
public function loop3(){
    for ($i = 1; $i <= $t=6; $i++) {
        for ($j = $t; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = $t=6 - 1; $i >= 1; $i--) {
        for ($j = $t= 6; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

}
$Objekperulangan = new perulangan ();
echo "jenis perulangan 1 "."<br/>";
echo $Objekperulangan->loop1()."<br/>";
echo "jenis perulangan 2 "."<br/>";
echo $Objekperulangan->loop2()."<br/>";
echo "jenis perulangan 3 "."<br/>";
echo $Objekperulangan->loop3()."<br/>";
?>