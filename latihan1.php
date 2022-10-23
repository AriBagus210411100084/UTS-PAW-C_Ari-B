<?php

    $koneksi=mysqli_connect("localhost","root","","firman");
    $id_prodi = $_POST['id_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $ket_prodi = $_POST['ket_prodi'];

    $sql = "INSERT INTO table_prodi VALUE('$id_prodi','$nama_prodi','$ket_prodi')";
    $hasil = mysqli_query($koneksi, $sql);
    if (!$hasil){
        header ('location : latihan.php');
    }
?>ss
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Table</title>
</head>
<body>
    
</body>
</html>