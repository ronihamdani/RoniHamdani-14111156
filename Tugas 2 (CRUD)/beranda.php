<!DOCTYPE html>
<html>
<head>
    <title>Tugas Operasi CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include 'connect.php';
?>

<div class="container">
    <header>
        <h1>CRUD Operation</h1>
    </header>
    <nav>
        <ul>
            <li><b>MENU</b></li>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
            <li><a href="#">Menu 4</a></li>
            <li id="logout"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</div>

<br>
<center><a href="input.php"><button type="submit">Tambah Data</button></a></center>
<br>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NIM</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
    $sql = "SELECT * FROM tabel_biodata ORDER BY id";
    $no  = 1;
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['nim'] ?></td>
            <td align="center">
                <a href="edit.php?id=<?php echo $data['id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>

<footer>Roni Hamdani - 14.111.156<br>
Mata Kulaih Pemrograman Web II</footer>
</body>
</html>