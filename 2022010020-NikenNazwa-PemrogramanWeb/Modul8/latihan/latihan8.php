<!DOCTYPE html>
<html>
<head>
	<title>Contoh Tipe Data</title>
</head>
<body>
	<?php
		// Menampilkan data produk berdasarkan tipe data
		$produk = [
			['nama' => 'Laptop Asus', 'harga' => 8000000, 'stok' => 10, 'diskon' => 0.1, 'tersedia' => true],
			['nama' => 'Smartphone Samsung', 'harga' => 5000000, 'stok' => 5, 'diskon' => 0.05, 'tersedia' => false],
			['nama' => 'TV LG', 'harga' => 10000000, 'stok' => 3, 'diskon' => 0.2, 'tersedia' => true]
		];

		// Menampilkan data produk dengan cara yang berbeda
		echo "<h1>Data Produk:</h1>";
		echo "<ul>";
		foreach ($produk as $value) {
			echo "<li>Nama: " . $value['nama'] . ", Harga: " . $value['harga'] . ", Stok: " . $value['stok'] . ", Diskon: " . ($value['diskon'] * 100) . "%, Tersedia: " . ($value['tersedia'] ? 'Ya' : 'Tidak') . "</li>";
		}
		echo "</ul>";

		// Menampilkan data produk dengan cara yang dinamis
		echo "<h1>Data Produk:</h1>";
		foreach ($produk as $index => $value) {
			echo "<p>Nama: " . $value['nama'] . ", Harga: " . $value['harga'] . ", Stok: " . $value['stok'] . ", Diskon: " . ($value['diskon'] * 100) . "%, Tersedia: " . ($value['tersedia'] ? 'Ya' : 'Tidak') . "</p>";
		}
	?>
</body>
</html>
