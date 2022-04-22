<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi - Praktikum Modul 5</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['nrp'];?></td>
                <td><?php echo $d['alamat'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>