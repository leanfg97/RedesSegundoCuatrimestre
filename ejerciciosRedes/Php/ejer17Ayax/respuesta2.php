<?php
    
    $aEncriptar=$_POST['clave'];

    sleep(3); //Algunos segundos de delay 


    $claveEncriptadamd5 = md5($aEncriptar);
    $claveEncriptadasha1 = sha1($aEncriptar);

    
    echo "Clave =" .$aEncriptar."<br>";
    echo "Clave encriptada en md5 (128 bits o 16 pares hexadecimales):<br>";
    echo "$claveEncriptadamd5.<br>";
    echo "Clave =" .$aEncriptar."<br>";
    echo "Clave encriptada en sha1 (160 bits o 20 pares hexadecimales):<br>";
    echo "$claveEncriptadasha1";
    
?>
