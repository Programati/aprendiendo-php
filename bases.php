<?php
echo "Declaramos variables con el signo <strong>'$'</strong><br><i>PHP es débilmente tipado</i>";
echo "<br>";
$nombre = "Matias";
$apellido = 'Martinez';
echo "Mi nombre es: ".$nombre. " " . $apellido;

$n1 = 10;
$n2 = 12.5;
echo "<br>";
echo "Suma: ".$resultado = $n1+$n2;

//Sentencia IF
if($n1<$n2){
    echo "<br> n1 es menor que n2";
}else{
    echo "<br> n2 es mayor que n1";
}