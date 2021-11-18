<?php

if(isset($_POST['submit'])){
    $llanta = $_POST['llanta'];
    $precio = 0;
    $total = 0;
    $x = 0;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Promocion SuperPonchadas</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <h1>Promoción de llantas</h1> <br>
            <label for="">Ingrese la cantidad de llantas que desea comprar:</label> <br>
            <input name="llanta" type="text" value="<?php 
            if(isset($llanta)){ echo $llanta;} ?>"> <br>
            <input type="submit" name="submit">
            <?php
            include("ejercicio5.php");
            ?>
        </form>
    </body>
</html>