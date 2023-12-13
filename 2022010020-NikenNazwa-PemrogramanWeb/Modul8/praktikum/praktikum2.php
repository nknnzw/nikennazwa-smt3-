<?php
// Koneksi ke database
$host = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "webform";

$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses form jika ada data yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];

    // Masukkan data ke database
    $query = "INSERT INTO user (nama, email, website, comment, gender) VALUES ('$nama', '$email', '$website', '$comment', '$gender')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Data berhasil disimpan!");</script>';
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 8px 16px;
            background-color: #9d66a4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Data</h2>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="website">Website:</label>
            <input type="text" name="website" required>

            <label for="comment">Comment:</label>
            <textarea name="comment" rows="4" required></textarea>

            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
