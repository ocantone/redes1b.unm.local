<?php
// Datos de conexión
$servername = "db";
$username = "osvaldo";
$password = "chiti5678";
$dbname = "datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar datos
$sql = "SELECT * FROM tablaDatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar datos
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Valor</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
