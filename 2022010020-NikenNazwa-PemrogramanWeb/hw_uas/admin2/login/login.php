<?php
require("../db/conn.php");
session_start();

$username = $_POST['usernameLogin'];
$password = $_POST['passwordLogin'];

if (strtolower($username) == "admin" && strtolower($password) == "admin") {
    $_SESSION['admin2'] = "yes";
    echo json_encode([
        'response' => 'True'
    ]);
}

echo json_encode([
    'response' => 'False'
]);

?>