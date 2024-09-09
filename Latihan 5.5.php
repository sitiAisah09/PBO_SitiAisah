<?php
class diskon {
    $kartu_member;
    $pembeli;
    $total_belanja;
    
    //menentukan pemilik memiliki kartu
    If ($kartu_member =="memiliki" && $pembeli = "Pembeli1") {
        $kartu_member = "Ya";
      } else {
        $kartu_member = "Tidak";
      }
      // Menentukan diskon harga berdasarkan total belanja
    switch (true) {
        case ($total_belanja > 100000):
          $diskon = 0.2; // 20%
          break;
        case ($total_belanja >= 500000):
          $diskon = 0.3; // 30%
          break;
        default:
          $diskon = 0;
          break;
      }
}
