<?php
$host ="localhost";
$username = "root";
$password = "";
$database = "hotwheels";

$conn = mysqli_connect("$host", "$username", "$password", "$database");

if(!$conn)
{
    header("Location: ../errors/dberror.php");
    die();
}
?>