<?php

// Tipos de datos en PHP
// Enteros
$entero = 1;
var_dump($entero);
echo '<br />';

// Flotante
$flotante = 4.5;
var_dump($flotante);
echo '<br />';

// Booleano
$booleano = true;
var_dump($booleano);
echo '<br />';

// String
$cadena = "Hola mundo";
var_dump($cadena);
echo '<br />';

// Array
$arreglo = [1, 2, 3];
var_dump($arreglo);
echo '<br />';
echo "arreglo[1] = " . $arreglo[1] . '<br />';
echo '<br />';

$arreglo = ['uno' => 1, 'dos' => 2];
var_dump($arreglo);
echo '<br />';
echo 'arreglo["uno"] = ' . $arreglo["uno"] . '<br />';
echo '<br />';

// NULL
$nulo = NULL;
var_dump($nulo);
echo '<br />';

echo '-----------------------------------------------------';
echo '<br />';

$mix = 1;
var_dump($mix);
echo '<br />';
$mix = $mix + 1.0;
var_dump($mix);
echo '<br />';
$mix = "hola" + $mix;
var_dump($mix);
echo '<br />';

echo '-----------------------------------------------------';
echo '<br />';
// Variable sin inicializar
$variable = $variable + 1;
echo 'Sin inicializar: ', $variable, '<br />';

$variable2 = $variable2 . "hola";
echo 'Sin inicializar: ', $variable2, '<br />';

echo '-----------------------------------------------------';
echo '<br />';

// Comparacion de tipos de datos
$entero = 1;
if (is_int($entero)) {
	echo $entero, ': Es entero'; 
} else {
	echo $entero, ': No es entero';
}
echo '<br />';

$booleano = true;
if (is_bool($booleano)) {
	echo $booleano, ': Es bool'; 
} else {
	echo $booleano, ': No es bool';
}
echo '<br />';

$flotante = 1;
if (is_float($flotante)) {
	echo $flotante, ': Es flotante'; 
} else {
	echo $flotante, ': No es flotante';
}
echo '<br />';

$cadena = "1";
if (is_string($cadena)) {
	echo $cadena, ': Es cadena'; 
} else {
	echo $cadena, ': No es cadena';
}
echo '<br />';

echo '-----------------------------------------------------';
echo '<br />';

$mix = "3 peras";
$mix = $mix + "10 manzanas";
echo 'Sumar 3 peras y 10 manzanas, resultan ', $mix, '<br />';

echo '-----------------------------------------------------';
echo '<br />';

// Interpolación de cadenas
$tipo = 'balon';
echo "Pasame el $tipo de {$tipo}cesto", '<br />';

echo '-----------------------------------------------------';
echo '<br />';

// Variables alternas
$alumno = 'Es un alumno';
$tipo_persona = 'alumno';
echo $$tipo_persona, '<br />';

echo '-----------------------------------------------------';
echo '<br />';

// Definicion de una constante
define(PI, 3.14159, true);
echo 'PI es aproximadamente = ', PI, '<br />';

// Constante de PHP
echo 'Este es el archivo ', __FILE__, ' de PHP Version: ', PHP_VERSION, '<br />';
?>