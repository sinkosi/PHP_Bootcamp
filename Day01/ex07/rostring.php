#!/usr/bin/php
<?php
if (isset($argv[1]))
{
    $str = array_filter(explode(' ', $argv[1]));
    $rostring = array_shift($str);
    $i = 0;
    while ($i < sizeof($str))
    {
        print($str[$i]." ");
        $i++;
    }
    print ($rostring);
}
?>