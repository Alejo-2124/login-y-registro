<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="contenedor">
        <h1>Iniciar sesión</h1>
        <br>
        <form action="">

            <label for="">
                <img width="18px" src="ICONS/users.svg" alt="">
                Correo electrónico:
            </label>
            <input 
                type="email" 
                placeholder="Ingrese su correo electrónico"
            >

            <label for="">
                <img width="18px" src="ICONS/lock.svg" alt="">
                Contraseña:
            </label>
            <input 
                type="password" 
                placeholder="Ingrese su contraseña"
            >
            
            <input 
                type="submit" 
                class="button" 
                value="Ingresar"
            >

            <div class="contenedor-enlace">
                <p class="texto-enlace">¿no tienes una cuenta?
                    <a href="registro.php" class="enlace-registro">Regístrate aquí</a>
                </p>
            </div>
        
        </form>
    </div>
</body>
</html>