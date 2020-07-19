<?php
     echo "<h1>Ejemplos con FOR y IF </h1>";
    echo "Ejemplo 1 con FOR";
    echo "<br>La lista de números del 10 al 20: ";
    for($i=10; $i<=20; $i=$i+1){                
        echo "<br>";
        echo $i;
    }

    echo "<br>Ejemplo 1 con IF";
    echo "<br>La lista de números del 10 al 20: ";

     $i;

    for ($i=10; $i<=20; $i=$i+1)
{
    if($i <=20){ 
        echo "<br>";
       echo $i;
}
else echo "<br>Esta no es la serie del 10 al 20";
}


echo "<br>Ejemplo 2 con FOR";
echo "<br>Tabla del 3:";
$num;
for($num=3;$num<=30; $num=$num+3){                
    echo "<br>";
    echo $num;
}
echo "<br>Ejemplo 2 con IF";
echo "<br>Tabla del 3:";
$num;
for ($num=3; $num<=30; $num=$num+3)
{
if($num <=30){ 
    echo "<br>";
   echo $num;
}
else echo "<br>Esta no es la tabla del 3";
}
 
echo "<br>Ejemplo 3 con FOR";
echo "<br>Los contagios de coroanvirus por dia es: ";
$coronavirus;

for($coronavirus=1; $coronavirus<=8; $coronavirus=$coronavirus+1){                
    echo "<br>Contagios: ";
    echo $coronavirus;
}
echo "<br>Ejemplo 3 con IF";
echo "<br>Los contagios de coroanvirus por dia es: ";
$coronavirus;

for($coronavirus=1; $coronavirus<=8; $coronavirus=$coronavirus+1)
{
if($coronavirus<8){ 
    echo "<br>Contagios: ";
   echo $coronavirus;
}
else echo "<br>El riesgo de contagio es bajo";
}

echo "<br>Ejemplo 4 con FOR";
echo "<br>Numeros de califaciones asiganbles: ";
$calificaciones;

for($calificaciones=5; $calificaciones<=10; $calificaciones=$calificaciones+1){                
    echo "<br>Calificacion: ";
    echo $calificaciones;
}
echo "<br>Ejemplo 4 con IF";
echo "<br>Numeros de califaciones asiganbles: ";
$calificaciones;

for($calificaciones=5; $calificaciones<=10; $calificaciones=$calificaciones+1)
{
if($calificaciones<10){ 
    echo "<br>Calificacion: ";
   echo $calificaciones;
}
else echo "<br>Numero de calificaciones asignables insuficientes";
}

echo "<br>Ejemplo 5 con FOR";
echo "<br>Lista de los multiplos de 2 hasta el numero 20: ";
$Multi ;

for($Multi=2; $Multi<=20; $Multi=$Multi+2){                
    echo "<br>Multiplos de 2: ";
    echo $Multi;
}
echo "<br>Ejemplo 5 con IF";
echo "<br>Lista de los multiplos de 2 hasta el numero 20: ";
$Multi;

for($Multi=2; $Multi<=20; $Multi=$Multi+2)
{
if($Multi<20){ 
    echo "<br>Multiplos de 2: ";
   echo $Multi;
}
else echo "<br>La lista de multiplos no se cumple";
}
?>