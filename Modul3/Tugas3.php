<html>
	<head>
		<title>Program Penjumlahan</title>
	</head>
	
	<body>
	<form method='POST' action='Tugas3.php'>
		<p>Nilai A adalah <input type='text' name='nilaiA'></p>
		<p>Nilai B adalah <input type='text' name='nilaiB'></p>
		<p><input type='submit' value='Jumlahkan' name='submit'></p>
	</form>
	
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	$nilaiA= $_POST['nilaiA'];
	$nilaiB= $_POST['nilaiB'];
	$submit= $_POST['submit'];
	
	$jumlah= $nilaiA + $nilaiB;
	echo "Nilai A adalah $nilaiA </br>";
	echo "Nilai B adalah $nilaiB </br>";
	echo "Jadi Nilai A ditambahkan Nilai B adalah $jumlah";
	?>
	</body>
</html>