<!--Formulario f_vectorPositivo.php en capa de presentación-->
<html>
    <head>
        <title>Formulario Vector</title>
        <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8"/>
    </head>
    <body>
        <h1>Lee 10 números, los almacena en un vector y muestra los valores positivos</h1>
        <form action = "<?=$_server['PHP_SELF']?>" method = "POST">
            <p>
            <div align = "left">
                <input type = "submit" name = "ejecutar" value = "Ejectuar programa">
            </div>
        </form>
        <?php
            include_once('../llogica/ClaseNumerosPositivos.php');
            header("Content-Type:text/html; charset = utf-8");
            if(isset($_POST["ejectuar"])){
                $objetoVector10 = new Clase_Positivo();
                $objetoVector10->muestraPositivos();
            }
        ?>
    </body>
</html>