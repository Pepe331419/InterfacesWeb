// SELECTORES

var botonesBorrar = document.querySelectorAll(".deleteEntry");
var botonesEditar = document.querySelectorAll('.editEntry');

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

// LOGICA EDITAR

botonesEditar.forEach(function (botonEditar) {
    botonEditar.addEventListener('click', function () {
        var fila = this.closest('tr');

        var fecha = fila.cells[0].textContent;
        var tipo = fila.cells[1].textContent;
        var horas = fila.cells[2].textContent;
        var actividad = fila.cells[3].textContent;
        var observaciones = fila.cells[4].textContent;

        var nuevaFecha = prompt('Editar Fecha:', fecha);
        var nuevoTipo = prompt('Editar Tipo:', tipo);
        var nuevasHoras = prompt('Editar Horas:', horas);
        var nuevaActividad = prompt('Editar Actividad:', actividad);
        var nuevasObservaciones = prompt('Editar Observaciones:', observaciones);

        fila.cells[0].textContent = nuevaFecha;
        fila.cells[1].textContent = nuevoTipo;
        fila.cells[2].textContent = nuevasHoras;
        fila.cells[3].textContent = nuevaActividad;
        fila.cells[4].textContent = nuevasObservaciones;
    });
});
