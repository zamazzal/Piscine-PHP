#!/usr/bin/php
<?php
while (true)
{
	$x = '';
	echo "Enter a number: ";
	$x = fgets(STDIN);
	$x = rtrim($x, "\n");
	if (!feof(STDIN))
	{
		$x = trim($x);
		if ($x != NULL and is_numeric($x))
		{
			if ($x % 2 == 0)
				echo "The number "."$x"." is even\n";
			else if ($x % 2 != 0)
				echo "The number "."$x"." is odd\n";
		}
		else
			echo "'$x' is not a number\n";
	}
	else
	{
		echo "\n";
		exit;
	}
}
?>
