#!/usr/bin/php
<?php

function ft_split($str, $d)
{
   $array = explode($d, $str);
   $res = [];
   foreach ($array as $var)
   {
       if (trim($var) != '')
           $res[] = trim($var);
   }
   return ($res);
}
function ft_hourtotime($string)
{
   $milisec = explode(",", $string);
   $time   = explode(":", $milisec[0]);

   $hour   = $time[0] * 60 * 60 * 1000;
   $minute = $time[1] * 60 * 1000;
   $sec    = $time[2] * 1000;
   $mili = $milisec[1];

   $result = $hour + $minute + $sec + $mili;

   return ($result);
}

   if ($argc != 2)
       exit ;
   $file = fopen($argv[1], 'r');
   $x = 0;
   $i=0;
   while ($line = fgets($file))
   {
       if ($x > 2)
       {
           $data[] = $info;
           $info = NULL;
           $x = 0;
       }
       else
       {
           $info[] .= $line;
           $x++;
           $i++;
       }
   }
   if ($x > 2)
   {
       $data[] = $info;
       $info = NULL;
       $x = 0;
   }
   $x = 0;
   foreach($data as $element)
   {
       $element[1] = trim(ft_split($element[1], '-')[0]);
       $data[$x][3] = ft_hourtotime($element[1]);
       $x++;
   }
   usort($data, function ($a, $b) {
       if ($a[3] > $b[3])
           return (1);
       else if ($a[3] < $b[3])
           return (-1);
       return (0);
   });
   $x = 1;
   foreach ($data as $elem) {
       print($x . PHP_EOL);
       print($elem[1]);
       print($elem[2]);
       $x++;
   }
   fclose($file);
?>