<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$regular = '/\s{2,}/'; 

$spacebar = ' ';

$example = 'Amy   normally    hated Monday     mornings, but this year   was different.';

$replace_spaces = preg_replace($regular, $spacebar, $example);
echo $replace_spaces;
