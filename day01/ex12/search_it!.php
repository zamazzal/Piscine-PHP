#!/usr/bin/php
<?php

function ft_find($str)
{
	$i = 0;
	while($str[$i] != NULL)
	{
		if ($str[$i] == ":")
			return ($i);
		$i++;
	}
	return (0);
}

if ($argc > 2)
{
	$x = 2;
	foreach ($argv as $element)
	{
		$ff = ft_find($element);
		$cmp = substr($element, 0, $ff);
		if ($argv[1] === $cmp)
			$rzlt = substr($element, ($ff + 1), (strlen($element) - $ff));
	}
	if ($rzlt != NULL)
		echo "$rzlt\n";
}
?>