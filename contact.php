<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'carolinaayelencalvi@hotmail.com';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.ddcwewb.com.ar';
</script>";
} else {
echo 'Falló el envio';
}
}
?>