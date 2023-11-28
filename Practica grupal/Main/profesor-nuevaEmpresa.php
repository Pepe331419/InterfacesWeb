<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Añadir empresa</h1>

    <form id="addOrModify" action="#" method="post">
        <div class="labels">
            <label for="modifyCompanyName">Nombre:</label>
            <label for="modifyCompanyPhone">Teléfono</label>
            <label for="modifyCompanyEmail">Email:</label>
            <label for="addCompanyObservations">Observaciones:</label>
        </div>
        
        <div class="inputs">
            <input type="text" id="modifyCompanyName">
            <input type="text" id="modifyCompanyPhone">
            <input type="email" id="modifyCompanyEmail">
            <textarea id="addCompanyObservations" cols="30" rows="10"></textarea>
        </div>
    </form>

    <input type="submit" value="Añadir" form="addOrModify" id="submitAddOrModify">
</main>

<?php require("views/footer.php"); ?>