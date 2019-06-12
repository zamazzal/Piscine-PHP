#!/usr/bin/php
<?php
if ($argc != 2)
{
    echo("Incorrect Parameters\n");
    return ;
}

$str = sscanf($argv[1], "%f %c %f %s");
if ($str[3] || !is_numeric($str[0]) || !is_numeric($str[2]))
{
    echo "Syntax Error\n";
}
else
{
    $a = $str[0];
    $op = $str[1];
    $b = $str[2];
    if ($op === '+')
        echo(($a + $b) . "\n");
    else if ($op === '-')
        echo(($a - $b) . "\n");
    else if ($op === '*')
        echo(($a * $b) . "\n");
    else if ($op === '/')
        echo(($a / $b) . "\n");
    else if ($op === '%')
        echo(($a % $b) . "\n");
    else
        echo "Syntax Error\n";
}
?>