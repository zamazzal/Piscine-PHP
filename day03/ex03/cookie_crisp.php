<?php
	if ($_GET != NULL && $_GET[action] != NULL)
	{
		if ($_GET[action] === "set" && $_GET[name] != NULL)
		{
			if (!setcookie($_GET[name], $_GET[value], time() + 3600))
				echo "error : the cookie is not set !\n";
		}
		if ($_GET[action] === "get" && $_GET[name] != NULL)
		{
			if ($_COOKIE[$_GET[name]] != NULL)
				echo $_COOKIE[$_GET[name]]."\n";
		}
		if ($_GET[action] === "del" && $_GET[name] != NULL)
		{
			if (!setcookie($_GET[name], NULL))
				echo "error : the cookie is not unset !\n";
		}
	}
?>