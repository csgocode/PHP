<?php
session_start();
function sanitizar($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
}
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

            <div class="srouce">Toni Registro</div>

            <div class="form-body">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">

                    <label for="nombre">Nombre</label><br>
                    <input type="nombre" name="nombre" id="nombre" placeholder="Ingresa tu nombre"><br>

                    <br><label for="correo">Correo</label><br>
                    <input type="email" name="correo" id="correo" placeholder="Ingresa tu Correo"><br>
                    <br>
                    <select name="estudios" id="estudios">
                        <option value="Bachillerato">Bachillerato</option>
                        <option value="Grado medio">Grado medio</option>
                    </select><br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>"><br>
                    <label for="correo">Subida de AVATAR</label><br>
                    <input type="file" name="imagen" /><br><br>
                    <input type="submit" value="Registro">
                </form>

            </div>

        </div>
    </div>

</body>
</html>