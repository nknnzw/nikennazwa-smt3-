<?php
include_once 'db.php';

// Fetch the survey data to pre-fill the form
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM surveys WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $survey = mysqli_fetch_assoc($result);
} else {
    // Handle the case where no survey ID is provided
    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        a button {
            background-color: #f44336;
        }

        button:hover, a button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Update Survey</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $survey['id'] ?>">

        <label for="judul">Judul Survei:</label>
        <input type="text" name="judul" value="<?= $survey['judul'] ?>" required><br>

        <label for="gambar">Choose File:</label>
        <input type="file" name="gambar" accept="image/*"><br>

        <label for="link">Link:</label>
        <input type="text" name="link" value="<?= $survey['link'] ?>" required><br>

        <button type="submit" name="update">Update</button>
        <a href="../Modul9_praktikum/read.php"><button type="button">Kembali</button></a>
    </form>
</body>
</html>
