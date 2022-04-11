<!DOCTYPE html>
<html>
<head>
<title>Menghitung Hari dengan PHP (1)</title>
<style>
	* {
		font-family: arial;
	}
	.date {
		font-size: 2em;
		color: salmon;
		font-weight: bold;
	}
</style>
</head>
<body>
<!-- Hitung hari (dari hari ini) setelah ditambah -->
<div class="date">
<?php 
	$now = date("l, j M Y");
	$hitung = 30;
	$sec = 60*60*24;
	$result = date("l, j M Y", time()+$sec*$hitung);
	echo $hitung . " Hari setelah hari " . $now . " adalah " . $result . ".";
 ?>
</div>
</body>
</html>