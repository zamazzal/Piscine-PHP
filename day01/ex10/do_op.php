#!/usr/bin/php
<?php

if ($argc == 4)
{
	$x = 0;
	while ($argv[2][$x] != NULL && $argv[2][$x] != '+' && $argv[2][$x] != '-' && $argv[2][$x] != '*' && $argv[2][$x] != '/' && $argv[2][$x] != '%')
		$x++;
	if (($argv[2][$x] == '/' && $argv[3] == 0) || ($argv[2][$x] == '%' && $argv[3] == 0))
		exit;
	switch ($argv[2][$x])
	{
		case '+':
			echo $argv[1] + $argv[3]."\n";
			break;
		case "-":
			echo $argv[1] - $argv[3]."\n";
			break;
		case "*":
			echo $argv[1] * $argv[3]."\n";
			break;
		case "/":
			echo $argv[1] / $argv[3]."\n";
			break;
		case "%":
			echo $argv[1] % $argv[3]."\n";
			break;
	}
}
else
	echo "Incorrect Parameters\n";

?>