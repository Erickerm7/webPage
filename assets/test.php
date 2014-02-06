<?php



if($_POST) {

        
        mysql_connect('localhost', 'webpage', 'as550420') or die ('No se pudo realizar la conexión.');
            
        mysql_select_db('page2014web') or die ('No se pudo seleccionar la base de datos');
            
        $query = "INSERT INTO contact (nombre, telefono, correo, asunto, mensaje) VALUES('Erick', '41493734', 'erikerm7@hotmail.com', 'ninguno', 'Esto es una prueba')";
            
        if(mysql_query($query)){
                
            echo "El usuario ha sido agregado exitosamente";
                
        }else{
                
            echo "El usuario no se ha podidio agregar";
                
        }


}






?>
