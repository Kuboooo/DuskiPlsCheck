<?php

namespace homework;

include("Person.php");
class Teacher extends Person
{
    private $subjects;

    public function toString(){
        echo $this->subjects;
    }
}