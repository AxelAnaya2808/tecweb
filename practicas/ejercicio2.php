<h2>Ejercicio 2</h2>
<p>Proporcionar los valores de $a, $b, $c como sigue:</p>
<p>$a = “ManejadorSQL”;
$b = 'MySQL’;
$c = &$a;</p>

<?php
$a = "ManejadorSQL";
$b = 'MySQL';
$c = &$a;

//Segundo bloque de instrucciones

$a = "PHP server";
$b = &$a;
//impresion de variables
echo 'La variable $a contiene: '.$a;
echo '<br>';
echo 'La variable $b contiene: '.$b;
echo '<br>';
echo 'La variable $c contiene: '.$c;
echo '<br>';

?>