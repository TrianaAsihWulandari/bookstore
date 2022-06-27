<?php
 //koneksi ke database surat
 $server = "sql110.epizy.com";
  $user = "epiz_32044138";
 $pass = "yDoRQsKODHgko";
 $dbname = "epiz_32044138_bookstore";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);
 if(mysqli_connect_errno()){
  echo "Koneksi database gagal".mysqli_connect_error();
 }
