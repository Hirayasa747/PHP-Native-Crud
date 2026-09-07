<?php
include "fungsi.php";



    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            
        
      $berhasil = tambah_data($_POST, $_FILES);
        

        if ($berhasil){
            header("location: home.php");    

        } else {
            echo $berhasil;

        }


       
        }elseif($_POST['aksi'] == "edit"){
            
        $berhasil = ubah_data($_POST, $_FILES);
       
            if ($berhasil){
            header("location: home.php");    

        } else {
            echo $berhasil;

        }
        
            }
    }



 if(isset($_GET['hapus'])){   

   $berhasil = hapus_data($_GET);
     if ($berhasil){
            header("location: home.php");    
        

        } else {
            echo $query;

        }


 //echo "Hapus data" . " <a href='home.php'>[Home]</a> ";
    }

?>