<?php

if(isset($_POST['submit'])){
    $cod = $_POST['cod'];
    $nombre = $_POST['nombre'];
    $materia = $_POST['materia'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $prom = 0;
    $res = " ";
    $x = 0;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Promedio del Estudiante</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

    <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Promedio del estudiante</h1>
        <h3>Por favor rellene los siguientes datos para saber <br>
        el promedio del estudiante en una materia </h3> <br>
        <label for="">Ingrese el codigo del estudiante:</label> <br>
        <input name="cod" type="text" value="<?php 
            if(isset($cod)){ echo $cod;} ?>">
        <label for="">Ingrese el nombre del estudiante:</label> <br>
        <input name="nombre" type="text" value="<?php 
            if(isset($nombre)){ echo $nombre;} ?>">
        <label for="">Ingrese el nombre de la materia:</label> <br>
        <input name="materia" type="text" value="<?php 
            if(isset($materia)){ echo $materia;} ?>">
        <label for="">Ingrese la primera nota:</label> <br>
        <input name="n1" type="text" value="<?php 
            if(isset($n1)){ echo $n1;} ?>">
        <label for="">Ingrese la segunda nota:</label> <br>
        <input name="n2" type="text" value="<?php 
            if(isset($n2)){ echo $n2;} ?>">
        <label for="">Ingrese la tercera nota:</label> <br>
        <input name="n3" type="text" value="<?php 
            if(isset($n3)){ echo $n3;} ?>"> <br>
        <input type="submit" name="submit">
        <?php
            include("ejercicio4.php");
        ?>
    </form>

</body>
</html>