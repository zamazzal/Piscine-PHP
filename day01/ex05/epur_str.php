#!/usr/bin/php
<?php
function ft_ezzsplit($entr)
{
	$tab = explode(" ", $entr);
	$tab = array_diff($tab, array(''));
	$tab = array_slice($tab, 0);
	return($tab);
}

if ($argc == 2)
{
	$x = 0;
	$last = ft_ezzsplit($argv[1]);
	$xmax = sizeof($last);
	if ($xmax == 0)
		exit ;
	while ($x < $xmax)
	{
		echo "$last[$x]";
		if (($x + 1) != $xmax)
			echo " ";
		$x++;
	}
	echo "\n";
}
?>