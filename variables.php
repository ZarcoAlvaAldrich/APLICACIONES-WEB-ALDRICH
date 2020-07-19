<?php
 echo "<H1> Ejemplos de variables </h1>" ;
 $intVar = 19;
 echo "<br> Este es un ejemplo de int ->";
var_dump ($intVar);
$floatVar = 1.62;
echo "<br> Este es un ejemplo de float ->";
var_dump ($floatVar );
$stringVar = 'Aldrich';
echo "<br>Este es un ejemplo de string ->";
var_dump ($stringVar );
$BoolVar = False;
echo "<br>Este es un ejemplo Booleano ->";
var_dump($BoolVar);


$arrayVar = [
  0=> 'Aldrich',
  1=> 19, 
  2=> 1.62,
  3 => false
  ];
echo "<br> Este es un ejemplo de arreglo ->";
var_dump($arrayVar);
?>