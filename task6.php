<?php

trait Trait1
{
    public function method()
    {
        return 1;
    }
}

trait Trait2
{
    public function method()
    {
        return 2;
    }
}

trait Trait3
{
    public function method()
    {
        return 3;
    }
}

class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2, Trait3;
        Trait1::method as public one;
        Trait2::method as public two;
        Trait3::method as public three;
    }

    public function getSum() {
        return $this->one() + $this->two() + $this->three();
    }
}

$test = new Test();

echo $test->getSum();