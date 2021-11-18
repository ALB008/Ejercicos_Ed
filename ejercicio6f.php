<?php

if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $n = 1;
    $res = 0;
    $x = 0;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tabla de multiplicar</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <h1>Tabla de multiplicar</h1>
            <h3>Ingrese un numero par ver sus multiplicaciones hasta 10</h3> 
            <br>
            <label for="">Ingrese un numero: </label> <br>
            <input type="text" name="num" value="<?php 
            if(isset($num)){ echo $num;} ?>"> <br>
            <input type="submit" name="submit">

            <?php
            include("ejercicio6.php");
            ?>

        </form>
    </body>
</html>