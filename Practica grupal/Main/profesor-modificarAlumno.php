<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Seleccionar alumno</h1>

    <form id="chooseModified" action="#">
        <select name="student" id="studentSelector">
            <option value="" disable selected hidden>Elige un alumno</option>
            <option value="0011223344Z">Maribel Castro</option>
            <option value="1122334455Y">Cristian Tirado</option>
            <option value="2233445566X">Carlos Manuel Trigo</option>
            <option value="3344556677W">Sonia Robledo</option>
            <option value="4455667788V">Yolanda Simón</option>
        </select>
    </form>

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
            <input type="text" id="modifyName" value="Maribel">
            <input type="text" id="modifyLastName" value="Castro">
            <input type="password" id="modifyPassword" value="patata34">
            <input type="text" id="modifyDni" value="11223344Z">
            <input type="date" id="modifyBirthdate" value="2000-03-15">
            <input type="email" id="modifyEmail" value="mcastro@cesurformacion.com">
            <input type="text" id="modifyPhone" value="589632145">
            <select id="modifyCompany">
                <option value="ACCENTURE">Accenture</option>
                <option value="AVANADE">Avanade</option>
                <option value="NTTDATA" selected>NTT Data</option>
                <option value="VIEWNEXT">ViewNext</option>
                <option value="YOPONGOELHIELO">Yo pongo el hielo</option>
            </select>
            <input type="text" name="tutor" id="tutor" value="Antonio Bernabé Arellano" disabled>
            <input type="number" id="modifyHoursDual" value="120">
            <input type="number" id="modifyHoursFCT" value="120">
            <textarea id="addObservations" cols="30" rows="10">Justificante médico del día 18/11/2023 pendiente.</textarea>
        </div>
    </form>
    <input type="submit" value="Modificar" form="addOrModify" id="submitAddOrModify">
    <button>Eliminar alumno</button>
</main>

<?php require("views/footer.php"); ?>