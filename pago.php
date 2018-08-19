<?php
$mail="onlineventascs@gmail.com";


$nombre = $_POST ['name'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$facebook = $_POST ['facebook'];
$pago = $_POST ['pago'];
$Mpago = $_POST ['Mpago'];
$ref = $_POST ['ref'];
$monto = $_POST ['monto'];
$bancoE = $_POST ['bancoE'];
$bancoR = $_POST ['bancoR'];
$llegada = $_POST ['llegada'];
$articulo = $_POST ['articulo'];
$telefono = $_POST ['telefono'];
$mensaje = $_POST ['mensaje'];
 
$message = "
Nombre: ".$nombre."
Apellido: ".$apellido."
Correo: ".$email."
Url-Facebook: ".$facebook."
Fecha de pago: ".$pago."
Metodo de pago: ".$Mpago."
Referencia: ".$ref."
Monto depositado: ".$monto."
Banco emisor: ".$bancoE."
Banco receptor: ".$bancoR."
Fecha de llegada de pago: ".$llegada."
Articulo de compra: ".$articulo."
Numero de telefono: ".$telefono."
Mensaje : ".$mensaje."

";

if (mail ($mail,"Ventas CS Online", $message))

header ("location: registrodepago.html");
echo "mensaje enviado correctamente";
?>

