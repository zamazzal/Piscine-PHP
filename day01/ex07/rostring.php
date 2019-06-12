#!/usr/bin/php
<?php
function ft_ezzsplit($entr)
{
	$tab = explode(" ", $entr);
	$tab = array_diff($tab, array(''));
	$tab = array_slice($tab, 0);
	return($tab);
}

if ($argc > 1)
{
	$argv[1] = trim($argv[1]);
	$tab = ft_ezzsplit($argv[1]);
	$imax = sizeof($tab);
	if ($imax == 0)
		exit ;
	$new = array_slice($tab, 1);
	$new[] = $tab[0];
	$i = 0;
	while ($i < $imax)
	{
		echo "$new[$i]";
		if ($i + 1 < $imax)
			echo " ";
		$i++;
	}
	echo "\n";
}
?>
