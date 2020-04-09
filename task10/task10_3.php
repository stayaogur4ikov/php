<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$get_index_string = file_get_contents(__DIR__ . '/index.html'); /**task 10_3 */

$string1 = '/<[a-z]{5}>(.+)<\/[a-z]{5}>/mu';

preg_match_all($string1, $get_index_string, $matches);

echo '<pre>'. print_r($matches[1][0],true)  . '</pre>';
