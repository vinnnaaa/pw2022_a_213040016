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

    <title>Bootstrap 5 Responsive Admin Dashboard</title>
  </head>
  <body>
    <di class="d-flex" id="wrapper">
      <!-- Sidebar stars here-->

      <div class="bg-white" id="sidebar-wrapper">
        <div
          class="sidebar-heading-text-center py-4 text-primary fs-4 fw-bold text-uppercase border"
        >
          <i class="fas fa-user-secret me-2"></i> Codersbite
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
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-chart-line me-2"></i> Analytics
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-paperchip me-2"></i> Reports
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-shopping-cart me-2"></i> Store Mng
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-gift me-2"></i> Products
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-comment-dots me-2"></i> Chat
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-map-marker-alt me-2"></i> Outlet
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
          >
            <i class="fas fa-project-diagram me-2"></i> Logout
          </a>
        </div>
      </div>
      <!-- Sidebar end here-->

      <!-- Main Content -->
      <div class="container col-md-9 m-0">
      <h1>Daftar Perpustakaan</h1>
<a href="tambah.php" class="btn btn-success m-2">+ tambah data</a>

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
            <a class="btn btn-danger"href="ubah.php?Id=<?= $perpus["id"]; ?>">Ubah</a>
            <a class="btn btn-primary"href="hapuss.php?Id=<?= $perpus["id"]; ?>">Hapus</a>
        </td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

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
  </body>
</html>
