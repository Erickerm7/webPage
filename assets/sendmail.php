<?php

// Email address verification
function isEmail($email) {
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

function is_phone($phone) { 
	return(preg_match("/^[0-9]{8}$/", 
 $phone));
}



if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'erickerm7@hotmail.com';

    $clientName = trim($_POST['name']);
	$clientPhone = trim($_POST['phone']);
    $clientEmail = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
	
	$message = "
<html lang='gt'>
<head>
<title>Titulo de Prueba Html</title>
</head>
<body>




<table width='700' bordercolor='#fff' border='1' cellspacing='0' align='center'>
  <tr>
    <td colspan='2'><img src='http://s28.postimg.org/wzmmawgwt/contact_Form.png'></td>
  </tr>
  <tr>
    <td width='350'align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>NOMBRE</strong></font></td>
    <td width='345' align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$clientName</font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>TEL&Eacute;FONO</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$clientPhone</font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>E-MAIL</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$clientEmail</font></td>
  </tr>
  <tr>
    <td align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+1'><strong>ASUNTO</strong></font></td>
    <td align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>$subject</font></td>
  </tr>
  <tr>
    <td colspan='2' align='center' bgcolor='#71BF3E'><font color='FFFFFF' face='sans-serif, Geneva, Tahoma' size='+2'><strong>MENSAJE</strong></font></td>
  </tr>
  <tr>
    <td colspan='2' align='center' bgcolor='#E2E2E2'><font color='#353535' face='sans-serif, Geneva, Tahoma'>&nbsp;</font>$message</td>
  </tr>
  <tr>
    <td colspan='2'><img src='http://s28.postimg.org/vj6if0om5/contact_Form_Footer.png' width='700' height='87' alt='FooterForm'></td>
  </tr>
</table>

</body>
</html>
";
	
    $array = array();
    $array['nameMessage'] = '';
	$array['phoneMessage'] = '';
    $array['emailMessage'] = '';
    $array['messageMessage'] = '';

    if($clientName == '') {
        $array['nameMessage'] = 'Por favor inserte su nombre.';
    }
	if(!is_phone($clientPhone)) {
        $array['phoneMessage'] = 'Por favor inserte un n&uacute;mero correcto.';
    }	
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Por favor inserte un email valido.';
    }
    if($message == '') {
        $array['messageMessage'] = 'Por favor escriba su mensaje.';
    }
    if($clientName != '' && isEmail($clientEmail) && $message != '' && is_phone($clientPhone) && $phone != '') {
        // Send email
	
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/html; charset=utf-8\r\n";
	$headers.= "From: " . $clientName . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
	mail($emailTo, $subject, $message, $headers);
    }

    echo json_encode($array);

}




?>
