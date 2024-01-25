<?php 
session_start();
require_once __DIR__ . '/../../koneksi/koneksi.php';
$username = $_POST['username'];
$pass = $_POST['pass'];
// cek user

$result = mysqli_query($conn, "SELECT * FROM admin where username = '$username'");
$row = mysqli_fetch_assoc($result);
$user = $row['username'];
$ps = $row['password'];
if ($username == $user) {
    if (password_verify($pass, $ps)) {
        $_SESSION["admin"] = ["user" => "admin"];
        header('location: ../index.php'); // Ganti sesuai halaman yang diinginkan
    } else {
        echo "
        <script>
            alert('USERNAME/PASSWORD SALAH');
            window.location = '../halLogin.php';
        </script>
        ";
    }
}

?>