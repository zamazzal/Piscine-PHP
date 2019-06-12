<?php

	if ($_POST['passwd'] == "" or $_POST['submit'] != "OK" or $_POST['login'] == "")
	{
		echo "ERROR\n";
		return ;
	}
	else
	{
		if (file_exists('../private/passwd'))
		{
			$file = unserialize(file_get_contents('../private/passwd'));
			foreach ($file as $table)
			{
				if ($table['login'] == $_POST['login'])
				{
					echo "ERROR\n";
					return ;
				}
			}
		}
		else
		{
			if (!file_exists('../private'))
			{
				mkdir('../private');
			}
		}
		$file[] = [
		'login'	=>	$_POST['login'],
		'passwd'=>	hash('whirlpool', $_POST['passwd']),
		];
		if (file_put_contents('../private/passwd', serialize($file)) !== FALSE)
			echo "OK\n";
	}
?>
