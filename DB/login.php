<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style-with-prefix.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            <div class="srouce">Toni Login</div>

            <div class="form-body">

                <form action="procesarDatos.php" method="GET" class="the-form">

                    <label for="user">Usuario</label>
                    <input type="user" name="user" id="user" placeholder="Ingresa tu usuario">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña">

                    <input type="submit" value="Iniciar sesión">

                </form>

            </div>

        </div>
    </div>

</body>
</html>