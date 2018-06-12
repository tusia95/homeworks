<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 12.06.2018
 * Time: 17:59
 */
//task1
function printString($strarr, $tojoinstr = false)
{
    foreach ($strarr as $value) {
        echo '<p>' . $value . '</p>';
    }
    if ($tojoinstr) {
        $array_string='';
        foreach ($strarr as $value) {
            $array_string=$array_string.$value;
        }
    }
    return $array_string;
}


$newarray=array('one','two','three');
echo PHP_EOL.printString($newarray, true);

$somearray=array('cat','dog','frog');
echo PHP_EOL.printString($somearray, false);

//task2

function toCalculate($arithmetic_sign, $num1 = 0, $num2 = 0)
{
    $args = func_get_args();
    switch ($arithmetic_sign) {
        case ('-'):
            $minus = $args[1];
            foreach ($args as $i => $value) {
                if ($i != 0) {
                    $minus = $minus - $args[$i + 1];
                    if ($i != 1) {
                        echo "-";
                    }
                    echo $args[$i];
                }
            }
            echo '=';
            echo $minus;
            break;
        case ('/'):
            $divide = $args[1];
            foreach ($args as $i => $value) {
                if ($i != 0) {
                    if ($i < count($args) - 1) {
                        $divide = $divide / $args[$i + 1];
                    }
                    if ($i != 1) {
                        echo "/";
                    }
                    echo $args[$i];
                }
            }
            echo '=';
            echo $divide;
            break;
        case ('+'):
            $plus = $args[1];
            foreach ($args as $i => $value) {
                if ($i != 0) {
                    $plus = $plus + $args[$i + 1];
                    if ($i != 1) {
                        echo "+";
                    }
                    echo $args[$i];
                }
            }
            echo '=';
            echo $plus;
            break;
        case ('*'):
            $multipl = $args[1];
            foreach ($args as $i => $value) {
                if ($i != 0) {
                    if ($i < count($args) - 1) {
                        $multipl = $multipl * $args[$i + 1];
                    }
                    if ($i != 1) {
                        echo "*";
                    }
                    echo $args[$i];
                }
            }
            echo '=';
            echo $multipl.PHP_EOL;
            break;
    }
}

//task3
function task3($num1, $num2)
{
    $args = func_get_args();
    if (count($args)==2) {
        echo '<table border="2px">';

        for ($a=1; $a<=$num1; $a++) {
            echo '<tr>';
            for ($b=1; $b<=$num2; $b++) {
                echo '<td>';
                echo $a*$b;
                echo '</td>';
            }
            echo "</tr>";
        }
    } else {
        echo 'неверное количество параметров, введите 2';
    }
}

//task4

