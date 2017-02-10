<!DOCTYPE html>
<html>
<head>
    <title>Tugas Operasi CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <h1>CRUD Operation</h1>
</header>

<fieldset style="width: 50%; margin: auto;">
    <legend>Form Tambah Data </legend>
    
    <form action="simpan.php" method="post">
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required />
        </p>
        
        <p>
            Jenis Kelamin<br />
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
        </p>
        
        <p>
            Alamat Lengkap<br />
            <textarea name="alamat" cols="50" required></textarea>
        </p>
        
        <p>
            NIM<br />
            <input type="text" name="nim" required />
        </p>
        
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center><a href="index.php">&Lt; Beranda</a></center>

<footer>Roni Hamdani - 14.111.156<br>
Mata Kulaih Pemrograman Web II</footer>
</body>
</html>