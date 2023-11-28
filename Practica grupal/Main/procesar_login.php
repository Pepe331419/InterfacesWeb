<?php

$usuarios_registrados = [
    'profesor@cesurformacion.com' => '1234',
    'alumno@cesurformacion.com' => '5678',
];


function validarFormulario() {
    global $usuarios_registrados;

    if (isset($_POST['submit'])) {
        $usuario = $_POST['user'] ?? '';
        $contrasena = $_POST['password'] ?? '';

        foreach ($usuarios_registrados as $usuario_valido => $contraseña_valida) {
            if ($usuario === $usuario_valido && $contrasena === $contraseña_valida) {
                if ($usuario == 'profesor@cesurformacion.com') {
                    header('Location: profesor-misAlumnos.php');
                } elseif ($usuario == 'alumno@cesurformacion.com') {
                    header('Location: alumno-misDatos.php');
                }
                exit();
            }
        }

        header('Location: login.php');
        exit();
    }
}
validarFormulario();
?>