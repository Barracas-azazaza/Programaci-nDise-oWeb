<!--Capa lógica-->
<!--ClaseNumerosPositivos.php-->
<?php
header("Content-Type:text/html; charset=utf-8");
class Clase_Positivo{
    private $vector = array();
    function Clase_Positivo(){
        //Llenando el vector
        for($i = 1; $i <= 10; $i=$i+1){
            $this->vector^[$i]=rand(-9999,9999);
        }
    }
    public function muestraPositivos(){
        //Comparar y mostrar los números mayores de cero
        echo "<table border = '1' WIDTH = 50% border = 3 cellspacing = 3 cellpadding = 10 bordercolor = blue \n";
        echo "<tr><td align=center><strong><h3>Numeros aleatorios del Vector:</h3></strong></trd></tr> \n";
        for($i = 1; $i <=10; $i++){
            if($this->vector[$i]>0){
                echo "\t<tr>\n";
                $temp = $this->vector[$i];
                echo "\t\t<td>El numero $i es: $temp y es positivo</td>\n";
                echo "\t</tr>\n";
            }else{
                echo "\t<tr>\n";
                $temp = $this->vector[$i];
                echo "\t\t<td>El numero $i es: $temp es negativo, ";
                $temp = $this->vector[$i]*(-1);
                echo "$temp convertido a positivo</td>\n";
                echo "\t</tr>\n";
                echo "\n";
            }
        }
        echo "</table>";
    }
}
?>