<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/pass.css">
    <title>Restauración de Password</title>
</head>
    <body>
        <main>
            <div class="restauracion">
                <h2>Restauración de Password</h2>

                <p>
                    Ingresa la dirección de correo electrónico que usas para GPS, y te enviaremos un enlace para 
                    restablecer la contraseña.
                </p>

                <form action="procesar.php" method="POST">
                    <label class="campoLabel" for="email">Ingrese el correo electrónico</label>
                    <input class="campoLabelPass" type="email" placeholder="correo@ejemplo.com" id="email" name="email" required> 
                    <input class="campoEnviar" type="submit" value="Restablecer">
                </form>
            </div>
        </main>
        
        <?php
            // conexión a la base de datos
            include 'conexion.php';
        ?>

    </body>
</html>
