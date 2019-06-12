<?php
function ft_count($tab)
{
	$x = 0;
	foreach($tab as $element)
		$x++;
	return ($x);
}

if ($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === 'jaimelespetitsponeys')
{
	$path = '../img/42.png';
	$type = 'png';
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	echo    
'<html><body>
Hello Zaz<br />
<img src=\'' . $base64 . '\'>
</body></html>
';
}
else
{
	header("WWW-Authenticate: Basic realm=''Member area''");
	header("HTTP/1.0 401 Unauthorized");
	echo
"
<html><body>That area is accessible for members only</body></html>
";
}
?>
