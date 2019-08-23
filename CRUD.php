<!--f_formulario-->
<head>
    <title>Formulario empleado</title>
</head>
<body>
    <form action = "<?=_SERVER['PHP_SELF']?>" method = "POST">
        Codigo: <input type = "text" name = "Codig"><p>
        Nombnre: <input type = "text" name= "Nomb"><p>
        Apellido: <input type = "text" name = "Apellido"><p>
        Celular: <input type = "text" name = "Celular"><p>
        Dirección: <input type = "text" name = "Direccion"><p>
        <p>
        <input type = "submit" name = "InsertRegistro" value = "Registar">
        <input type = "submit" name = "ConsultarTodos" value = "Consultar">
        <input type = "submitr" name = "ActualizarRegistro" value = "Actualizar">
        <input type = "submit" name= "EliminarRegistro" value = "Eliminar">
    </form>
<?php
include_once('../LDatos/conexionbd.php');
include_once('../LLógica/ClaseEmpleado.php');
if(isset($_POST["InsertRegistro"])){
    $cod = $_POST['Codig'];
    $nom = $_POST['Nomb'];
    $apell = $_POST['Apellido'];
    $cel = $_POST['Celular'];
    $dir = $_POST['Direccion'];
    $objEmpleado = new claseEmpleado($cod, $nom, $apell, $cel, $dir);
    $objEmpleado->InsertRegistro();
}
if(isset($_POST["ConsultarTodos"])){
    $objEmpleado = new claseEmpleado(1,1,1,1,1);
    $objEmpleado->mostrarTodo();
}
if(isset($_POST["ActualizarRegistro"])){
    $cod = $_POST['Codig'];
    $Nom = $_POST['Nomb'];
    $apell = $__POST['Apellido'];
    $cel = $_POST['Celular'];
    $dir = $_POST['Direccion'];
    $objEmpleado = new claseEmpleado($cod, $nom, $apell, $cel, $dir);
    $objEmpleado->ActualizarRegistro();
}
if(isset($_POST["EliminarRegistro"])){
    $cod = $_POST['Codig'];
    $objEmpleado = new claseEmpleado(1,1,1,1,1);
    $objEmpleado->EliminarRegistro($cod);
}
?>
</body>
</html>