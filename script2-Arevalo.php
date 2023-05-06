<?php
/**
Permite realizar operaciones matemáticas básicas
*
*@author Pedro Arŕevalo Alcaide
*@version 1.0.0
*/
class Calculadora {
/**
*Sumar dos números
*
*@param integer $num1 primer número que se va a sumar
*@param integer $num2 segundo número que se va a sumar
*@return integer $num1 + $num2 devuelve la suma entre los dos números
*@version 1.0.0
*/
  public static function sumar($num1, $num2) {
    return $num1 + $num2;
  }
/**
*Resta dos números
*
*@param integer $num1 primer número que se va a restar
*@param integer $num2 segundo número que se va a tar
*@return integer $num1 - $num2 devuelve la resta entre los dos números
*@version 1.0.0
*/
  public static function restar($num1, $num2) {
    return $num1 - $num2;
  }
/**
*Multiplicación dos números
*
*@param integer $num1 primer número que se va a multiplicar
*@param integer $num2 segundo número que se va a multiplicar
*@return integer $num1 * $num2 devuelve la multiplicación entre los dos *números
*@version 1.0.0
*/
  public static function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }
/**
*División entre dos números
*
*@param integer $num1 Divisor
*@param integer $num2 dividendo
*@return integer $num1 / $num2 devuelve la división entre los dos *números
*@internal Si $num2 es igual a 0 devuelve un error
*@version 1.0.0
*/
  public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
/**
* Función vieja que no debería usarse
*
*@deprecated  
  public static function deprecated($num1,$num2){
  
  } 
  
  
}

?>
