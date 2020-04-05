<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);


class CsvIterator implements Iterator {
    private $position = 0;
    private $csv;

    public function __construct($csv) 
    {
        $this->csv = file($csv);
    }

    public function rewind() 
    {
        $this->position = 0;
    }

    public function current() 
    {
        $cur = explode(',', $this->csv[$this->position]);
        return '<pre>' . print_r($cur, true) . '</pre>';
    }

    public function key() 
    {
        return $this->position;
    }   

    public function next() 
    {
        
        ++$this->position;
    }

    public function valid() 
    {
       return isset($this->csv[$this->position]); 
    }
}

$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}






// class CsvIterator implements Iterator
// {
//     private $i = 0;
//     private $csv;

//     public function __construct($csv)
//     {
//         $this->csv = file($csv);

//     }

//     public function rewind()
//     {
//         $this->i = 0;
//     }

//     public function current()
//     {
//         $current = explode(',', $this->csv[$this->i]);
//         return '<pre>' . print_r($current, true) . '</pre>';
//     }

//     public function key()
//     {
//         return $this->i;
//     }

//     public function next()
//     {
//         ++$this->i;
//     }

//     public function valid()
//     {
//         return isset($this->csv[$this->i]);
//     }
// }

// $csv = new CsvIterator(__DIR__ . '/cats.csv');

// foreach ($csv as $key => $line) {
//     print_r($line);
// }