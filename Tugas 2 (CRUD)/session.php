<?php
include 'connect.php';
include 'login.php';

session_start();

$user_check = $_SESSION['username'];

$mysql_query = "SELECT * FROM tb_user WHERE username = '$user_check'";

$row = mysql_fetch_array(mysql_query($mysql_query));

$login_session_name = $row['nama'];

if(!isset($_SESSION['username'])) {
	header("location:login.php");

}
?>