<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);


$csv = file(__DIR__ . '/cats.csv');

function getCsvLine(array $row_array)
{
    for ($i = 0; $i < count($row_array); $i++) {
        yield '<pre>' . print_r(explode(',', $row_array[$i]),true) . '</pre>';
    }
}

$generator = getCsvLine($csv);

foreach ($generator as $key => $row) {
    print_r($row);
}