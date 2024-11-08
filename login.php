<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/css/login.css">
        <link rel=jpg href="../imagenes/images.jpg">
        <title>Inicio de Sesión - GPS</title>
    </head>
    <body>
        <main>
            <div class="login">
                <h2 class="inicioDeSesion">Inicio de Sesión</h2>

                <form onsubmit="return validarFormulario()">
                    <label>Email</label>
                    <input class="campoLabel" type="email" required placeholder="correo@ejemplo.com" id="email">

                    <label>Contraseña</label>
                    <input class="campoLabel" type="password" required placeholder="***********" id="contrasenia">

                    <a class="restauracion" href="passRes.php">¿Olvidó su contraseña?</a> <br>

                    <input class="campoEnviar" href="index.php"  type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </main>    

        <?php
            // conexion.php
            include 'conexion.php';
        ?>

        <script>
            function validarFormulario() {
                var usuario = document.getElementById('email').value;
                var contrasenia = document.getElementById('contrasenia').value;

                if (usuario === '' || contrasenia === '') {
                    alert('Por favor, completa todos los campos.');
                    return false;
                }

                alert('Inicio de Sesión Correcta');
                return true;
            }
        </script>

    </body>
</html>