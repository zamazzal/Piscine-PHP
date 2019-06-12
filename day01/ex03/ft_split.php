<?php
	function ft_split($entr)
	{
		$tab = explode(" ", $entr);
		sort($tab);
		$tab = array_diff($tab, array(''));
		$tab = array_slice($tab, 0);
		return($tab);
	}
?>
