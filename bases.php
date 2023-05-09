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

echo"<br>";
echo"<hr>";
echo"<br>FOR<br>";
//Estructura FOR
echo "<br><br>Tabla del 10:<br>";
for ($i=0; $i < 10; $i++) { 
    echo "10 x ".($i+1)." = ". 10*($i+1) . "<br>";
}
echo"<br>";
echo"<hr>";
echo"<br>WHILE<br>";
//WHILE
$condicion=0;
while ($condicion <= 10) {
    echo "<br>El valor de la condicion es: ".$condicion;
    $condicion++;
}
echo"<br>Se salió del WHILE";
echo"<br>";
echo"<br>";

echo"<hr>";
//ARREGLOS NORMALES

$arreglo = array();
$arreglo[0] = "Juan";
$arreglo[1] = "Matias";
$arreglo[2] = "Ezequiel";

echo"<br>ARREGLOS<br>Podemos vizualizar todo el arreglo con ' var_dump($ arreglo) '<br>";
var_dump($arreglo);
echo "<br>Tambien podemos visualizar cada posicion arreglo[0],[1],...[posicion]<br>";
echo"Posicion 0 => ".$arreglo[0];

echo"<br>Ver arreglo con un FOR usando <strong>COUNT</strong> para contar la todalidad del arreglo";
for ($i=0; $i < count($arreglo); $i++) { 
    echo"<br>".$arreglo[$i];
}
echo"<br><br>";
$arreglo2=array('Misiones','Formosa','Chaco','Corrientes', 1,2,3);
for ($i=0; $i < count($arreglo2); $i++) { 
    echo"<br>".$arreglo2[$i];
    if($arreglo2[$i] == 'Formosa'){
        echo "<br><br>Formosa está dentro del arreglo N°2.<br> Salimos del arreglo al encontrarlo<br>";
        break;
    }
}

//ARREGLO ASOCIATIVO
echo"<br>";
echo"<hr>";
echo "ARREGLO ASOCIATIVO<br>";
echo"<br>Este arreglo se le proporicona una llave o indice a cada dato del arreglo<br> $ arreglo = array ( 'coche' => 'verde', 'moto' => 'rojo', 'avion' => 'azul')<br>Se recorre con un FOREACH y se usa mucho en JSON<br>";
echo"<br>Recorreremos el arreglo PERSONA con los datos de una persona<br>";
$persona=array("apellido" => "martinez", "nombre" => "matias", "edad" => 28, "ciudad" => "Corrientes");
foreach ($persona as $key => $value) {
    echo $key." : ".$value."<br>";
}

echo"<br>Tambien se lo puede usar en arreglos normales<br>";
foreach($arreglo as $key){
    echo $key."<br>";
}

//STRING
echo"<br>";
echo"<hr>";
echo "String con Explode. Es una funcion que convierte un string a un arreglo dependiendo de la construccion pedida<br>";
$var = "matias juan martinez";
$fecha = "01-05-2023";

echo'<br>$ variableArreglo = EXPLODE("string que va a ser la referencia la cual que vamos a usar para dividir el STRING" , variableString)<br>';
$datos = explode(" ", $var);
$datoApellido=$datos[2];
echo "<br> apellido = variableArreglo[2]. Así sacamos el dato apellido del String que tiene nombre1, nombre2 y apellido juntos";
echo"<pre>";
print_r($datos);
echo"</pre>";
echo"<br>Fecha => DIA-MES-HORA<br>";
$f = explode("-", $fecha);
echo"Dia: ".$dia=$f[0]."<br>";
echo"Mes: ".$mes=$f[1]."<br>";
echo"Año: ".$f[2]."<br>";
echo"<pre>";
print_r($f);
echo"</pre>";

