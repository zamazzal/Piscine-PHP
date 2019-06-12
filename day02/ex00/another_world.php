#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		preg_match_all("/[!-~]+/", $argv[1], $res);
		$done = array_slice($res[0], 0);
		$xmax = sizeof($done);
		if ($xmax == 0)
			exit (0);
		$x = 0;
		while ($x < $xmax)
		{
			echo "$done[$x]";
			if ($x + 1 < $xmax)
				echo " ";
			$x++;
		}
		echo "\n";
	}
?>