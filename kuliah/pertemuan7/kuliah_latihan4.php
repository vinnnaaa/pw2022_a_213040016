<?php 
$mahasiswa = [
    [
        "gambar" => "img2.jpeg",
        "nama" => "Diva Nur Haffifah", 
        "npm" => "213040001", 
        "email" => "divanurhaffifah@gmail.com",
        "jurusan" => "Teknik informatika"
    ],
    [
        "gambar" => "img.jpeg",
        "nama" => "Revina Bella Trisna", 
        "npm" => "213040002", 
        "email" => "revinabella@gmail.com", 
        "jurusan" => "Teknik Pangan"
    ],
    [
        "gambar" => "img3.jpeg",
        "nama" => "Salma",
        "npm" =>"213040003", 
        "email" =>"salsa@gmail.com", 
        "jurusan" =>"Teknik Industri"
    ],
    [
        "gambar" => "img4.jpg",
        "nama" => "Mohamad Afandi Hidayat",
        "npm" => "21304004",
        "email" => "afandi@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "gambar" => "img5.png",
        "nama" => "Wildan Fauzan",
        "npm" => "21304005",
        "email" => "wildan@gmail.com",
        "jurusan" => "Teknik Industri",
    ],
    [
        "gambar" => "img6.jpg",
        "nama" => "Ainan Bahrul",
        "npm" => "21304006",
        "email" => "ainan@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "gambar" => "img7.jpg",
        "nama" => "M.Haykal",
        "npm" => "21304007",
        "email" => "haykal@gmai.com",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "gambar" => "img8.webp",
        "nama" => "Aufa",
        "npm" => "21304008",
        "email" => "aufa@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "gambar" => "img9.jpg",
        "nama" => "Indri",
        "npm" => "21304009",
        "email" => "indri@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "gambar" => "img10.png  ",
        "nama" => "Risma",
        "npm" => "213040010",
        "email" => "risma@gmail.com",
        "jurusan" => "Teknik Informatika"
    ]
    ];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Detail Mahasiswa</h1>

        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
             <img src="img/<?= $_GET["gambar"]; ?>"    class="img-fluid rounded-start" >
        </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"]; ?> </h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text">Teknik Informatika </p>
        <a href="kuliah_latihan3.php">kembali</a>
      </div>
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