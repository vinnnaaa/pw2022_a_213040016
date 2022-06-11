<?php 
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
  }
require 'function.php';

//Query data perpustakaan 
$id = $_GET["id"];
$perpus = query("SELECT * FROM perpustakaan WHERE id = $id")[0];



//cek apakah tombol ubah sudah di klik
if(isset($_POST["ubah"])) {
    if(ubah($_POST)> 0 ) {
        echo "<script>
        alert('data berhasil di ubah!');
        document.location.href='index.php';
        </script>";
    }
}
       
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ubah Daftar Perpustakaan</title>
</head>
<body>
    
    <div class="container">
        <h1> From Ubah Data Perpustakaan</h1>

        <a href="index.php" class="">Kembali ke data perpustakaan</a>
        <div class ="row mt-3">
            <div class ="row col-8">

                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $perpus["id"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $perpus["gambar"];?>">
                    <label for="gambar" class="form-label">Gambar </label>
                    <img src="img/<?=$perpus["gambar"];?>" width="40">
                    <input type="file" name="gambar" class="form-control" id="gambar"name="gambar" required maxlength="9" style="width: 200px;" 
                    value="<?= $perpus["gambar"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_musik" class="form-label">Judul </label>
                        <input type="text" name="judul" class="form-control" id="judul" style="width: 200px;" value="<?= $perpus["judul"];?>">
                    </div>
                    <div class="mb-3">
                        <label for="pencipta" class="form-label">pengarang </label>
                        <input type="text" name="pengarang" class="form-control" id="pengarang" style="width: 200px;" value="<?= $perpus["pengarang"];?>">
                    </div>
                    <div class="mb-3">
                        <label for="penyanyi" class="form-label">penerbit </label>
                        <input type="text" name="penerbit" class="form-control" id="penerbit" style="width: 200px;" value="<?= $perpus["penerbit"];?>">
                    </div>
                    <div class="mb-3>
                        <label for="penyanyi" class="form-label">kategori </label>
                        <input type="text" name="kategori" class="form-control" id="kategori" style="width: 200px;" value="<?= $perpus["kategori"];?>">
                    </div>
                    <div class="mb-3>
                        <label for="penyanyi" class="form-label">halaman </label>
                        <input type="text" name="halaman" class="form-control" id="halaman" style="width: 200px;" value="<?= $perpus["halaman"];?>">
                    </div>
                    
                    <button type="submit" name="ubah" class="btn btn-primary" style="width: 200px;">Ubah Data Perpustakaan</button>
                </form>
            </div>                                                                                          
        </div>
    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>