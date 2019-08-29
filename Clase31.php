<?php
header("Content-Type:text/html; charset=utf-8");
class Clase_Calculadora{
    private $n1;
    private $n2;
    private $suma;
    private $resta;
    private $multiplicacion;
    private $division;
    function Clase_Calculadora($num1, $num2){
        $this->n1 = $num1;
        $this->n2 = $num2;
    }
    public function sumar(){
        $this->suma = $this->n1 + $this->n2;
    }
    public function restar(){
        $this-resta = $this->n1 -$this->n2;
    }
    public function multiplicar(){
        this->multiplicacion = $this->n1 * $this->n2;
    }
    public function dividir(){
        if($this->n2 !=0){
            $this->division=$this->n1 / $this->n2;
        }else{
            $this->division=utf8_encode("Error de divisón por cero");
        }
    }
    public function mostrarSuma(){
        echo "<table border = '1'> \n";
        echo "<tr><td>Resultado de la Suma es: </td></tr> \n";
        echo "\t<tr>\n";
        echo "\t\t<td>$this->suma</td>\n";
        echo "\t<tr>\n";
        echo "</table>\n";
    }
    public function mostrarResta(){
        echo "<table border = '1> \n";
        echo <"<tr><td>Resultado de la Resta es:</td></tr> \n";
        echo "\t<tr>\n";
        echo "\t\t<td>$this->resta</td>\n";
        echo "\t<tr>\n";
        echo "</table>\n";
    }
    public function mostrarMultiplicacion(){
        echo "<table border = '1> \n";
        echo <"<tr><td>Resultado de la Multiplicacion es:</td></tr> \n";
        echo "\t<tr>\n";
        echo "\t\t<td>$this->multiplicacion</td>\n";
        echo "\t<tr>\n";
        echo "</table>\n";
    }
    public function mostrarDivision(){
        echo "<table border = '1> \n";
        echo <"<tr><td>Resultado de la División es:</td></tr> \n";
        echo "\t<tr>\n";
        echo "\t\t<td>$this->division</td>\n";
        echo "\t<tr>\n";
        echo "</table>\n";
    }
}
?>