<?php

class Test
{
    public $name;

    public function __invoke()
    {
        echo "I can act as a function now...";
    }

}


$o = new Test;

$o();