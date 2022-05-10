<?php 
	echo "<h1> Hola Mundo </h1>"; 
	system('python3 /var/www/html/example/fotocopiarConArduino.py'); 
	if(isset($_POST['btnFotocopiar'])) { 
		echo "<h1> Hola Mundo </h1>"; 
		system('python3 /var/www/html/example/fotocopiarConArduino.py'); 
		exec('python3 /var/www/html/example/fotocopiarConArduino.py'); 
		$pyout = shell_exec('python3 /var/www/html/example/fotocopiarConArduino.py'); 
		echo $pyout; 
	} 
?> 
