<?php

requeire 'functions.php';

function koneksi () {
    $coon  = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040016') or die ('konek gagal');

    return $coon;

}

function query($query) {
    $conn = koneksi();
    $result = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040016') or die ('konek gagal');

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}   
    return $rows;

}

function tambah($data){
    $conn = koneksi();

    $npm = $data["npm"];
    $npm = $data["nama"];
    $npm = $data["email"];
    $npm = $data["jurusan"];
    $npm = $data["gambar"];

    $query = "INSERT INTO
                mahasiswa
              VALUES
               (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn,"INSERT INTO mahasiswa VALUES (null, '$npm')") or die (mysqli_error(@conn));
}