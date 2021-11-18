<?php

if(isset($_POST['submit'])){
    $edad = $_POST['edad'];
    $estat = $_POST['estat'];
    $peso = $_POST['peso'];
    $x = 0;
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Seleccion Coldeporte</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <h1>Seleccion  de jugadores para Coldeporte</h1>
            <h3>Para saber si cumple con los requisitos para presentarse <br>
            en la seleccion de basketball prejuvenil. <br>
            Porfavor rellene los siguentes datos</h3> <br>
            <label for="">Ingrese su edad:</label> <br>
            <input name="edad" type="text" value="<?php 
            if(isset($edad)){ echo $edad;} ?>">
            <label for="">Ingrese su estatura en cm:</label> <br>
            <input name="estat" type="text" value="<?php 
            if(isset($estat)){ echo $estat;} ?>">
            <label for="">Ingrese su peso en kg:</label> <br>
            <input name="peso" type="text" value="<?php 
            if(isset($peso)){ echo $peso;} ?>"> <br>
            <input type="submit" name="submit">
            <?php
            include("ejercicio3.php");
            ?>
        </form>        
    </body>
</html>