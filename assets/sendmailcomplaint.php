<?php

// Email address verification
function isEmail($correo) {
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $correo));
}

function is_phone($telefono) { 
	return(preg_match("/^[0-9]{8}$/", 
 $telefono));
}

function is_poliza($poliza) { 
	return(preg_match("/^[0-9]{>=10}$/", 
 $poliza));
}


if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'erickerm7@hotmail.com';

    $nombres = trim($_POST['Nombres']);
	$apellidos = trim($_POST['Apellidos']);
	$poliza = trim($_POST['Poliza']);
	$telefono = trim($_POST['Telefono']);
    $correo= trim($_POST['Correo']);
	$departamento = trim($_POST['Departamento']);
	$personal = trim($_POST['Personal']);
	$asunto = "Queja " . $departamento;
	$fullname = "$nombres " . "$apellidos";
    $problema = trim($_POST['Problema']);
	
	$message = "
<html lang='gt'>
<head>
<title>Titulo de Prueba Html</title>
</head>
<body>

<table width='700' bordercolor='#fff' border='1' cellspacing='0' align='center'>
  <tr>
    <td colspan='2'><img src='http://sia1.subirimagenes.net/img/2014/01/30/140130054214583321.png'></td>
  </tr>
  <tr>
    <td colspan='2' align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+2'><strong>DATOS DEL CLIENTE</strong></font></td>
  </tr>
  <tr>
    <td width='350'align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>NOMBRE</strong></font></td>
    <td width='345' align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$fullname</h4> </font></td>
  </tr>
  <tr>
    <td width='350'align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>POLIZA</strong></font></td>
    <td width='345' align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$poliza</font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>TEL&Eacute;FONO</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$telefono</font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>CORREO ELECTR&Oacute;NICO</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$correo</font></td>
  </tr>
  <tr>
    <td colspan='2' align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+2'><strong>DATOS DE LA QUEJA</strong></font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>DEPARTAMENTO</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$departamento</font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>NOMBRE DE QUIEN ATENDI&Oacute;</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$personal</font></td>
  </tr>
  <tr>
    <td colspan='2' align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>&nbsp;</font>$problema</td>
  </tr>
  <tr>
    <td colspan='2'><img src='http://s28.postimg.org/vj6if0om5/contact_Form_Footer.png' width='700' height='87' alt='FooterForm'></td>
  </tr>
</table>

</body>
</html>
";
	
    $array = array();
    $array['NombresMessage'] = '';
	$array['ApellidosMessage'] = '';
	$array['TelefonoMessage'] = '';
    $array['CorreoMessage'] = '';
    $array['ProblemaMessage'] = '';

    if($nombres == '') {
        $array['NombresMessage'] = 'Por favor escriba su nombre.';
    }
	if($apellidos == '') {
        $array['ApellidosMessage'] = 'Por favor escriba su apellido.';
    }
	if(!is_phone($telefono)) {
        $array['TelefonoMessage'] = 'Por favor inserte un n&uacute;mero correcto.';
    }	
    if(!isEmail($correo)) {
        $array['CorreoMessage'] = 'Por favor inserte un correo valido.';
    }
    if($problema == '') {
        $array['ProblemaMessage'] = 'Por favor escriba una descripci&oacute;n del problema.';
    }
    if($nombres != '' && $apellidos != '' && isEmail($correo) && $problema != '' && is_phone($telefono) && $telefono != '') {
        // Send email
	
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/html; charset=utf-8\r\n";
	$headers.= "From: " . $fullname . " <" . $correo . ">" . "\r\n" . "Reply-To: " . $correo;
	mail($emailTo, $asunto, $message, $headers);
    }
	

    echo json_encode($array);

}

$_GRABAR_SQL = "INSERT INTO formuno (Nombre, Apellido, Departamento, Autorizo, Tipo, Clase, Otra, Tiempo, Especificacion)VALUES('$nombre', '$apellido', '$depto', '$autorizacion', '$typ', '$clase', '$otra', '$especificaciones')";  
mysql_query($_GRABAR_SQL); 


mysql_close($conexion);


?>
