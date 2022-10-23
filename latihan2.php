<?php

$koneksi=mysqli_connect("localhost","root","","firman");
$id=$_GET['id'];

$sql="DELETE FROM table_prodi where id_prodi=$id";


?>
