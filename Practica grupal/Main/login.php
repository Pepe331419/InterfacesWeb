<?php require("views/parts/head.php"); ?>

<body>

    <header id="main">
        <img src="static\img\Logo App EDual.png" alt="Logotipo EDual">
    </header>

    <main>
        <div id="login">
            <form action="procesar_login.php" method="post">
                <fieldset>
                    <label for="user">Nombre de usuario:</label>
                    <input type="text" name="user" id="user">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Acceder" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </main>

    


    <?php require("views/footer.php"); ?>


</body>
<footer>

</footer>
</html>