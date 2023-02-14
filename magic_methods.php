<?php

class Student
{
    private $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function __debugInfo()
    {
        return [
            'student Id' => $this->$id * 2,
            'address' => 'adb'
        ];
    }

}