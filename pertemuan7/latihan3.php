<?php 
// Array Associative
$mahasiswa = [
  [
    "nama"    => "Sandhika Galih", 
    "nim"     => "043040023", 
    "email"   => "sandhikagalih@unpas.ac.id", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama"    => "Doddy Ferdiansyah", 
    "nim"     => "133040023", 
    "email"   => "doddy@gmail.com", 
    "jurusan" => "Teknik Mesin"
  ],
  [
    "nama"    => "Erik", 
    "nim"     => "143040123", 
    "jurusan" => "Teknik Industri",
    "email"   => "erik@icloud.com"
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NIM : <?= $mhs["nim"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>