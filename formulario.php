 <?php

    
    if(empty($_POST['captcha'])){ 
//si el codigo introducido es correcto manda el email
 
    $asunto = 'Nuevo contacto.';
    $cabeceras = "From: K3 Industrial <central@serviciosk3.mx>\n";
    $cabeceras .= "Content-type: text/html; charset=UTF-8\r\n";
    $cabeceras .= "Reply-To: " . $_POST['correo'];

    $para = 'central@serviciosk3.mx';
    $cc = 'conversiones@drive4marketing.com';
   
    $mensaje = "Información enviada a traves del formulario:<br><br>";
    $mensaje .= "<b>Nombre:</b><br>" . $_POST['nombre'] . "<br><br>";
    $mensaje .= "<b>Telefono:</b><br>" . $_POST['telefono'] . "<br><br>";
    $mensaje .= "<b>Email:</b><br>" . $_POST['correo'] . "<br><br>";
    $mensaje .= "<b>Comentarios:</b><br>" . $_POST['comentarios'] . "<br><br>";
    
     
                                                      mail($para,$asunto,$mensaje,$cabeceras);
                                                      mail($cc,$asunto,$mensaje,$cabeceras);
                                                  
                                                        echo "<script>\n";
                                                        //echo "alert('Su mensaje ha sido enviado y sera respondido a la brevedad. Gracias.');\n";
                                                       echo "document.location.href=\"enviado.html\"";
                                                       echo "</script>";
        

    }else{
    //aqui va el alert cuando el codigo es incorrecto
    echo '<script type="text/javascript">';
    echo "window.alert('El codigo introducido es incorrecto');";
    echo "document.location.href='index.html'";
    echo "</script>";
    }
?>