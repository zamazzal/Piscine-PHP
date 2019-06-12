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
	$i = 1;
	while ($i < $argc)
	{
		if ($i == 1)
			$tab = ft_ezzsplit($argv[$i]);
		else
			$tab = array_merge($tab, ft_ezzsplit($argv[$i]));
		$i++;
	}
	sort($tab);
	foreach ($tab as $str)
	{
		echo "$str\n";
	}
}
?>
