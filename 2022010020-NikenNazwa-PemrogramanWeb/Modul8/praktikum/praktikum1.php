<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Dosen</title>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
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
        <h2>Proses Nama Dosen</h2>
        <form action="" method="post">
            <label for="nama">Masukkan Nama Dosen:</label>
            <input type="text" name="nama" required>
            <button type="submit">Proses</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai nama dari form
            $nama = $_POST["nama"];

            // Hitung jumlah kata dan huruf
            $jumlahKata = str_word_count($nama);
            $jumlahHuruf = strlen($nama);

            // Balikkan nama
            $kebalikanNama = strrev($nama);
            ?>
            
            <h2>Hasil Proses Nama Dosen</h2>
            <p>Jumlah kata: <?php echo $jumlahKata; ?></p>
            <p>Jumlah huruf: <?php echo $jumlahHuruf; ?></p>
            <p>Kebalikan nama: <?php echo $kebalikanNama; ?></p>
            <a href="">Kembali</a>

        <?php } ?>
    </div>
</body>
</html>
