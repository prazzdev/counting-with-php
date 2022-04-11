
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Yesterday, Now & Tommorow with PHP</title>
 </head>
 <body>
 	<?php 
 		$aday = 60*60*24;
 		$now = date("j M Y");
 		$next = date("j M Y", time()+$aday);
 		$prev = date("j M Y", time()-$aday);

 		echo "Kemarin tanggal " . $prev . "<br>";
 		echo "Sekarang tanggal " . $now . "<br>";
 		echo "Besok tanggal " . $next . "<br>";
 	 ?>
 </body>
 </html>