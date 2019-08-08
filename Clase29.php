<?php
    $n1 = $_POST ["n1"];
    $n2 = $_POST ["n2"];
    $operador = $_POST["operador"];
    if ($n1 != "" AND $n2 != ""){
        if ($operador=="suma"){
            $resultado=$n1+$n2;
            echo($resultado);
        }elseif ($operador=="resta"){
            $resultado=$n1-$n2;
            echo($resultado);
        }elseif ($operador=="multiplicación"){
            $resultado=$n1*$n2;
            echo("$resultado");
        }elseif ($operador=="división"){
            $resultado=$n1/$n2;
            echo("$resultado");
        }
    }
    else{
        print("Ingrese algún valor");
    }
    //echo "<a href="Mi página calculadora.html">Pagina $x</a>";
    print ('<p><a href="Clase27.html">Volver</a>');
?>