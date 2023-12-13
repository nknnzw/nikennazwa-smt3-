<!DOCTYPE html>
<html>
<head>
	<title>Variabel PHP</title>
</head>
<body>
	<?php
		// Variabel global
		$globalVar = "Ini adalah variabel global";

		function contohLocalVar() {
			// Variabel lokal
			$localVar = "Ini adalah variabel lokal";
			echo $localVar;
			echo "<br>";
			// Mengakses variabel global di dalam fungsi
			global $globalVar;
			echo $globalVar;
		}

		// Memanggil fungsi
		contohLocalVar();

		// Mengakses variabel global di luar fungsi
		echo "<br>";
		echo $globalVar;
	?>
</body>
</html>
