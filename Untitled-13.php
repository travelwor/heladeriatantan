<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
// Procesar el formulario y enviar la informaci�n del pedido a tu n�mero de tel�fono

// Obt�n los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$cantidad = $_POST['cantidad'];
$sabor = $_POST['producto']; // El valor del producto seleccionado

// Formatea el mensaje con los datos del pedido
$mensaje = "Nuevo pedido:\n";
$mensaje .= "Nombre: $nombre\n";
$mensaje .= "Email: $email\n";
$mensaje .= "Tel�fono: $telefono\n";
$mensaje .= "Direcci�n: $direccion\n";
$mensaje .= "Cantidad: $cantidad\n";
$mensaje .= "Sabor: $sabor\n";

// Env�a el mensaje a tu n�mero de tel�fono
$tu_numero_telefono = 'tu_numero_de_telefono'; // Reemplaza con tu n�mero de tel�fono
$mensaje_enviado = mail($tu_numero_telefono, 'Nuevo pedido', $mensaje);

// Verifica si el mensaje se envi� correctamente
if ($mensaje_enviado) {
    // Redirige al usuario a una p�gina de confirmaci�n
    header("Location: confirmacion_pedido.php");
    exit;
} else {
    // Si hay un error al enviar el mensaje, muestra un mensaje de error
    echo "Hubo un error al enviar el pedido.";
}
?>

</body>
</html>
