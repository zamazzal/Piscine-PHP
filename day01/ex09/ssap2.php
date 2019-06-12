#!/usr/bin/php
<?PHP

function ft_strlen($str)
{
   $i = 0;
   while ($str[$i] != NULL) {
       $i++;
   }
   return $i;
}

function ft_split($entr)
{
	$tab = explode(" ", $entr);
	sort($tab);
	$tab = array_diff($tab, array(''));
	$tab = array_slice($tab, 0);
	return($tab);
}

function	prosort($str1, $str2)
{
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	$stru1 = strtoupper($str1);
	$stru2 = strtoupper($str2);
	$len1 = ft_strlen($str1);
	$len2 = ft_strlen($str2);
	$i = 0;
	while (($i < $len1) && ($i < $len2))
	{
		$posa = strpos($chars, $stru1[$i]);
		$posb = strpos($chars, $stru2[$i]);
		if ($posa < $posb)
			return (false);
		else if ($posa > $posb)
			return (true);
		$i++;
	}
	if ($len1 < $len2)
		return (false);
	else
		return (true);
}

function	ft_print($array)
{
	foreach ($array as $element)
	{
		echo $element."\n";
	}
}

if ($argc > 1)
{
	$i = 1;
	while ($i < $argc)
	{
		$string .= " ".$argv[$i]." ";
		$i++;
	}
	$new = trim($string);
	while (strpos($new, "  "))
		$new = str_replace("  ", " ", $new);
	$tab = ft_split($new);
	usort($tab, "prosort");
	ft_print($tab);
}
?>
