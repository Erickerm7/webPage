<?php


		mysql_connect('localhost', 'webpage', 'as550420') or die ('No se pudo realizar la conexión.');    
        mysql_select_db('page2014web') or die ('No se pudo seleccionar la base de datos');    
        $query = "INSERT INTO contact (nombre, telefono, correo, asunto, mensaje) VALUES('$clientName', '$clientPhone', '$clientEmail', '$subject', '$subject')";   
        mysql_query($query);

?>
