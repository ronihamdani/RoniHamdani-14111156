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
session_start();
include 'connect.php';
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		$sql_query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";

		if (mysql_query($sql_query)) {
			$num_rows = mysql_num_rows(mysql_query($sql_query));
			if ($num_rows == 1) {
				$_SESSION['username'] = $username;
			?>
			<script type="text/javascript">
				alert('Berhasil Login');
				window.location.href="beranda.php";
			</script>

			<?php } else {
				?>
				<script type="text/javascript">
				alert('Tidak cocok');
				window.location.href="login.php";
				</script>
			<?php
			}
		} else {
				?>
				<script type="text/javascript">
				alert('Terjadi error');
				window.location.href="login.php";
				</script>

				<?php
		}
	}

	if(isset($_POST['batal'])) {
		?>
				<script type="text/javascript">
				window.location.href="login.php";
				</script>
			<?php
	}

	?>

    <header>
        <h1>CRUD Operation</h1>
    </header>

<form method="post">
<table widht="60%"
align="center">
	<tr>
	<th align="center"
colspan="2">Login <a href="daftar.php">-
Daftar</a></th>
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
	<td colspan="2" align="right"><input type="submit" value="Login" name="login">
	<input type="submit" value="Batal" name="batal"></td>
	</tr>
</table>
</form>




<footer>Roni Hamdani - 14.111.156<br>
Mata Kulaih Pemrograman Web II</footer>
</body>
</html>