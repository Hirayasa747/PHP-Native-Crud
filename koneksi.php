<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "db_siswa";
  
  $conn = mysqli_connect("localhost", "root", "", "db_siswa");
  if($conn){
//   echo "Koneksi Berhasil";
  }

  mysqli_select_db($conn, $db) or die("Database Tidak Ditemukan");
?>