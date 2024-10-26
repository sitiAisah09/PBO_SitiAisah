<?php
/**
 * Bayangkan class class ini berada pada file terpisah.
 * class real world tidak akan sesimple ini!
 */
class creditcard{
    public function getstatus(){
        //mengecek status koneksi ke server.
        echo "checking credit card server..\n";
    }
    public function sendissue(){
        //mengirim request untuk pembayaran.
        echo "Issue sent! \n";
    }
}
class Dana {
    public function getstatus(){
        //mengecek status koneksi ke server.
        echo "Issue sent! \n";
    }
}
class GoPay{
    public function getstatus(){
        //mengecek status koneksi ke server
        echo "checking GoPay server..\n";
    }
    public function sendIssue(){
        //mengirim request untuk pembayaran
        echo "issue sent! \n";
    }
}
//mengambil data pilihan pembayaran dari user.
//Dalam kasus yang lebih real bisa jadi datang dari POST/GET request
//Dalam suatu file.
$option = 'Dana';
$payment = Null;

if ($option == 'GoPay') {
    $payment = new GoPay;
    echo "<br />";
    $payment->getstatus();
    echo "<br />";
    $payment->sendIssue();
    echo "<br />";
} else if ($option == 'Dana'){
    $payment = new Dana;
    echo "<br />";
    $payment->getstatus();
    echo "<br />";
    $payment->sendIssue();
    echo "<br />";
}else {
    $payment = new creditcard();
    echo "<br />";
    $payment->getstatus();
    echo "<br />";
    $payment->sendIssue();
    echo "<br />";
}
?>
    

