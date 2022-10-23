<?php

    $koneksi=mysqli_connect("localhost","root","","firman");
    if (!$koneksi){
        echo "Koneksi ke database gagal";
    }

    $sql= "SELECT * FROM table_prodi";
    $hasil= mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PAW</title>
</head>
<body>
    <a href="latihan1.php.">tambah</a>
    <br><br>
    <table border ="1" width=80%>
        <tr>
            <td>Id Prodi</td>
            <td>Nama Prodi</td>
            <td>Keterangan Prodi</td>
            <td>action</td>
        </tr>
        <?php while($row = mysqli_fetch_array($hasil)) {?>
          <tr>
            <td><?php echo $row["id_prodi"]; ?></td>
            <td><?php echo $row["nama_prodi"]; ?></td>
            <td><?php echo $row["ket_prodi"]; ?></td>
            <td>
                <a href="">Delete</a>
                <a href="">Edit</a>
            </td>
          </tr>
          <?php } ?>
    </table>
</body>
</html>