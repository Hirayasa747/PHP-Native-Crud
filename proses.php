<?php

include "koneksi.php";


    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            
        
        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama']; 
        $umur = $_POST['umur'];
        $jenis_kelamin = $_POST['Jenis_Kelamin']; 
        $foto = $_FILES['foto']['name'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];

        $dir = "img/";
        $tmpFile = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$foto);



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

    $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("img/".$result['foto_siswa']);

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