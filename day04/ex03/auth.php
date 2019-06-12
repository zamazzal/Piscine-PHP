<?php
function auth($login, $passwd)
{
	if (($data = file_get_contents('../private/passwd')) == NULL)
	{
		echo "ERROR\n";
		return ;
	}
	else
	{
		$file = unserialize(file_get_contents('../private/passwd'));
	}
	foreach ($file as $table)
	{
		if ($table['login'] == $login && $table['passwd'] == hash('whirlpool', $passwd))
		{
			return (TRUE);
		}
	}
	return (FALSE);
}
?>