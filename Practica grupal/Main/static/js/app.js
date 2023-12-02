// SELECTORES

var botonesBorrar = document.querySelectorAll(".deleteEntry");
var editModal = document.getElementById('editModal');
var botonesEditar = document.querySelectorAll('.editEntry');
var botonGuardar = document.getElementById('saveChanges');

// LOGICA BORRAR 

botonesBorrar.forEach(function (botonBorrar) {
    botonBorrar.addEventListener('click', function () {
        var confirmacion = confirm("¿Estás seguro de que deseas borrar el registro?");
        if (confirmacion) {
            alert("Registro borrado exitosamente");
        } else {
            alert("Acción de borrado cancelada");
        }
    });
});


// CAMBIO DE ESTILO PARA VER EL MODAL EDICION ACTIVIDADES

function toggleEditModal() {
    if (editModal.style.display === 'none') {
        editModal.style.display = 'block';
    } else {
        editModal.style.display = 'none';
    }
}


botonesEditar.forEach(function (botonEditar) {
    botonEditar.addEventListener('click', toggleEditModal);
});

botonGuardar.addEventListener('click', function () {
    toggleEditModal();
});