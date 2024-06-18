<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'tiendaDemo');

// Verificar conexión
if ($conexion->connect_error) {
    echo json_encode(['success' => false, 'message' => "Conexión fallida: " . $conexion->connect_error]);
    exit();
}

// Recibir y procesar datos del formulario
$nombre = $_POST['nombre_completo'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$productos = json_decode($_POST['productos'], true); // Decodificar productos como un array asociativo
$total = $_POST['total'];

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['success' => false, 'message' => "Error al decodificar JSON: " . json_last_error_msg()]);
    exit();
}

// Verificar que los productos tengan la estructura correcta
foreach ($productos as $producto) {
    if (!isset($producto['id']) || !isset($producto['precio']) || !isset($producto['cantidad'])) {
        echo json_encode(['success' => false, 'message' => "Datos del producto incompletos"]);
        exit();
    }
}

// Recibir el total del pedido desde el formulario
$total = $_POST['total'];

// Insertar cliente
$sqlCliente = "INSERT INTO clientes (nombre_completo, correo, telefono, direccion) VALUES (?, ?, ?, ?)";
if ($stmt = $conexion->prepare($sqlCliente)) {
    $stmt->bind_param("ssss", $nombre, $email, $telefono, $direccion); // El orden correcto
    if (!$stmt->execute()) {
        echo json_encode(['success' => false, 'message' => "Error al insertar cliente"]);
        exit();
    }
    $idCliente = $stmt->insert_id;
} else {
    echo json_encode(['success' => false, 'message' => "Error al preparar inserción de cliente"]);
    exit();
}

// Insertar pedido, utilizando el valor de $total obtenido del formulario
$fecha = date('Y-m-d');
$sqlPedido = "INSERT INTO pedidos (fecha, total, id_cliente) VALUES (?, ?, ?)";
if ($stmt = $conexion->prepare($sqlPedido)) {
    $stmt->bind_param("sdi", $fecha, $total, $idCliente); // Aquí usas $total
    if (!$stmt->execute()) {
        echo json_encode(['success' => false, 'message' => "Error al insertar pedido"]);
        exit();
    }
    $idPedido = $stmt->insert_id;
} else {
    echo json_encode(['success' => false, 'message' => "Error al preparar inserción de pedido"]);
    exit();
}

// Insertar detalles del pedido
foreach ($productos as $producto) {
    $sqlDetalle = "INSERT INTO detalles_pedido (cantidad, precio, id_producto, id_pedido) VALUES (?, ?, ?, ?)";
    if ($stmt = $conexion->prepare($sqlDetalle)) {
        $stmt->bind_param("idii", $producto['cantidad'], $producto['precio'], $producto['id'], $idPedido);
        if (!$stmt->execute()) {
            echo json_encode(['success' => false, 'message' => "Error al insertar detalle de pedido"]);
            exit();
        }
    } else {
        echo json_encode(['success' => false, 'message' => "Error al preparar inserción de detalle de pedido"]);
        exit();
    }
}

echo json_encode(['success' => true, 'idPedido' => $idPedido]);

function calcularTotal($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}


?>
