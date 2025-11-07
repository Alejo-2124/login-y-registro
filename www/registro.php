<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body>
    <div class="contenedor">
        <h1>Registrarse</h1>
        <br>
        <form action="">
            <label for="">
                <img width="18px" src="ICONS/users.svg" alt="">
                Nombre:
            </label>
            <input type="text" placeholder="Ingrese su nombre">

            <label for="">
                <img width="18px" src="ICONS/users.svg" alt="">
                Apellido:
            </label>
            <input type="text" placeholder="Ingrese su apellido">    

            <label for="">
                <img width="18px" src="ICONS/mail.svg" alt="">
                Correo electrónico:
            </label>
            <input type="email" placeholder="Ingrese su correo electrónico">
            
            
            <label for="">
                <img width="18px" src="ICONS/phone.svg" alt="">
                Número de teléfono:
            </label>
            <input type="phone" placeholder="Ingrese su número telefónico">

            <input type="submit" class="button" value="Registrarse">

            <div class="contenedor-enlace">
                <p class="texto-enlace"> ¿Ya estás registrado?
                    <a href="login.php" class="enlace-registro">Inicia Sesión aquí</a>
                </p>
            </div>   
            
        </form>
    </div>
</body>
</html>