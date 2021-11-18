<?php
if (isset($_POST['submit'])) {
    $valor = $_POST['valor'];
    $horae = $_POST['horae'];
    $horat = $_POST['horat'];
    $salario = 0;
    $extra=0;
    $pen = 0;
    $salu = 0;
    $x = 0;
}
?>

<!Doctype html>
<html>
    <head>
        <title>Determinar Salario</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Determinar el Salario</h1>
        <h3>Para determinar el salario total de un empleado, rellenar los siguientes datos:</h3> <br>
        <label for="">Ingrese el valor por hora trabajada: </label><br>
        <input name="valor" type="text" value="<?php 
            if(isset($valor)){ echo $valor;} ?>">
        <label for="">Ingrese el valor por hora extra: </label> <br>
        <input type="text"name="horae" value="<?php 
            if(isset($horae)){ echo $horae;} ?>">
        <label for="">Ingrese las horas trabajadas en la semana: </label> <br>
        <input type="text" name="horat" value="<?php 
            if(isset($horat)){ echo $horat;} ?>"><br>
        <input type="submit" name="submit"> 
        <?php
            include("ejercicio1.php");
            ?>
        </form>

    </body>

</html>