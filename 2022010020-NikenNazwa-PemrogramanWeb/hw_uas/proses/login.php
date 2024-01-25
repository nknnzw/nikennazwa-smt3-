<?php 
session_start();
include '../koneksi/koneksi.php';
include 'config/dbcon.php';

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $stmt = mysqli_prepare($conn, "SELECT * FROM customer WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['nama'];
            $_SESSION['kd_cs'] = $row['kode_customer'];
            header('location:../index.php');
        } else {
            echo "
            <script>
            alert('USERNAME/PASSWORD SALAH');
            window.location = '../userLogin.php';
            </script>
            ";
            die;
        }
    } else {
        echo "
        <script>
        alert('USERNAME/PASSWORD SALAH');
        window.location = '../userLogin.php';
        </script>
        ";
        die;
    }
}
?>
