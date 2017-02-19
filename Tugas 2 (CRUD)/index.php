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

<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['username'];
		$password = sha1($_POST['password']);
		// Membangun koneksi ke database
		$connection = mysql_connect("localhost", "root", "");
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// Seleksi Database
		$db = mysql_select_db("biodata", $connection);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from tb_user where password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['username']=$username; // Membuat Sesi/session
				header("location: beranda.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Username atau Password belum terdaftar";
				}
				mysql_close($connection); // Menutup koneksi
	}
}
?>

    <header>
        <h1>CRUD Operation</h1>
    </header>

<br>
<br>
<form method="post">
<br>
<table widht="60%"
align="center">
	<tr>
	<th align="center" colspan="2">Login &nbsp;&nbsp;&nbsp;&nbsp;<a href="daftar.php">Daftar</a></th>
	</tr>

	<tr>
	<td>Username</td>
	<td><input type="text" name="username" size="80"></td>
	</tr>

	<tr>
	<td>Password</td>
	<td><input type="password" name="password" size="80"></td>
	</tr>

	<tr>
	<td colspan="2" align="center"><input type="submit" value="Login" id ="login" name="login">
	<input type="submit" value="Batal" name="batal"></td>
	</tr>
</table>
<br>
<br>
</form>


<footer>Roni Hamdani - 14.111.156<br>
Mata Kulaih Pemrograman Web II</footer>
</body>
</html>