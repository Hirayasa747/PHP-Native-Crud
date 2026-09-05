<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>








  <body class="d-flex flex-column min-vh-100">




<!-- MAIN -->
<div class="container">
<div class="card my-5">
    <div class="card-header">
        Siswa
</div>

<form method="POST" action="proses.php" enctype="multipart/form-data">

<div class="card-body">
    
  <div class="mb-3 row">
  <label for="nis" class="col-sm-2 col-form-label">Nis</label>
  <div class="col-sm-10">
    <input required type="text"  class="form-control" id="nisn" name="nisn" >
  </div>
</div>



   <div class="mb-3 row">
  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
  <div class="col-sm-10">
    <input required type="text"  class="form-control" id="nama" name="nama" >
  </div>
</div>


<div class="mb-3 row">
  <label for="umur" class="col-sm-2 col-form-label">Umur</label>
  <div class="col-sm-10">
    <input required type="number" class="form-control" id="umur" name="umur">
  </div>
</div>


<div class="mb-3 row">
  <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
  <div class="col-sm-10">
   <select required id="jkel" name="Jenis_Kelamin" class="form-select">
  <option value="laki-laki">Laki-laki</option>
  <option value="perempuan">Perempuan</option>  
</select>


  </div>
</div>

<div class="mb-3 row">
  <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
  <div class="col-sm-10">
     <input required class="form-control" type="file" name="foto" id="foto" accept="image/*">
  </div>
</div>




 <div class="mb-3 row">
  <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
  <div class="col-sm-10">
     <textarea required class="form-control" id="alamat" name="alamat" rows="3"></textarea>
  </div>
</div>


<div class="mb-3 row">
  <label for="email" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input required type="email" class="form-control" id="email" name="email">
  </div>
</div>


<div class="mb-3 row mt-4">
    <div class="col">

<?php
if (isset($_GET['ubah'])) {
?>

  <button type="submit" name="aksi" value="edit" class="btn btn-primary">
    
  <i class="fa fa-floppy-o" aria-hidden="true"></i>
  Simpan Perubahan

</button>
<?php
} else {
?> 
  <button type="submit" name="aksi" value="add" class="btn btn-primary">
    
  <i class="fa fa-floppy-o" aria-hidden="true"></i>
  Tambahkan
</button>

<?php
}
?>
 

<a href="home.php" type="button" class="btn btn-danger">
    <i class="fa fa-backward" aria-hidden="true">

    </i> Batal

</a>

</div>

</div>



</div>




</form>


</div>
</div>
<!-- END OF MAIN -->





<!-- FOOTER -->






<!-- END OF FOOTER -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>


</html>