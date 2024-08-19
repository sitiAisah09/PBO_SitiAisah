<?php
class KonversiSuhu {

    //untuk mengkonversi dari celcius ke Kelvin
    public function celciusToKelvin($celcius)
    {
        return $celcius + 273;
        echo "konversi $celcius Celcius Ke kelvin:" . $kalkulatorSuhu->celciusToKelvin($celcius). "K\n";
    }
    //untuk mengkonversi dari celcius ke Fahrenhait
    public function celciusToFahrenhait($celcius)
    {
        return ($celcius * 9/5) + 32;
        echo "konversi $celcius Celcius Ke Fahrenhait:" . $kalkulatorSuhu->celciusToFahrenhait($celcius). "F\n";
    }
    //untuk mengkonversi dari celcius ke Reamur
    public function celciusToReamur($celcius)
    {
        return ($celcius * 4/5);
        echo "konversi $celcius Celcius Ke Reamur:" . $kalkulatorSuhu->celciusToReamur($celcius). "R\n";
    
    }
    
    //membuat objek dari class konversisuhu
    $kalkulatorsuhu = new KonversiSuhu();
    
    //Input suhu yang akan dikonversi
    $Kelvin = 298;
    $Fahrenhait = 78;
    $Reamur = 54;

    echo "konversi $celcius Celcius Ke kelvin:" . $kalkulatorSuhu->celciusToKelvin($celcius). "K\n";
    echo "konversi $celcius Celcius Ke Fahrenhait:" . $kalkulatorSuhu->celciusToFahrenhait($celcius). "F\n";
    echo "konversi $celcius Celcius Ke Reamur:" . $kalkulatorSuhu->celciusToReamur($celcius). "R\n";
    
    
}
?>