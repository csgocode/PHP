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

            <div class="srouce">Toni Registro</div>

            <div class="form-body">

            <form action="registroProcess.php" method="POST" enctype="multipart/form-data">

                    <label for="nombre">Nombre</label><br>
                    <input required type="nombre" name="nombre" id="nombre" placeholder="Ingresa tu nombre"><br>

                    <br><label for="correo">Usuario</label><br>
                    <input required type="user" name="user" id="user" placeholder="Ingresa tu usuario"><br>

                    <br><label for="correo">Contraseña</label><br>
                    <input required type="password" name="pass1" id="pass1" placeholder="Ingresa tu contraseña"><br>
                    <br><label for="correo">Confirmar contraseña</label><br>
                    <input required type="password" name="pass2" id="pass2" placeholder="Confirma tu contraseña"><br>

                    <br><label for="pin">PIN</label><br>
                    <input required type="password" name="pin" id="pin" placeholder="PIN de Seguridad"><br>

                    <br><label for="correo">Correo</label><br>
                    <input required type="email" name="correo" id="correo" placeholder="Ingresa tu Correo"><br>
                    
                    <br>
                    <select name="estudios" id="estudios">
                        <option value="Bachillerato">Bachillerato</option>
                        <option value="Grado medio">Grado medio</option>
                    </select><br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>"><br>
                    <label for="correo">Subida de AVATAR</label><br>
                    <input required type="file" name="imagen" /><br><br>
                    <input type="submit" value="Registro">
                </form>

            </div>

        </div>
    </div>

</body>
</html>