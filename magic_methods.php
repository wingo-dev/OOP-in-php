<?php

class Test
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "My name is" . $this->name;
    }

}

$obj = new Test("Tim");
echo $obj;
// __toString allows object to string.