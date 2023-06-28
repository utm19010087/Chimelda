<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Pagina de control escolar de Lalo">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login</title>
</head>
<body>
    
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    <h1 class="texto">Inici<span class="span">ar Ses</span>ion</h1>
                </div>
                <from class="login-form">
                    <div class="log-gampo">
                        <input type="text" name="user" placeholder="Usuario" required >
                    </div>
                    <div class="log-campo">
                        <input type="password" name="password" placeholder="Contraseña" required >
                    </div>

                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </from>
                <div class="pie-form">
                    <a href="#">Perdiste tu contraseña</a>
                    <a href="#">Crear una cuenta nueva</a>
                </div>
            </div>
            <div class="inf">
                <a href="principal.php">Regresar</a>
            </div>
        </div>
    </div>

</body>
</html>