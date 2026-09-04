<?php
include "koneksi.php";

$query = "SELECT * FROM tb_siswa";
$sql = mysqli_query($conn, $query);
$no = 0;
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  </head>

  <body class="d-flex flex-column min-vh-100">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD-BS5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  </div>
</nav>

<!-- END OF NAVBAR -->



<!-- MAIN -->
<div class="container">

        <h1 class="mt-4">Data Siswa</h1>

<div class="card-body">
   
    <a href="tambah.php" class="btn btn-primary mb-3 mt-3">
      
    <i class="fa fa-plus" aria-hidden="true"></i>
   
    Tambah Data Siswa</a>

    <div class="table-responsive">
    <table class="table align-middle table-bordered table-hover mt-3"> 
      
    <div class="mb-3 row">
 
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Foto Siswa</th>
      <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

<?php
  while($result = mysqli_fetch_assoc($sql)){
?>


    <tr class="align-middle">
      <th scope="row"><center><?php echo ++$no; ?>.</center></th>
      <td><?php echo $result['nisn']; ?></td>
      <td><?php echo $result['nama_siswa']; ?></td>
      <td><?php echo $result['umur']; ?></td>
      <td><?php echo $result['jenis_kelamin']; ?></td>
      <td>
      <img src="img/<?php echo $result['foto_siswa']; ?>" alt="Foto Siswa" width="150">
      </td>
      <td><?php echo $result['alamat']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td>
        
      <a href="tambah.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success">
        
      <i class="fa fa-pencil" aria-hidden="true"></i>
</a>


      
<a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" button" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
        <i class="fa fa-trash" aria-hidden="true"></i>
</a>

</td>
      
    </tr>
   
<?php
  }

?>    
  
  </tbody>
    


</table>
    </div>


</div>
</div>
</div>
<!-- END OF MAIN -->


<!-- FOOTER -->


<!-- END OF FOOTER -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>