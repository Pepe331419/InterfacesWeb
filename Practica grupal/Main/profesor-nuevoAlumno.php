<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Añadir alumno</h1>

    <form id="addOrModify" action="#" method="post">
        <div class="labels">
            <label for="modifyName">Nombre:</label>
            <label for="modifyLastName">Apellido:</label>
            <label for="modifyPassword">Contraseña:</label>
            <label for="modifyDni">DNI:</label>
            <label for="modifyBirthdate">Fecha de nacimiento:</label>
            <label for="modifyEmail">Email:</label>
            <label for="modifyPhone">Teléfono</label>
            <label for="modifyCompany">Empresa:</label>
            <label for="tutor">Tutor:</label>
            <label for="modifyHoursDual">Nº horas Dual:</label>
            <label for="modifyHoursFCT">Nº horas FCT:</label>
            <label for="addObservations">Observaciones:</label>
        </div>
        <div class="inputs">
            <input type="text" id="modifyName">
            <input type="text" id="modifyLastName">
            <input type="password" id="modifyPassword">
            <input type="text" id="modifyDni">
            <input type="date" id="modifyBirthdate">
            <input type="email" id="modifyEmail">
            <input type="text" id="modifyPhone">
            <select id="modifyCompany">
                <option value="" selected hidden>Elige una empresa</option>
                <option value="ACCENTURE">Accenture</option>
                <option value="AVANADE">Avanade</option>
                <option value="NTTDATA">NTT Data</option>
                <option value="VIEWNEXT">ViewNext</option>
                <option value="YOPONGOELHIELO">Yo pongo el hielo</option>
            </select>
            <input type="text" name="tutor" id="tutor" value="Antonio Bernabé Arellano" disabled>
            <input type="number" id="modifyHoursDual">
            <input type="number" id="modifyHoursFCT">
            <textarea id="addObservations" cols="30" rows="10"></textarea>
        </div>
    </form>
    <input type="submit" value="Modificar" form="addOrModify" id="submitAddOrModify">
</main>

<?php require("views/footer.php"); ?>