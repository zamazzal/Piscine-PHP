#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
function ft_ezzsplit($entr, $limit)
{
	$tab = explode($limit, $entr);
	$tab = array_diff($tab, array(''));
	$tab = array_slice($tab, 0);
	return($tab);
}

function isvalid($str)
{
	$test = preg_match("/(^[Ll]undi|^[Mm]ardi|^[Mm]ercredi|^[Jj]eudi|^[Vv]endredi|^[Ss]amedi|^[Dd]imanche)+( [1-9]{1} | [0-9]{2} )+([Jj]anvier|[Ff]évrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre)+( [0-9]{4} )+([0-9]{2}:[0-9]{2}:[0-9]{2})$/", $str);
	return ($test);
}

function checkform($str)
{
	if (preg_match("/[Jj]anvier/", $str))
		return (1);
	if (preg_match("/[Ff]évrier/", $str))
		return (2);
	if (preg_match("/[Mm]ars/", $str))
		return (3);
	if (preg_match("/[Aa]vril/", $str))
		return (4);
	if (preg_match("/[Mm]ai/", $str))
		return (5);
	if (preg_match("/[Jj]uin/", $str))
		return (6);
	if (preg_match("/[Jj]uillet/", $str))
		return (7);
	if (preg_match("/[Aa]oût/", $str))
		return (8);
	if (preg_match("/[Ss]eptembre/", $str))
		return (9);
	if (preg_match("/[Oo]ctobre/", $str))
		return (10);
	if (preg_match("/[Nn]ovembre/", $str))
		return (11);
	if (preg_match("/[Dd]écembre/", $str))
		return (12);
}

if ($argc > 1)
{
	if (isvalid($argv[1]) == 0)
	{
		echo "Wrong Format\n";
		exit ;
	}
	$tab = ft_ezzsplit($argv[1], " ");
	$tab[2] = checkform($tab[2]);
	$time = ft_ezzsplit($tab[4], ":");
	if ($time[0] < 0 or $time[0] > 24)
	{
		echo "Wrong Format\n";
		exit ;
	}
	if ($time[1] < 0 or $time[1] > 59)
	{
		echo "Wrong Format\n";
		exit ;
	}
	if ($time[2] < 0 or $time[2] > 59)
	{
		echo "Wrong Format\n";
		exit ;
	}
	if ($tab[2] < 1 or $tab[2] > 12)
	{
		echo "Wrong Format\n";
		exit ;
	}
	if ($tab[3] < 1970 or $tab[3] > 2038)
	{
		echo "Wrong Format\n";
		exit ;
	}
	if ($tab[1] < 1 or $tab[1] > 31)
	{
		echo "Wrong Format\n";
		exit ;
	}
	if ($tab[3] < 1)
	{
		echo "Wrong Format\n";
		exit ;
	}
	$rzlt = mktime($time[0], $time[1], $time[2], $tab[2], $tab[1], $tab[3]);
	echo "$rzlt\n";
}
?>