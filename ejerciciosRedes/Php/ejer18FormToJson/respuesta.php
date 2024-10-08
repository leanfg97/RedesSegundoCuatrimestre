<!DOCTYPE html>
<html lang="es">
<head>
    <title>Respuesta</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name=“addsearch-category” content=“Cursada de Redes en UB”>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <?php
        $objDatoUsuario = new stdclass;
        $objDatoUsuario->idUsuario = $_POST['idUsuario'];
        $objDatoUsuario->login = $_POST['login'];
        $objDatoUsuario->apellido = $_POST['apellido'];
        $objDatoUsuario->nombres = $_POST['nombres'];
        $objDatoUsuario->fechaNac = $_POST['fechaNac'];

        $jsonDatosUsuario= json_encode($objDatoUsuario);
      
        echo $jsonDatosUsuario;?>
   
</body>
</html>