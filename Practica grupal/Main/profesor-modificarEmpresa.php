<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Seleccionar empresa</h1>

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

    <form id="addOrModify" action="#" method="post">
        <div class="labels">
            <label for="modifyCompanyName">Nombre:</label>
            <label for="modifyCompanyPhone">Teléfono</label>
            <label for="modifyCompanyEmail">Email:</label>
            <label for="modifyCompanyResponsible">Tutor:</label>
            <label for="addCompanyObservations">Observaciones:</label>
        </div>
        
        <div class="inputs">
            <input type="text" id="modifyCompanyName" value="Avanade">
            <input type="text" id="modifyCompanyPhone" value="952012345">
            <input type="email" id="modifyCompanyEmail" value="cmperez@avanade.com">
            <input type="text" id="modifyCompanyResponsible" value="Carlos Manuel Pérez">
            <textarea id="addCompanyObservations" cols="30" rows="10">Horario teléfono de contacto: 08:00-17:00</textarea>
        </div>
    </form>

    <input type="submit" value="Modificar" form="addOrModify" id="submitAddOrModify">
</main>

<?php require("views/footer.php"); ?>