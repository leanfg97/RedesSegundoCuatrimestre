<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejer17Ajax</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name=“addsearch-category” content=“Cursada de Redes en UB”>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    .caja1{
        display:block;
        width: 100%;
        height: 80%;
        overflow:auto;
        box-sizing: border-box;
    }
    .cajaContainer{
        display: inline;
        text-align:left;
        height: 250px;
        width: 350px;
        float:left;
        border-style:solid;
        border-color:gray;
        border-width:1px;
        padding:1%;
        background-color: grey;
        }
    .cajaContainer1{
        display: inline;
        text-align:left;
        height: 250px;
        width: 350px;
        float:left;
        border-style:solid;
        border-color:gray;
        border-width:1px;
        padding:1%;
        background-color: blue;
        }
   
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {

        // Mostrar la imagen cuando el mouse entra en el contenedor
        $(".cajaContainer1").mouseenter(function() {
            $("#BotonDisparador").css("display", "inline-block");
        });

        // Ocultar la imagen cuando el mouse sale del contenedor
        $(".cajaContainer1").mouseleave(function() {
            $("#BotonDisparador").css("display", "none");
        });



  $("#BotonDisparador").click(function(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del envío del formulario
    $("#resultado").empty();
    $("#resultado").addClass("estiloRecibiendo");
    $("#resultado").html("<h2>Esperando respuesta ..</h2>");
    $("#estado").empty();
    $("#estado").append("<h4>Estado del requerimiento: </h4>");
    $.ajax({
      type: "post",
      url: "./respuesta2.php",
      data: { clave: $("#clave").val() },
      success: function(respuestaDelServer, estado) {
        $("#resultado").removeClass("estiloRecibiendo");
        $("#resultado").html("<h1>Resultado: </h1><h4>" + respuestaDelServer + "</h4>");
        $("#estado").append("<h4>" + estado + "</h4>");
      }
    });
  });

  function mostrarBoton() {
    const boton = document.getElementById('BotonDisparador');
    boton.style.display = 'inline-block';
  }

  function ocultarBoton() {
    const boton = document.getElementById('BotonDisparador');
    boton.style.display = 'none';
  }
});

</script>

<body>
    <div class="caja1">

    <form action="respuesta2.php" method="post">
        <div class="cajaContainer">
            <h1>Dato de Entrada:</h1>
            <input type="text" id="clave" name="clave" placeholder="Ingrese una clave">
        </div>
        <div class="cajaContainer1" >
            <h2 style="color:white;">Encriptar:</h2>
            <div style="display: flex; justify-content: center; align-items: center; background-color:blue">
                <!-- Utilizamos una imagen como botón de envío -->
               <input type="image" id="BotonDisparador" src="encriptar.jpg" alt="Enviar" style="display: none; height: 80px; width: auto;">

            </div>
        </div>
        </form>
        <div class="cajaContainer" style="background: yellow; width:450px" id="resultado">
        </div>
        <div class="cajaContainer" style="background: darkslategrey;" id="estado">
        </div>
        <div class="cajaContainer" style="background: lightblue; width:830px">

    </div>
    </div>
 
</body>
</html>