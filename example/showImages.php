<?php 
    $dir = "/home/pi/webcampics"; 
    echo "<form action='ejecutarArchivoPython.php' method='POST'> 
            <p>Nombre: <input type='text' name='txtImprimir'></p> 
            <p><input type='submit' name='btnFotocopiar' value='Fotocopiar'></p> 
        </form><br>"; 
    if($opendir = opendir($dir)) { 
        while(($file = readdir($opendir)) !== false) { 
            if(($file != ".") && ($file != "..")) { 
                echo $file."<br>"; 
                echo "<img src='$dir/$file'><br>"; 
                echo "<img src='$dir/$file' border='0' width='300' height='100'><br>"; 
            } 
        } 
    } 
?> 
