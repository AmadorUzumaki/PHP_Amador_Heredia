<?php
function suma($valor1, $valor2)
{
    return ($valor1 + $valor2);
}
function resta($valor1, $valor2)
{
  return($valor1 - $valor2);
}
function mult($valor1, $valor2)
{
  return($valor1 * $valor2);
}
function div($valor1, $valor2)
{
  return($valor1 / $valor2);
}
echo "La suma dona", " ", suma(4, 6);
echo "<br>La resta dona", " ", resta(5, 2);
echo "<br>La multiplicació dona", " ", mult(2, 2);
echo "<br>La divisió dona", " ", div(10, 2);
?>
