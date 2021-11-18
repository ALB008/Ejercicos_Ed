<?php
    // Arrays para guardar mensajes y errores:
     $aErrores = array();
     $aMensajes = array();
    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
    // Comprobar si se ha enviado el formulario:
    if( !empty($_POST) )
    {
        echo "FORMULARIO RECIBIDO:<br/>";
        echo "====================<p/>";
        // Mostrar la información recibida del formulario:
        print_r( $_POST );
        echo "<hr/>";
        // Comprobar si llegaron los campos requeridos:
         if( (isset($_POST['valor']) ) && (isset($_POST['horae']) && (isset($_POST['horat']) ) ) )
        {
            
             
            // Edad:
            if( (!empty($_POST['valor'])) )
            {
                if( is_numeric($_POST['valor']) )
                    $aMensajes[] ="Edad: [".$_POST['valor']."]";
                else
                $aErrores[] = "El campo solo debe contener números.";
            }if( (!empty($_POST['horae'])) )
            {
                if( is_numeric($_POST['horae']) )
                    $aMensajes[] ="Edad: [".$_POST['horae']."]";
                else
                    $aErrores[] = "El campo solo debe contener números.";
            }if( (!empty($_POST['horat'])) )
            {
                if( is_numeric($_POST['horat']) )
                    $aMensajes[] ="Edad: [".$_POST['horat']."]";
                else
                $aErrores[] = "El campo solo debe contener números.";
            }
            
        }
        else
        {
            echo "<p>No se han especificado todos los datos requeridos.</p>";
        }
        // Si han habido errores se muestran, sino se mostrán los mensajes
         if( count($aErrores) > 0 )
        {
            echo "<p>ERRORES ENCONTRADOS:</p>";
            // Mostrar los errores:
            for( $contador=0; $contador < count($aErrores); $contador++ )
                echo $aErrores[$contador]."<br/>";
        }
        else
        {
            // Mostrar los mensajes:
            for( $contador=0; $contador < count($aMensajes); $contador++ )
                echo $aMensajes[$contador]."<br/>";
        }
        
    }
    else
    {
        echo "<p>No se ha enviado el formulario.</p>";
    }
    echo "<p><a href='Ejercicio1.html'>Haz clic aquí para volver al formulario</a></p>";
?>