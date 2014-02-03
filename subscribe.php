<?php

    if($_POST) {
        
        $correo = trim($_POST['correo']);
        
        mysql_connect('localhost', 'root', '') or die ('No se pudo realizar la conexión.');
            
        mysql_select_db('bd') or die ('No se pudo seleccionar la base de datos');
            
        $query = "INSERT INTO suscriptores (Correo) VALUES('$correo')";
            
        if(mysql_query($query)){
                
            echo "El usuario ha sido agregado exitosamente";
                
        }else{
                
            echo "El usuario no se ha podidio agregar";
                
        }
        
        echo json_encode($correo);
        
}

?>