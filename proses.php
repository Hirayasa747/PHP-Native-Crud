<?php

include "koneksi.php";


    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            
        
        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama']; 
        $umur = $_POST['umur'];
        $jenis_kelamin = $_POST['Jenis_Kelamin']; 
        $foto = 'img5.jpg';
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];


        $query = "INSERT INTO tb_siswa VALUES (null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat', '$umur','$email')";
        $sql = mysqli_query ($conn, $query);
        
        if ($sql){
            header("location: home.php");    
        
        //echo "data berhasil ditambahkan <a href='home.php'>[home]</a>";

        } else {
            echo $query;

        }


        //  echo "Tambah data" . " <a href='home.php'>[Home]</a> ";
        }elseif($_POST['aksi'] == "edit"){
            echo "Edit data" . " <a href='home.php'>[Home]</a> ";
        }
    }

 if(isset($_GET['hapus'])){
    
 $id_siswa = $_GET['hapus'];
 $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
 $sql = mysqli_query($conn, $query);
 
  if ($sql){
            header("location: home.php");    
        

        } else {
            echo $query;

        }


 //echo "Hapus data" . " <a href='home.php'>[Home]</a> ";
    }

?>