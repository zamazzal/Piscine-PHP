<?php
	if ($_POST['oldpw'] == "" or $_POST['submit'] != "OK" or $_POST['login'] == "" or $_POST['newpw'] == "")
	{
		echo "ERROR\n";
		return ;
	}
	else
	{
		if (($data = file_get_contents('../private/passwd')) == NULL)
		{
			echo "ERROR\n";
			return ;
		}
		else
		{
			$file = unserialize($data);
		}
		foreach ($file as $key => $table)
		{
			if ($table['login'] == $_POST['login'] && $table['passwd'] == hash('whirlpool', $_POST['oldpw']))
			{
				$file[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				file_put_contents("../private/passwd", serialize($file));
				echo "OK\n";
				return ;
			}
		}
		echo "ERROR\n";
	}
?>