<?php
require('classes.php');

$st = new Student("dolly", '001');
var_dump($st->getInfo());
echo serialize($st);
