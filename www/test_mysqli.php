<?php
echo "<h2>🧪 Prueba de MySQLi y Conexión a Base de Datos</h2>";

// 1. Verificar si MySQLi está instalado
echo "<h3>1. Verificación de extensión MySQLi:</h3>";
if (extension_loaded('mysqli')) {
    echo "✅ <span style='color: green;'><b>MySQLi está instalado correctamente</b></span><br>";
} else {
    echo "❌ <span style='color: red;'><b>MySQLi NO está instalado</b></span><br>";
    echo "Se necesita instalar la extensión MySQLi para continuar.";
    exit;
}

// 2. Verificar la conexión a la base de datos
echo "<h3>2. Verificación de conexión a base de datos:</h3>";
$host = "db";
$user = "usuario";
$pass = "contrasena";
$dbname = "login";

echo "Intentando conectar a:<br>";
echo "- Host: " . $host . "<br>";
echo "- Usuario: " . $user . "<br>";
echo "- Base de datos: " . $dbname . "<br><br>";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    echo "❌ <span style='color: red;'><b>Error de conexión:</b> " . $conn->connect_error . "</span><br>";
    echo "Posibles soluciones:<br>";
    echo "1. Verificar que el contenedor de MySQL esté corriendo<br>";
    echo "2. Verificar las credenciales en conexion.php<br>";
    echo "3. Verificar que la base de datos 'login' exista<br>";
} else {
    echo "✅ <span style='color: green;'><b>Conexión a la base de datos EXITOSA</b></span><br>";
    
    // 3. Verificar si la tabla usuarios existe
    echo "<h3>3. Verificación de tabla 'usuarios':</h3>";
    $result = $conn->query("SHOW TABLES LIKE 'usuarios'");
    if ($result->num_rows > 0) {
        echo "✅ <span style='color: green;'><b>Tabla 'usuarios' encontrada</b></span><br>";
        
        // Mostrar estructura de la tabla
        echo "<h4>Estructura de la tabla usuarios:</h4>";
        $structure = $conn->query("DESCRIBE usuarios");
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr style='background-color: #f2f2f2;'><th>Campo</th><th>Tipo</th><th>Nulo</th><th>Key</th><th>Default</th><th>Extra</th></tr>";
        while ($row = $structure->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Field'] . "</td>";
            echo "<td>" . $row['Type'] . "</td>";
            echo "<td>" . $row['Null'] . "</td>";
            echo "<td>" . $row['Key'] . "</td>";
            echo "<td>" . $row['Default'] . "</td>";
            echo "<td>" . $row['Extra'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "❌ <span style='color: red;'><b>Tabla 'usuarios' NO encontrada</b></span><br>";
        echo "Necesitas crear la tabla en la base de datos.";
    }
    
    $conn->close();
}

echo "<br><hr>";
echo "<h3>📊 Resumen del Sistema:</h3>";
echo "<ul>";
echo "<li>PHP Version: " . phpversion() . "</li>";
echo "<li>Extensiones cargadas: " . implode(", ", get_loaded_extensions()) . "</li>";
echo "</ul>";

echo "<br><a href='registro.php'>Ir al Registro</a> | ";
echo "<a href='login.php'>Ir al Login</a>";
?>