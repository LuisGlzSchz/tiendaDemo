<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'tiendaDemo');

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre_completo'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
// Asumiendo que tienes un array de productos en el localStorage que enviaste como parte del formulario
$productos = json_decode($_POST['productos']); // Asegúrate de enviar esto desde el cliente

// Insertar cliente                    
$sqlCliente = "INSERT INTO clientes (nombre_completo, correo, telefono, direccion) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sqlCliente);
$stmt->bind_param("ssss", $nombre, $email, $direccion, $telefono);
$stmt->execute();
$idCliente = $stmt->insert_id;

// Insertar pedido
$fecha = date('Y-m-d');
$total = calcularTotal($productos); // Función para calcular el total
$sqlPedido = "INSERT INTO pedido (fecha, total, id_cliente) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sqlPedido);
$stmt->bind_param("sdi", $fecha, $total, $idCliente);
$stmt->execute();
$idPedido = $stmt->insert_id;

// Insertar detalles del pedido
foreach ($productos as $producto) {
    $sqlDetalle = "INSERT INTO detalles_pedido (cantidad, precio, id_producto, id_pedido) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sqlDetalle);
    $stmt->bind_param("idii", $producto->cantidad, $producto->precio, $producto->id, $idPedido);
    $stmt->execute();
}

echo json_encode(['success' => true]);

// Función para calcular el total
function calcularTotal($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto->precio * $producto->cantidad;
    }
    return $total;
}
?>