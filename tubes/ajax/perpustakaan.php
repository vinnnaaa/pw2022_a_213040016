<?php
require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM perpustakaan
                WHERE
                judul LIKE '%$keyword%' OR 
                pengarang LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%'
           ";
  $perpustakaan = query("$query");

?>

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