<?php

function koneksi() {
    $coon  = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040016') or die ('konek gagal');

    return $coon;

}

function query ($query) {
    $conn = koneksi();
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}   
    return $rows;
}
function tambah($data){
    $conn = koneksi();

    // cek apakah user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4){
        $gambar = 'img.jpeg';
    } else {
        //lakukan fungsi upload
        $gambar = upload();
        // cek jika upload gagal
        if(!$gambar) {
            return false;
        }
    }

    $npm = htmlspecialchars ($data["npm"]);
    $nama = htmlspecialchars ($data["nama"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars ($data["jurusan"]);
    // $gambar = htmlspecialchars ($data["gambar"]);

    $query = "INSERT INTO
                mahasiswa
              VALUES
               (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function hapus($id){
    $conn = koneksi();
    // query mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id") [0];
    // cek jika gambar default
    if($mhs["gambar"] !== 'img.jpeg') {
        //hapus gambar
        unlink('img'/ $mhs["gambar"]);
    }
    mysqli_query($conn,"DELETE * FROM mahasiswa WHERE ID=$id") or die (mysqli_error($conn));
}


    function ubah($data){
        $conn = koneksi();
        $id = $data["id"];
        $npm = htmlspecialchars ($data["npm"]);
        $nama = htmlspecialchars ($data["nama"]);
        $email = htmlspecialchars ($data["email"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        $gambar = htmlspecialchars ($data["gambar"]);
        $query = "UPDATE mahasiswa SET
                    nmp = '$npm',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                    WHERE id = $id
                    ";
        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
}

function upload(){
    //Siapakan data file
    $filename = $_FILES["gambar"] ["name"];
    $filetmpname = $_FILES["gambar"] ["tmp_name"];
    $filesize = $_FILES["gambar"] ["size"];
    $filetype =  pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file bukan gambar
    if (!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
             </script>";
        return false; 
    }

    // cek jika gambar terlalu besar 
    if($filesize > 10000) {
        echo "<script>
                alert('yang anda upload bukan gambar');
             </script>";
        return false; 
    }

    //proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;

}

?>