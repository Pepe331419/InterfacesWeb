<?php require("views/parts/head.php"); ?>
<?php require("views/header-alumno.php"); ?>

<main id="content">

    <h1>Mis actividades diarias</h1>


    <h2>Añadir actividad</h2>
    <form action="#" class="newActivity">
        <div>
            <label for="activityDate">Fecha</label>
            <input type="date" id="activityDate">
        </div>
        <div>
            <label for="">Tipo</label>
            <div>
                <input type="radio" name="type" id="typeDual" value="dual">
                <label for="typeDual">Dual</label>
            </div>
            <div>
                <input type="radio" name="type" id="typeFCT" value="fct">
                <label for="typeFCT">FCT</label>
            </div>
        </div>
        <div>
            <label for="activityHours">Horas</label>
            <input type="number" id="activityHours">
        </div>
        <div>
            <label for="activityDescription">Actividad realizada</label>
            <input type="text" id="activityDescription">
        </div>
        <div>
            <label for="activityObservations">Observaciones</label>
            <textarea id="activityObservations" cols="30" rows="1"></textarea>
        </div>
        <div>
            <input type="submit" value="Añadir" class="submit">
        </div>

    </form>


    <h2>Mi historial de actividades</h2>
    <table id="dailies">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Horas</th>
                <th>Actividad realizada</th>
                <th>Observaciones</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>15/11/2023</td>
                <td>Dual</td>
                <td>8</td>
                <td>Curso de introducción</td>
                <td></td>
                <td class="editEntry">
                    <a><img src="static/img/edit.png" alt="Editar entrada"></a>
                </td>
                <td class="deleteEntry">
                    <a><img src="static/img/delete.png" alt="Eliminar entrada"></a>
                </td>
            </tr>
            <tr>
                <td>17/11/2023</td>
                <td>Dual</td>
                <td>8</td>
                <td>Desarrollo en Python</td>
                <td></td>
                <td class="editEntry">
                    <a><img src="static/img/edit.png" alt="Editar entrada"></a>
                </td>
                <td class="deleteEntry">
                    <a><img src="static/img/delete.png" alt="Eliminar entrada"></a>
                </td>
            </tr>
            <tr>
                <td>18/11/2023</td>
                <td>Dual</td>
                <td>9</td>
                <td>Desarrollo en Python</td>
                <td>Recuperación de hora perdida.</td>
                <td class="editEntry">
                    <a><img src="static/img/edit.png" alt="Editar entrada"></a>
                </td>
                <td class="deleteEntry">
                    <a><img src="static/img/delete.png" alt="Eliminar entrada"></a>
                </td>
            </tr>
            <tr>
                <td>19/11/2023</td>
                <td>Dual</td>
                <td>8</td>
                <td>Revisión de código</td>
                <td>Se han detectado puntos de mejora.</td>
                <td class="editEntry">
                    <a><img src="static/img/edit.png" alt="Editar entrada"></a>
                </td>
                <td class="deleteEntry">
                    <a><img src="static/img/delete.png" alt="Eliminar entrada"></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div id="editModal">
        <form class="editActivity">
            <h2>Editar Actividad</h2>
            <label>Fecha</label>
            <input type="date">
            <label>Tipo</label>
            <input type="text">
            <label>Horas</label>
            <input type="number">
            <label>Actividad realizada</label>
            <textarea></textarea>
            <label>Observaciones</label>
            <textarea></textarea>
            <button type="button" class="submit" id="saveChanges">Guardar</button>
        </form>
    </div>
</main>

<?php require("views/footer.php"); ?>