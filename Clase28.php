<?php
    $n1 = $_POST ["n1"];
    $n2 = $_POST ["n2"];
    $operador = $_POST["operador"];
    $resultado = ($n1 != "" AND $n2 != "") ?
        $operador=="suma" 
        ? $n1+$n2
        : ($operador=="resta"
        ? $n1-$n2
        : ($operador=="multiplicación"
        ? $n1*$n2
        : ($operador=="división"
        ? $n1/$n2
        :""
    //echo "<a href="Mi página calculadora.html">Pagina $x</a>";
    print('<p><a href="Clase27.html">Volver</a>');
?>