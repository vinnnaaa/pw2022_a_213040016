<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL');

return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

// Siapkan data $perpustakaan
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return $rows;
}

function tambah($data) {
    $conn = koneksi();

    $gambar = htmlspecialchars ($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $halaman = htmlspecialchars($data["halaman"]);
    
    $query = "INSERT INTO perpustakaan VALUES (null, '$gambar', '$judul', '$pengarang', '$penerbit', '$kategori', '$halaman')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM perpustakaan WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $halaman = htmlspecialchars($data["halaman"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE perpustakaan SET
                gambar = '$gambar',
                judul = '$judul',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                kategori = '$kategori',
                halaman = '$halaman'
            WHERE id = $id
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM perpustakaan
                    WHERE
                    judul = '%$keyword%' OR
                    pengarang = '%$keyword%' OR
                    penerbit = '%$keyword%' OR
                    kategori = '%$keyword%'
            ";
    return query($query);
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
    if($filesize > 1000000) {
        echo "<script>
                alert('size gambar terlalu besar');
             </script>";
        return false; 
    }

    //proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;

}

function registrasi($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum 
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdafttar!')
            </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2) {
        echo "<script>
                alert('konformasi password tidak sesuai');
              </script>";
        return false;
    } 
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

   // tambahkan userbaru ke database
   mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password') ");
   return mysqli_affected_rows($conn);
} 







?>