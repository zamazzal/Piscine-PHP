#!/usr/bin/php
<?php
	date_default_timezone_set('africa/casablanca');
	$fd = fopen("/var/run/utmpx", "r");
	$i = 0;
	while ($ret = fread($fd, 628))
	{
		$rzlt = unpack("a256user/a4id/a32line/ipid/itype/itime", $ret);
		if ($rzlt["type"] == 7)
		{
			$tab[$i]["a"] = trim($rzlt["user"]);
			$tab[$i]["b"] = trim($rzlt["line"]);
			$tab[$i]["c"] = strftime("%b %e %H:%M",$rzlt["time"]);
		}
		$i++;
	}
	fclose($fd);
	function maxln($tab, $key)
	{
		$maxlen = 0;
		foreach ($tab as $element)
		{
			$len = strlen($element[$key]);
			if ($len > $maxlen)
				$maxlen = $len;
		}
		return ($maxlen);
	}
	function show($str, $fw)
	{
		print $str;

		$fw = $fw - strlen($str);
		while ($fw > 0)
		{
			print " ";
			$fw--;
		}
	}
	$maxuser = maxln($tab, "a") + 1;
	$maxtty = maxln($tab, "b") + 2;
	foreach ($tab as $aji)
	{
		show($aji["a"], $maxuser);
		show($aji["b"], $maxtty);
		echo $aji["c"]." ".PHP_EOL;
	}
?>