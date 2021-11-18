<?php

if(isset($_POST['submit'])){
    if(empty($edad)){
        echo "<p class='error'>* Ingresa la edad </p>";
        $x+=1;
    } else{
        if(!is_numeric($edad)){
            echo "<p class='error'>* La edad debe ser un numero </p>";
            $x+=1;
        }
    }if(empty($estat)){
        echo "<p class='error'>* Ingresa la estatura </p>";
        $x+=1;
    } else{
        if(!is_numeric($estat)){
            echo "<p class='error'>* La estatura debe ser un numero </p>";
            $x+=1;
        }
    }if(empty($peso)){
        echo "<p class='error'>* Ingresa el peso </p>";
        $x+=1;
    } else{
        if(!is_numeric($peso)){
            echo "<p class='error'>* El peso debe ser un numero </p>";
            $x+=1;
        }
    }

if($x<=0){
    if ($edad<=18 && $estat>=180 && $peso<=80){
        print "<br>Felicitaciones!!!<br>El aspirante cumple con los requisitos";
    } else{
        print "<br>Lo sentimos<br>El aspirante no cumple con los reqisitos";
}
}

}





?>