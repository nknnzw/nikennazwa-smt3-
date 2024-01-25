<?php 
session_start();
include 'config/dbcon.php';
include '../../koneksi/koneksi.php';
include 'halLogin.php';
$username = $_POST['email'];
$pass = $_POST['pass'];
// cek user
$result = mysqli_query($conn, "SELECT * FROM admin where username = '$username'");
$row = mysqli_fetch_assoc($result);
$user = $row['username'];
$ps = $row['password'];
if($username == $user){
	if(password_verify($pass, $ps)){
		$_SESSION["admin2"] = true;
		header('location:index.php');
	}
	else{
		echo "
		<script>
		alert('USERNAME/PASSWORD SALAH');
		window.location = 'halLogin.php';
		</script>
		";
	}
}

?>