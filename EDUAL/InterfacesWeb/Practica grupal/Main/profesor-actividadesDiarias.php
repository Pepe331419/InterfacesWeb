<?php require("views/parts/head.php"); ?>
<?php require("views/header-profesor.php"); ?>
    
    <main id="content">
        <h1>Actividades diarias</h1>
        <form action="#">
            <select name="student" id="studentSelector">
                <option value="" disable selected hidden>Elige un alumno</option>
                <option value="0011223344Z">Maribel Castro</option>
                <option value="1122334455Y">Cristian Tirado</option>
                <option value="2233445566X">Carlos Manuel Trigo</option>
                <option value="3344556677W">Sonia Robledo</option>
                <option value="4455667788V">Yolanda Simón</option>
            </select>
        </form>

        <div id="hoursCounter">
            <h2>-/- horas Dual</h2>
            <h2>-/- horas FCT</h2>
        </div>

        <table id="dailies">
            <colgroup>
                <col id="date">
                <col id="type"/>
                <col id="hours"/>
                <col id="activities"/>
                <col id="observations"/>
            </colgroup>
            <tr>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Horas</th>
                <th>Actividad realizada</th>
                <th>Observaciones</th>
            </tr>
            <tr>
                <td>15/11/2023</td>
                <td>Dual</td>
                <td>8</td>
                <td>Curso de introducción</td>
                <td></td>
            </tr>
            <tr>
                <td>16/11/2023</td>
                <td>Dual</td>
                <td>7</td>
                <td>Desarrollo en Python</td>
                <td>Entrada 1 hora más tarde por motivos médicos.</td>
            </tr>
            <tr>
                <td>17/11/2023</td>
                <td>Dual</td>
                <td>8</td>
                <td>Desarrollo en Python</td>
                <td></td>
            </tr>
            <tr>
                <td>18/11/2023</td>
                <td>Dual</td>
                <td>9</td>
                <td>Desarrollo en Python</td>
                <td>Recuperación de hora perdida.</td>
            </tr>
            <tr>
                <td>19/11/2023</td>
                <td>Dual</td>
                <td>8</td>
                <td>Revisión de código</td>
                <td>Se han detectado puntos de mejora.</td>
            </tr>
        </table>
    </main>


    <?php require("views/footer.php"); ?>