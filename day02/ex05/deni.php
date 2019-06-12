#!/usr/bin/php
<?php
function checkindex($index)
{
    if ($index === "nom")
        return (0);
    if ($index === "prenom")
        return (1);
    if ($index === "mail")
        return (2);
    if ($index === "IP")
        return (3);
    if ($index === "pseudo")
        return (4);
    return (-1);
}

if ($argc != 3)
   exit();
function ft_split($str, $d)
{
   $array = explode($d, $str);
   $res = [];
   foreach ($array as $var)
   {
       if (trim($var) != '')
           $res[] = rtrim($var);
   }
   return ($res);
}

$data = [];
$keys = [];

$filename = $argv[1];
$key = $argv[2];
if (!file_exists($filename))
    exit;
$file = fopen($filename, 'r');
while ($line = fgets($file))
{
   $data[] = ft_split($line, ';');
}

$keys = array_shift($data);
$x = checkindex($key);
if ($x === -1)
    exit();
foreach ($data as $element)
{
    $nom[$element[$x]] = $element[0];
    $prenom[$element[$x]] = $element[1];
    $mail[$element[$x]] = $element[2];
    $IP[$element[$x]] = $element[3];
    $pseudo[$element[$x]] = $element[4];
}

function getinput()
{
    echo "Enter your command: ";
    $line = fgets(STDIN);
    if ($line)
        return ($line);
    return (0);
}

while ($line = getinput())
{
    eval ("$line");
}
echo"\n";
