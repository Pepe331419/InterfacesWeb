<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>

<main id="content">
    <h1>Añadir empresa</h1>
    <form class="addOrModify" action="#" method="post">
        <!-- Añadir a los formularios las limitaciones de tamaño y restricciones correspondientes-->

        <div>
            <label for="addCompanyName">Nombre:</label>
            <input type="text" id="addCompanyName">
        </div>

        <div>
            <label for="addCompanyPhone">Teléfono</label>
            <input type="text" id="addCompanyPhone">
        </div>

        <div>
            <label for="addCompanyEmail">Email:</label>
            <input type="email" id="addCompanyEmail">
        </div>

        <div>
            <label for="addCompanyObservations">Observaciones:</label>
            <textarea id="addCompanyObservations" cols="31" rows="10"></textarea>
        </div>

        <input type="submit" value="Añadir">
    </form>
</main>

<?php require("views/footer.php"); ?>