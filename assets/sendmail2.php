<?php

$destinatario = "ramireze@aceiba.com.gt";
$asunto = "Correo electrónico enviado desde PHP";
$mensaje = "Esta es una prueba de envío.";
mail($destinatario, $asunto, $mensaje);


if(mail($destinatario, $asunto, $mensaje)) {
echo "El e-mail se ha enviado satisfactoriamente.";
} else {
echo "Se ha producido un error al intentar enviar el e-mail";
}

?>
