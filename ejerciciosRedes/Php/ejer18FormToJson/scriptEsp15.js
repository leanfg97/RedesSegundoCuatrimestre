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

});