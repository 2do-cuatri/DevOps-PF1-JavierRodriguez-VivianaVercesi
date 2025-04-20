<?php
// Leer el cuerpo del request
$rawData = file_get_contents("php://input");
// Decodificar JSON
$data = json_decode($rawData, true);

// Hardcodeo para validación
$validUsername = "admin";
$validPassword = "1234";

// Verificar que llegaron los campos esperados
if (isset($data['username']) && isset($data['password'])) {
    $username = $data['username'];
    $password = $data['password'];

// Devolver respuesta al frontend
    if ($username === $validUsername && $password === $validPassword) {
        echo json_encode(["status" => "OK"]);
    } else {
        echo json_encode(["status" => "ERROR: Usuario o contraseña incorrectos"]);
    }    
} else {
    echo json_encode(["status" => "ERROR: Faltan datos"]);
}
?>
