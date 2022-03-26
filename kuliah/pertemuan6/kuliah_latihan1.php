<?php
// array Associative
// array yang indexnya berupa string yang ber-asosiati dengan nilainya 

$mahasiswa = [
[
    "nama" => "Diva Nur Haffifah", 
    "npm" => "213040001", 
    "email" => "divanurhaffifah@gmail.com",
    "jurusan" => "Teknik informatika"
],
[
    "nama" => "Revina Bella Trisna", 
    "npm" => "213040002", 
    "email" => "revinabella@gmail.com", 
    "jurusan" => "Teknik Pangan"
],
[
    "nama" => "Salma salsabila", 
    "npm" =>"213040003", 
    "email" =>"salsa@gmail.com", 
    "jurusan" =>"Teknik Industri"
]
];
// var_dump($mahasiswa[1]["email"]);

?>

<?php foreach($mahasiswa as $mhs) :?>
<ul>
    <li>Nama :<?php echo $mhs["nama"]; ?></li>
    <li>Npm : <?php echo $mhs["npm"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    <li>Email : <?php echo $mhs["email"]; ?></li>
    
</ul>
<?php endforeach;  ?>


