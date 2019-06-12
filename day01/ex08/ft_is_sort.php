<?php
function ft_is_sort($tab)
{
	$sorted = $tab;
	$rsorted = $tab;
	sort($sorted);
	rsort($rsorted);
	$x = 0;
	$xmax = sizeof($tab);
	while ($x < $xmax)
	{
		if ($tab[$x] != $sorted[$x] && $tab[$x] != $rsorted[$x])
			return (0);
		$x++;
	}
	return (1);
}
?>
