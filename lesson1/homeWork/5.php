<?php
/**
 * Developed by: &nbsp;
 * Date: 11.08.2018
 */

/**
 * Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b= 2,
 * надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя.
 */

$a = 2;
$b = 4;

echo "Вначале было a={$a}, b={$b}.";
$a *= $b;
$b = $a / $b;
$a = $a / $b;
echo '</br></br>';
echo 'Произошла магия 
<pre>$a *= $b;
$b = $a / $b;
$a = $b / $a;</pre>';
echo "И мы получаем a={$a}, b={$b}";


