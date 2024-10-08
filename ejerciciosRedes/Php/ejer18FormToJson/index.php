<!DOCTYPE html>
<html lang="es">
<head>
    <title>esp18FormToJson</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name=“addsearch-category” content=“Cursada de Redes en UB”>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    


<style>

    body{
        height: 80%;
        background-color: rgb(117, 77, 77);
    }
    .formulario {
            width: auto;
            margin: 0 auto;
        }

        .columnas {
            display: block;
            margin-right: 5%;
        }

        .formulario label{
            width: 100%;
            height: 30px;
         
            font-size: 20px;
            margin-top: 20px;

        }
        .formulario button {
            width: 100%;
            height: 30px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        div.VentanaModal{
        display:none;
        position:fixed;
        padding: 0;
        Width: 50%;
        Height: 400px;
        left:25%;
        overflow-y: auto;
        background-color:rgb(158, 240, 158);
        visibility:visible;
            }
    
    .cerrar {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }   

    .cerrar:hover {
        color: black;
        cursor: pointer;
    }
    .Boton2{
        width:  100px;
    }
    </style>
 <script>
 document.addEventListener("DOMContentLoaded", function() { 
 // Obtener referencias a elementos HTML
 
 var modal = document.getElementById('contenido');
    var btnMostrarModal = document.getElementById('BotonM');
    var btnCerrarModal = document.getElementById('cerrarModal');
    var contenedor = document.getElementById('contenedor')
    // Asignar un manejador de eventos al botón para mostrar el modal
    btnMostrarModal.onclick = function() {
        modal.style.display = 'block';
        btnMostrarModal.disabled = true;
        contenedor.style.opacity = 0.3;
        modal.style.opacity = 1;
    }

    // Asignar un manejador de eventos al botón para cerrar el modal
    btnCerrarModal.onclick = function() {
        modal.style.display = 'none';
        btnMostrarModal.disabled = false;
        contenedor.style.opacity = 1;
    }
        var miInput1 = document.getElementById("idUsuario");
        var miInput2 = document.getElementById("login");
        var miInput3 = document.getElementById("nombres");
        var miInput4 = document.getElementById("apellido");
        var miInput5 = document.getElementById("fechaNac");
    
        document.getElementById("Boton2").onclick = function () {
    
            if (miInput1.value.length >0 && miInput2.value.length >0 && miInput3.value.length > 0 && miInput4.checkValidity()&& miInput5.checkValidity() ){

 
                event.preventDefault(); // Evita el comportamiento predeterminado del envío del formulario
                console.log("Se está enviando la solicitud AJAX...");
                $("#resultado").empty();
                $("#resultado").addClass("estiloRecibiendo");
                $("#resultado").html("<h2>Esperando respuesta ..</h2>");
                $.ajax({
                type: "post",
                url: "./respuesta.php",
                data: {idUsuario: $("#idUsuario").val(),
                        login: $("#login").val(),
                        apellido: $("#apellido").val(),
                        nombres: $("#nombres").val(),
                        fechaNac: $("#fechaNac").val()},
                success: function(respuestaDelServer) {
                    $("#resultado").html("<h4>Resultado: </h4><h5>" + respuestaDelServer + "</h5>");
                            }
                        });
        }};
    });
      
</script>
</head>
<body>
    <div class="contenedor" id="contenedor">
        <p style="font-size: 20px;">Enviar un Json</p>
        <button type="submit" id="BotonM">Ventana Modal</button>
    </div>
    <div class="VentanaModal" id="contenido">
    <span class="cerrar" id="cerrarModal";">&times;</span>
        <div style="padding-left: 5%; height: 75%; ">
            <form action="javascript:void(0);" method="post">
                <br>
                <label for="idUsuario">Id Usuario:</label><br>
                <input type="text" id="idUsuario" name="idUsuario" required><br>
            
                <label for="login">Login:</label><br>
                <input type="text" id="login" name="login" required><br>
            
                <label for="apellidos">Apellidos:</label><br>
                <input type="text" id="apellido" name="apellido" required><br>

                <label for="nombres">Nombres:</label><br>
                <input type="text" id="nombres" name="nombres" required><br>

                <label for="fechaNac">Fecha de Nacimiento:</label><br><br>
                <input type="date" id="fechaNac" name="fechaNac" required>
                <br><br>
                <button id="Boton2">Enviar</button>
            </form>
        </div>
        <div id="resultado">
        </div>
    </div>
</body>

</html>
