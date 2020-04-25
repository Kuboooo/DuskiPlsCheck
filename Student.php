<?php

namespace homework;
include("Person.php");
class Student extends Person
{
    private $currentStudyYear;

    /**
     * Student constructor.
     * @param $currentStudyYear
     * @param $firstName
     * @param $lastName
     */
    public function __construct($currentStudyYear, $firstName, $lastName)
    {
        parent::__construct($firstName, $lastName);
        $this->currentStudyYear = $currentStudyYear;
    }

    public function toString(){
        echo $this->getFirstName();
        echo $this->getLastName();
        echo $this->getCurrentStudyYear();
    }

    /**
     * @return mixed
     */
    public function getCurrentStudyYear()
    {
        return $this->currentStudyYear;
    }

    /**
     * @param mixed $currentStudyYear
     */
    public function setCurrentStudyYear($currentStudyYear)
    {
        $this->currentStudyYear = $currentStudyYear;
    }



}