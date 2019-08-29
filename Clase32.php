<head>
    <title>Formulario Calculadora</title>
</head>
<body>
    <h1>Formulario Calculadora</h1>
    <form action ="<?$SERVER['PHP_SELF']?>" method = "POST">
    Primer número: <input type = "text" name = "n1" placeholder="Ingrese el primer número" pattern = [0-9]+ required><br>
    Segundo número: <input type="text" name="n2" placeholder = "Ingrese el segundo número" pattern = [0-9]+ required><br>
    <div align="left">
        <input type = "submit" name = "suma" value = "Sumar">
        <input type = "submit" name = "resta" value = "Restar">
        <input type = "submit" name= "multiplicación" value = "Multiplicar">
        <input type = "submit" name = "división" value = "Dividir">
    </div>
</form>
<?php
    include_once("../LLógica/ClaseCalculadora.php");
    header("Content-Type:text/html;charset=UTF-8");
    if(isset($POST["suma"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $objetoCalculadora = new Clase_Calculadora($n1, $n2);
        $objetoCalculadora->sumar();
        $objetoCalculadora->mostrarSuma();
    }
    if(isset($_POST["resta"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $objetoCalculadora = new Clase_Calculadora($n1, $n2);
        $objetoCalculadora->restar();
        $objetoCalculadora->mostrarResta();
    }
    if(isset($_POST["multiplicacion"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $objetoCalculadora = new Clase_Calculadora($n1, $n2);
        $objetoCalculadora->multiplicar();
        $objetoCalculadora->mostrarMultiplicacion();
    }
    if(isset($_POST["division"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $objetoCalculadora = new Clase_Calculadora($n1, $n2);
    }
?>
</body>
</html>