<?php
/**
 * Created by PhpStorm.
 * User: nbsp
 * Date: 31.07.2018
 * Time: 20:22
 */

/*
1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт,
который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.
*/

echo "<h3> Первое задание </h3>";

$a = rand(-1000, 1000);
$b = rand(-10000, 10000);

if ($a >= 0 && $b >= 0) {
    echo "Разность {$a} и {$b} = " . ($a - $b) . "</br>";
} elseif ($a < 0 && $b < 0) {
    echo "Произведение {$a} и {$b} = " . ($a * $b) . "</br>";
} else {
    echo "Сумма {$a} и {$b} = " . ($a + $b) . "</br>";
}

/*
2. Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.
*/

echo "<h3> Второе задание </h3>";

$a = rand(0, 15);
echo "a =" . $a . "</br>";

switch ($a) {
    case 0:
        echo $a . ',';
        $a++;
    case 1;
        echo $a . ',';
        $a++;
    case 2;
        echo $a . ',';
        $a++;
    case 3;
        echo $a . ',';
        $a++;
    case 4;
        echo $a . ',';
        $a++;
    case 5;
        echo $a . ',';
        $a++;
    case 6;
        echo $a . ',';
        $a++;
    case 7;
        echo $a . ',';
        $a++;
    case 8;
        echo $a . ',';
        $a++;
    case 9;
        echo $a . ',';
        $a++;
    case 10;
        echo $a . ',';
        $a++;
    case 11;
        echo $a . ',';
        $a++;
    case 12;
        echo $a . ',';
        $a++;
    case 13;
        echo $a . ',';
        $a++;
    case 14;
        echo $a . ',';
        $a++;
    case 15;
        echo $a . ',';
}

/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.
*/

echo "<h3> Третье задание </h3>";

$x = rand(-1000, 1000);
$y = rand(1000, -1000);

echo "\$x = {$x} и \$y = {$y} </br>";

function addition($x, $y)
{
    return $x + $y;
}

echo 'Функция сложения (addition) $x и $y вернула результат равный = ' . addition($x, $y) . ".</br>";

function subtraction($x, $y)
{
    return $x - $y;
}

echo 'Функция вычитания (subtraction) $x и $y вернула результат равный = ' . subtraction($x, $y) . ".</br>";

function multiplication($x, $y)
{
    return $x * $y;
}

echo 'Функция умножения (multiplication) $x и $y вернула результат равный = ' . multiplication($x, $y) . ".</br>";

function division($x, $y)
{
    if ($y == 0) {
        $result = "Делить на ноль нельзя";
    } else {
        $result = $x / $y;
    }
    return $result;
}

echo 'Функция деления (division) $x и $y вернула результат равный = ' . division($x, $y) . ".</br>";

/*
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

echo "<h3> Четвертое задание </h3>";

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'addition';
            $res = addition($arg1, $arg2);
            break;
        case 'subtraction';
            $res = subtraction($arg1, $arg2);
            break;
        case 'multiplication';
            $res = multiplication($arg1, $arg2);
            break;
        case 'division';
            $res = division($arg1, $arg2);
            break;
        default:
            $res = "Не верная операция";
    }
    return $res;
}

echo "Результат работы функции subtraction где x = {$x}, а y = {$y} равен " . mathOperation($x, $y, 'subtraction');;

/*
5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи
встроенных функций PHP. Шаблон должен читаться из файла tpl, в нем не должно быть ни строчки php-кода.
Весь код в index.php.
*/
echo "<h3> Пятое задание </h3>";
echo "<a href='./site'>Жми сюда чтобы посмотреть</a>";

/*
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
где $val – заданное число, $pow – степень.*/

echo "<h3> Шестое задание </h3>";

/**
 * @param $val {int} - значение
 * @param $pow {int} - степень
 * @return float|int - результат
 */
function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } elseif ($pow < 0) {
        return power(1 / $val, -$pow);
    } elseif ($val == 0) {
        return 0;
    }
    return $val * power($val, $pow - 1);
}

echo "Результат работы функции power = " . power(3, 2);

/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/

echo "<h3> Седьмое задание </h3>";

/**
 * Функция вычисляет текущее время и возвращает его в формате с правильными склонениями
 * @param $num {int} - число
 * @param $arrayEndings {int} - ключ массива окончаний
 * @return mixed {string} - окончания
 */
function getTimeNow($num, $arrayEndings)
{
    if ($num >= 11 && $num <= 19) {
        $ending = $arrayEndings[2];
    } else {
        $i = $num % 10;
        switch ($i) {
            case 1:
                $ending = $arrayEndings[0];
                break;
            case 2:
            case 3:
            case 4:
                $ending = $arrayEndings[1];
                break;
            default:
                $ending = $arrayEndings[2];
        }
    }
    return $ending;
}

// Устанавливаем временную зону по умолчанию для всех функций даты/времени в скрипте
date_default_timezone_set("Europe/Moscow");
// Получаем текщие часы
$hours = date('H');
// Получаем текущие минуты
$minutes = date('i');

// Выводим всю нашу красоту
echo 'Текущее время: ' . $hours . ' ' . getTimeNow($hours, array('час', 'часа', 'часов')) . ' ' .
    $minutes . ' ' . getTimeNow($minutes, array('минута', 'минуты', 'минут'));