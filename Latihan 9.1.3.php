<?php
/**
 * class class ini berada pada file terpisah
 * class real world tidak akan sesimple ini!
 */

 interface PaymentInterface{
    public function getstatus();
    public function sendIssue();
 }
 class creditcard implements paymentInterface{
    public function getstatus(){
        //mengecek status koneksi ke server.
        echo "checking credit card server..\n";
    }
    public function sendIssue(){
        //mengirim request untuk pembayaran
        echo "Issue sent! \n";
    }
 }
 class Dana implements PaymentInterface {
    public function getstatus(){
        //mengecek status koneksi ke server
        echo "checking Dana server..\n";
    }
 }
 class GoPay implements PaymentInterface{
    public function getStatus(){
        //mengecek status koneksi ke server
        echo "checking GoPay server..\n";
    }
    public function sendIssue(){
        //mengecek status koneksi ke server
        echo "Issue sent! \n";
    }
 }
 /**
  * pabrik yang akan membuat berbagai class
  */
  class paymentfactory{
    //di konstruktor kita bikin konkrit class nya
    public function getInstance($class){
        return new $class;
    }
  }
  //mengambil data pilihan pembayaran dari user
  //dalam kasus yang lebih real bisa jadi datang dari POST/GET request
  //Dalam suatu file
  $option = 'GoPay';
  //instansiasi pabrik beserta parameter class yang mau diproduksi
  $paymentfactory = new paymentfactory;
  $payment = $paymentfactory->getInstance($option);
  $payment->getstatus();
  echo "<br />";
  $payment->sendIssue();
  ?>