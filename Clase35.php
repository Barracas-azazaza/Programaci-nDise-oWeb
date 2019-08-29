<!--Clase círculo en llogica-->
<?php
header("Content-Type:text/html; charset = utf-8");
class Clase_Circulo{
    private $radio;
    private $area;
    private $perimetro;
    function Clase_Circulo($radio){
        $this->radio=$radio;
    }
    public function calcularArea(){
        $this->area = 3.1416135*pow($this->radio,2);
    }
    public function calcularPerimetro(){
        $this->perimetro = 2*3.1416135*$this->radio;
    }
    public function mostrarArea(){
        echo "<table border = '1'> \n";
            echo "<tr><td>El area del circulo es: </td></tr> \n";
            echo "\t<tr>\n";
            echo "\t\t<td>$this->perimetro</td>\n";
            echo "\t</tr>\n";
        echo "</table>\n";
    }
}
?>