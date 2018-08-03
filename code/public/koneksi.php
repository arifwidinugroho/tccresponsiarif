

<?php
  // buat koneksi dengan database mysql
  $host = "192.168.100.52:7306";
  $user = "root";
  $pass = "root";
  $name = "siswa";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>