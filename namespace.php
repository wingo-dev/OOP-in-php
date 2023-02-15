<?php
namespace MyProject\SubNS;

include 'TestNSClass.php';
include 'TextNSClass1.php';

use MyProject\SubNS\TestClass as TC1;
use MyProject\TestClass as TC2;

$testObjOne = new TC1();
$testObjTwo = new TC2();