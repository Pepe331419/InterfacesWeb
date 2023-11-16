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

    <form class="addOrModify" action="#" method="post">
        <!-- Añadir a los formularios las limitaciones de tamaño y restricciones correspondientes-->

        <div>
            <label for="modifyName">Nombre:</label>
            <input type="text" id="modifyName" value="Maribel">
        </div>

        <div>
            <label for="modifyLastName">Apellido:</label>
            <input type="text" id="modifyLastName" value="Castro">
        </div>

        <div>
            <label for="modifyPassword">Contraseña:</label>
            <input type="password" id="modifyPassword" value="patata34">
        </div>

        <div>
            <label for="modifyDni">DNI:</label>
            <input type="text" id="modifyDni" value="11223344Z">
        </div>

        <div>
            <label for="modifyBirthdate">Fecha de nacimiento:</label>
            <input type="date" id="modifyBirthdate" value="2000-03-15">
        </div>

        <div>
            <label for="modifyEmail">Email:</label>
            <input type="email" id="modifyEmail" value="mcastro@cesurformacion.com">
        </div>

        <div>
            <label for="modifyPhone">Teléfono</label>
            <input type="text" id="modifyPhone" value="589632145">
        </div>

        <div>
            <label for="modifyCompany">Empresa:</label>
            <select id="modifyCompany">
                <option value="ACCENTURE">Accenture</option>
                <option value="AVANADE">Avanade</option>
                <option value="NTTDATA" selected>NTT Data</option>
                <option value="VIEWNEXT">ViewNext</option>
                <option value="YOPONGOELHIELO">Yo pongo el hielo</option>
            </select>
        </div>

        <div>
            <label for="tutor">Tutor:</label>
            <input type="text" name="tutor" id="tutor" value="Antonio Bernabé Arellano" disabled>
        </div>

        <div>
            <label for="modifyHoursDual">Nº horas Dual:</label>
            <input type="number" id="modifyHoursDual" value="120">
        </div>

        <div>
            <label for="modifyHoursFCT">Nº horas FCT:</label>
            <input type="number" id="modifyHoursFCT" value="120">
        </div>

        <div>
            <label for="addObservations">Observaciones:</label>
            <textarea id="addObservations" cols="30" rows="10">Justificante médico del día 18/11/2023 pendiente.</textarea>
        </div>

        <input type="submit" value="Modificar">
    </form>
</main>

<?php require("views/footer.php"); ?>