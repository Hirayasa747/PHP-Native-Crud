<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- END OF NAVBAR -->



<!-- MAIN -->
<div class="container">
<div class="card">
    <div class="card-header">
        Siswa
</div>
<div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>124434</td>
      <td>Firman</td>
      <td>704</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-success">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>777</td>
      <td>affarka hama</td>
      <td>67</td>
      <td>@mdo</td>
    <td><button type="button" class="btn btn-success">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>5453</td>
      <td>Herdi</td>
      <td>444</td>
      <td>@mdo</td>
    <td><button type="button" class="btn btn-success">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td>

      
    </tr>
  </tbody>
    


</table>

</div>
</div>
</div>
<!-- END OF MAIN -->


<!-- FOOTER -->
<footer class="bg-body-tertiary text-center text-lg-start mt-auto">
    <div class="container p-4">
    <p>&copy; 2026 StudentAPP. ALL right reserved.</p>

    </div>

</footer>

<!-- END OF FOOTER -->

    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>