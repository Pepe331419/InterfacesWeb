<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Mis alumnos</h1>
    <table id="students">
        <tr>
            <td><a href="#">Maribel Castro</a></td>
        </tr>
        <tr>
            <td><a href="#">Cristian Tirado</a></td>
        </tr>
        <tr>
            <td><a href="#">Carlos Manuel Trigo</a></td>
        </tr>
        <tr>
            <td><a href="#">Sonia Robledo</a></td>
        </tr>
        <tr>
            <td><a href="#">Yolanda Simón</a></td>
        </tr>
    </table>

    <h1>Datos</h1>
    <table id="info">
        <tr>
            <td>Nombre:</td>
            <td id="tName"></td>
        </tr>
        <tr>
            <td>DNI:</td>
            <td id="tDNI"></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento:</td>
            <td id="tDate"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td id="tMail"></td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td id="tPhone"></td>
        </tr>
        <tr>
            <td>Empresa:</td>
            <td id="tCompany"></td>
        </tr>
        <tr>
            <td>Horas cursadas dual:</td>
            <td id="tCurrentDual"></td>
        </tr>
        <tr>
            <td>Horas totales dual:</td>
            <td id="tTotalDual"></td>
        </tr>
        <tr>
            <td>Horas cursadas FCT:</td>
            <td id="tCurrentFCT"></td>
        </tr>
        <tr>
            <td>Horas totales FCT:</td>
            <td id="tTotalFCT"></td>
        </tr>
        <tr>
            <td>Observaciones:</td>
            <td id="tObservations"></td>
        </tr>
    </table>

    <a href="profesor-actividadesDiarias.php">
        <h2>Ver actividades diarias</h2>
    </a>

</main>


<?php require("views/footer.php"); ?>