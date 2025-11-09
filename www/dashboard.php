<?php include 'config.php'; ?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="contenedor">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
        <p>Email: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
        <br>
        <a href="logout.php" class="button">Cerrar Sesión</a>
    </div>
</body>
</html>