<?php

if(isset($_POST['submit'])){
    $lunes = $_POST['lunes'];
    $martes = $_POST['martes'];
    $miercoles = $_POST['miercoles'];
    $jueves = $_POST['jueves'];
    $viernes = $_POST['viernes'];
    $sabado = $_POST['sabado'];
    $domingo = $_POST['domingo'];
    $promedio = 0;
    $x = 0;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Temeperatura de la semana</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        
        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Temperatura de la semana</h1> <br>
            <label for="">Ingrese la temperatura del Lunes</label> <br>
            <input name="lunes" type="text" value="<?php 
            if(isset($lunes)){ echo $lunes;} ?>">
            <label for="">Ingrese la temperatura del Martes</label> <br>
            <input name="martes" type="text" value="<?php 
            if(isset($martes)){ echo $martes;} ?>">
            <label for="">Ingrese la temperatura del Miercoles</label> <br>
            <input name="miercoles" type="text" value="<?php 
            if(isset($miercoles)){ echo $miercoles;} ?>"> <br>
            <label for="">Ingrese la temperatura del Jueves</label> <br>
            <input name="jueves" type="text" value="<?php 
            if(isset($jueves)){ echo $jueves;} ?>">
            <label for="">Ingrese la temperatura del Viernes</label> <br>
            <input name="viernes" type="text" value="<?php 
            if(isset($viernes)){ echo $viernes;} ?>">
            <label for="">Ingrese la temperatura del Sabado</label> <br>
            <input name="sabado" type="text" value="<?php 
            if(isset($sabado)){ echo $sabado;} ?>">
            <label for="">Ingrese la temperatura del Domingo</label> <br>
            <input name="domingo" type="text" value="<?php 
            if(isset($domingo)){ echo $domingo;} ?>"> <br>
            <input type="submit" name="submit">
            <?php
            include("ejercicio2.php");
            ?>
        </form>
    </body>
</html>