<?php
echo "Declaramos variables con el signo <strong>'$'</strong><br><i>PHP es débilmente tipado</i>";
echo "<br>";
$nombre = "Matias";
$apellido = 'Martinez';
echo "Mi nombre es: ".$nombre. " " . $apellido;

$n1 = 10;
$n2 = 21;
$n3 = TRUE;
echo "<br>";
echo "Suma: ".$resultado = $n1+$n2;

//Sentencia IF e IF anidados
if($n1<$n2){
    echo "<br> n1 es menor que n2";
}else if($n1>$n2){
    echo "<br> n1 es mayor que n2";
}else{
    echo "<br> n1 y n2 son iguales";
}

//OPERADORES LOGICOS -- OR -- AND -- != (diferente) -- 
if($n1 < 20 and $n2 < 20){
    echo "<br> ambos números son menores a 20";
}
if($n1 > 20 or $n2 > 20){
    echo "<br> Pueden pasar!";
}else{
    echo "<br> Son menores!";
}

if($n1 != 10){
    echo "<br> N1 no es 10";
}elseif(!$n3){
    echo "<br> N3 Es FALSO";
}else{
    echo "<br> No pasa nada";
}

$resp = 'S';
if($resp == 'S' or $resp == 's'){
    echo "<br> Hay que preguntar tanto por <Strong>mayusculas</Strong> y <Strong>minusculas</Strong>";
}

//SITCH CASE estructura de caso
//Numerico
$opt = 3;
switch ($opt) {
    case 1:
        echo "<br> Elegiste la opcion 1";
        break;
    case 2:
        echo "<br> Elegiste la opcion 2";
        break;
    
    default:
        echo "<br> No elegiste ninguna opcion. Volveremos al menu";
        break;
}

// Caso String
switch ($resp) {
    case 's':
        echo "<br> ese minuscula";
        break;
    case 'S':
        echo "<br> ese mayuscula";
        break;
    
    default:
        echo "<br> No existe el caso";
        break;
}

//Estructura FOR
echo "<br><br>Tabla del 10:<br>";
for ($i=0; $i < 10; $i++) { 
    echo "10 x ".($i+1)." = ". 10*($i+1) . "<br>";
}

//WHILE
$condicion=0;
while ($condicion <= 10) {
    echo "<br>El valor de la condicion es: ".$condicion;
    $condicion++;
}
echo"<br>Se salió del WHILE";