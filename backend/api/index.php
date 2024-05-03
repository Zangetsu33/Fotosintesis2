<?php
// Configuración de la base de datos
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'login';

// Conexión a la base de datos
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Manejar las solicitudes API
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener todas las tareas
    if ($_GET['action'] === 'getAllTasks') {
        $sql = "SELECT * FROM personas";
        $result = $conn->query($sql);
        $tasks = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tasks[] = $row;
            }
        }
        echo json_encode($tasks);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Agregar una nueva tarea
    if ($_GET['action'] === 'addTask') {
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['ID'];
        $cedula = $data['Cedula'];
        $nombre = $data['Nombre'];
        $apellido = $data['Apellido'];
        $cargo = $data['Cargo'];
        $fechaInicio = $data['Fecha y hora de Entada'];
        $fechaSalida = $data['Fecha y hora de Salida'];
        $sql = "INSERT INTO personas (ID, Cedula, Nombre, Apellido, Cargo, Fecha y hora de Entrada, Fecha y hora de Salida) VALUES ('$id', '$cedula', '$nombre', '$apellido', '$cargo', '$fechaInicio', '$fechaSalida')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>