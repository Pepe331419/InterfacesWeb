<?php require("views/parts/head.php"); ?>

<body>

    <header id="main">
        <img src="https://picsum.photos/250/75" alt="Logotipo EDual">
    </header>

    <main>
        <div id="login">
            <form action="" method="post">
                <fieldset>
                    <label for="user">Nombre de usuario:</label>
                    <input type="text" name="user" id="user">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Acceder" id="submit">
                </fieldset>
            </form>
        </div>
    </main>

    <?php require("views/footer.php"); ?>
</body>

</html>