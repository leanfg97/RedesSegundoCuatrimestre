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

    var textoClaseProductos = '{"productos":[{"idProducto":"P01","descrProd":"Oleaginosa"},{"idProducto":"P02","descrProd":"Cereal"},{"idProducto":"P03","descrProd":"Ganado"},{"idProducto":"P04","descrProd":"Alimento"}]}';
 
    objJson=JSON.parse(textoClaseProductos);

    function crearOpciones() {

        
        objJson.productos.forEach(function(argValor,argIndice) {
        
            var objOpcion= document.createElement("option");
            //objOpcion.setAttribute("className","elementoOptionSelect");
            objOpcion.setAttribute("value",argValor.idProducto);
            objOpcion.innerHTML = argValor.descrProd;
            document.getElementById("formArticulosUm").appendChild(objOpcion);

 
        });
    }
    var menuElement = document.getElementById('formArticuloUm');
            crearOpciones(objJson, menuElement);

    document.getElementById("Boton2").onclick= function() {            
    
    var confirma = confirm("Esta seguro de enviar"); 
    
    if (confirma=true){

        document.getElementById("miForm").method ="get";              
        document.getElementById("miForm").action ="./respuestaFormulario.html";
        document.getElementById("miForm").submit();
        }
    }
});