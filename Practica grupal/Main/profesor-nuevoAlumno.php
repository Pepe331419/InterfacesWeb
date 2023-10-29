<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Añadir alumno</h1>
    <form class="addOrModify" action="#" method="post">
        <!-- Añadir a los formularios las limitaciones de tamaño y restricciones correspondientes-->

        <div>
            <label for="addName">Nombre:</label>
            <input type="text" id="addName">
        </div>
        <div>
            <label for="addLastName">Apellido:</label>
            <input type="text" id="addLastName">
        </div>
        <div>
            <label for="addPassword">Contraseña:</label>
            <input type="password" id="addPassword">
        </div>
        <div>
            <label for="addDni">DNI:</label>
            <input type="text" id="addDni">
        </div>
        <div>
            <label for="addBirthdate">Fecha de nacimiento:</label>
            <input type="date" id="addBirthdate">
        </div>
        <div>
            <label for="addEmail">Email:</label>
            <input type="email" id="addEmail">
        </div>
        <div>
            <label for="addPhone">Teléfono</label>
            <input type="text" id="addPhone">
        </div>
        <div>
            <label for="selectCompany">Empresa:</label>
            <select id="selectCompany">
                <option value="" disable selected hidden>Seleccione una empresa</option>
                <option value="ACCENTURE">Accenture</option>
                <option value="AVANADE">Avanade</option>
                <option value="NTTDATA">NTT Data</option>
                <option value="VIEWNEXT">ViewNext</option>
                <option value="YOPONGOELHIELO">Yo pongo el hielo</option>
            </select>
        </div>
        <div>
            <label for="tutor">Tutor:</label>
            <input type="text" name="tutor" id="tutor" value="Antonio Bernabé Arellano" disabled>
        </div>
        <div>
            <label for="addHoursDual">Nº horas Dual:</label>
            <input type="number" id="addHoursDual">
        </div>
        <div>
            <label for="addHoursFCT">Nº horas FCT:</label>
            <input type="number" id="addHoursFCT">
        </div>
        <div>
            <label for="addObservations">Observaciones:</label>
            <textarea id="addObservations" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Añadir">
    </form>
</main>

<?php require("views/footer.php"); ?>