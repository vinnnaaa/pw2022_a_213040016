<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
  }

  require 'function.php';
  $perpustakaan = query("SELECT * FROM perpustakaan");

// query perputakaan ketika tombol cari di klik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM perpustakaan
                WHERE
                judul LIKE '%$keyword%' OR 
                pengarang LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%'
           ";
  $perpustakaan = query("$query");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/> 
    <link rel="stylesheet" href="
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PERPUS</title>
  </head>
  <body>
    <di class="d-flex" id="wrapper">
      <!-- Sidebar stars here-->

      <div class="bg-white" id="sidebar-wrapper">
        <div
          class="sidebar-heading-text-center py-4 text-primary fs-4 fw-bold text-uppercase border"
        >
          <i class="fas fa-user-secret me-2"></i> Perpustakaan 
        </div>

        <div class="list-group list-group-flush my-3">
          <a
            hreff="#"
            class="list-group-item list-group-item-action bg-transparent second-text active"
          >
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-project-diagram me-2"></i> Project
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
          ></a>
        </div>
      </div>
      <!-- Sidebar end here-->

      <!-- Main Content -->
      <div class="container col-md-9 m-0">
      <a href="logout.php">Logout</a>
      <h1>Daftar Perpustakaan</h1>
      <a href="tambah.php" class="btn
        btn-primary">Tambah Data Perpustakaan</a>

        <div class="row mt-4">
          <div class="col-8">
              <form action="" method="get">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" placeholder="masukan keyword pencarian.." autofocus id="keyword">
                  <button class="btn btn-primary" type="submit" id="tombol-cari" name="cari">Cari!</button>
                </div>
              </form>
          </div>
        </div>

<div id="container">
<table class="table table-white table-sm mt-3" border="1" cellpadding="10" cellpacing="0">

    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th>Halaman</th>
        <th>Aksi</th>
    </tr> 

    <?php $i = 1; foreach( $perpustakaan as $perpus) : ?>
    <tr>
        <td class="text-center"><?= $i; ?></td>
        
        <td class="m-3"><img src="img/<?= $perpus["gambar"]; ?>"width="50"></td>
        <td><?= $perpus["judul"]; ?></td>
        <td><?= $perpus["pengarang"]; ?></td>
        <td><?= $perpus["penerbit"]; ?></td>
        <td><?= $perpus["kategori"]; ?></td>
        <td><?= $perpus["halaman"]; ?></td>
        <td>
          <a href="ubah.php?id=<?= $perpus["id"]; ?>" class="btn badge bg-warning"> ubah </a>
          <a href="hapuss.php?id=<?= $perpus["id"]; ?>" class="btn badge bg-danger" onclick="return confirm ('yakin?'); ">hapus</a>
        </td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

    </div>
      <!-- End Main Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
</div>

    <script src="js/script.js"></script>
  </body>
</html>
