#!/usr/bin/php
<?php
function x1($str) {
	return ($str[1].strtoupper($str[2]).$str[3]);
}

function preg1($str)
{
	$str[0] = preg_replace_callback("/(title=\")(.*?)(\")/s", x1, $str[0]);
	$str[0] = preg_replace_callback("/(>)(.*?)(<)/s", x1, $str[0]);
	return ($str[0]);
}

if ($argc == 2 && file_exists($argv[1]))
{
	$fd = fopen($argv[1], 'r');
    $html = "";
    while ($fd && !feof($fd))
        $html .= fgets($fd);
	$html = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/s", preg1, $html);
    echo $html;
}
?>