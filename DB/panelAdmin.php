<?php
session_start();
?>
<html>
    <head>
        <title>Panel Administración</title>
    </head>
    <body>
        <h1>Opciones de administración</h1>
        <h5>Borrar usuario</h5>
        <form action="borrar.php" method="GET">
        <label for="id">Usuario para eliminar (ID):</label><br>
        <input type="id" name="id" id="id" placeholder="Ingresa el ID del usuario">  <br>
        <input type="submit" value="Borrar usuario">
        </form>
        <h5>Crear usuario</h5>
        <form action="crearUser.php" method="GET">
        <label for="id">Usuario (username):</label><br>
        <input type="user" name="user" id="user" placeholder="Ingresa el usuario">  <br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" name="password" id="password" placeholder="Ingresa la contraseña"><br>
        <label for="pin">Ingresa el PIN</label><br>
        <input type="password" name="pin" id="pin" placeholder="Ingresa el PIN:"><br>
        <input type="submit" value="Agregar Usuario"><br>
        </form>
        <form action="modificarUser.php" method="GET">
        <h5>Modificar contraseña usuario</h5>
        <label for="id">Usuario:</label><br>
        <input type="user" name="user" id="user" placeholder="Ingresa el usuario">  <br>
        <label for="contrasena">Nueva contraseña:</label><br>
        <input type="password" name="password" id="password" placeholder="Ingresa la contraseña"><br>
        <input type="submit" value="actualizar contraseña"><br>
        </form>
        <form action="visualizar.php" method="GET">
        <h5>Visualizar usuario</h5>
        <label for="id">ID Usuario:</label><br>
        <input type="user" name="id" id="id" placeholder="Ingresa el usuario">  <br>
        <input type="submit" value="Visualizar usuario"><br>
        </form>

    </body>
</html>