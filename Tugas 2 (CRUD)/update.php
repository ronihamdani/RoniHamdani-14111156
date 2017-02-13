<?php
include 'connect.php';

if (isset($_POST)) {
    $sql = "UPDATE tabel_biodata SET nama = '$_POST[nama]',
                                     jenis_kelamin = '$_POST[jenis_kelamin]',
                                     alamat = '$_POST[alamat]',
                                     nim  = '$_POST[nim]'
                                 WHERE id = '$_POST[id]' ";
    $dbh->exec($sql);
}

header("location:beranda.php");
?>