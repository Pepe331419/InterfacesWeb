<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Seleccionar alumno</h1>

    <form id="chooseModified" action="#">
            <select name="student" id="studentSelector">
                <option value="" disable hidden>Elige una empresa</option>
                <option value="ACCENTURE">Accenture</option>
                <option value="AVANADE" selected>Avanade</option>
                <option value="NTTDATA">NTT Data</option>
                <option value="VIEWNEXT">ViewNext</option>
                <option value="YOPONGOELHIELO">Yo pongo el hielo</option>
            </select>
        </form>

    <form class="addOrModify" action="#" method="post">
        <!-- Añadir a los formularios las limitaciones de tamaño y restricciones correspondientes-->

        <div>
            <label for="modifyCompanyName">Nombre:</label>
            <input type="text" id="modifyCompanyName" value="Avanade">
        </div>

        <div>
            <label for="modifyCompanyPhone">Teléfono</label>
            <input type="text" id="modifyCompanyPhone" value="952012345">
        </div>

        <div>
            <label for="modifyCompanyEmail">Email:</label>
            <input type="email" id="modifyCompanyEmail" value="cmperez@avanade.com">
        </div>

        <div>
            <label for="modifyCompanyResponsible">Tutor:</label>
            <input type="text" id="modifyCompanyResponsible" value="Carlos Manuel Pérez">
        </div>

        <div>
            <label for="addCompanyObservations">Observaciones:</label>
            <textarea id="addCompanyObservations" cols="30" rows="10">Horario teléfono de contacto: 08:00-17:00</textarea>
        </div>

        <input type="submit" value="Modificar">
    </form>
</main>

<?php require("views/footer.php"); ?>