<?php
  require 'functions.php';
  $mahasiswa = query("SELECT * FROM mahasiswa");
// query mahasiswa ketika tombol cari di klik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM mahasiswa 
                WHERE
                nama LIKE '%$keyword%' OR 
                npm LIKE '%$keyword%'
           ";
  $mahasiswa = query("$query");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<h1>Daftar Perpustakaan</h1>
<a href="tambah.php" class="btn btn-success m-2">+ tambah data</a>

<form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>