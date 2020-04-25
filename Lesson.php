<?php

namespace homework;
class Lesson
{
    private $teacher;
    private $Students;
    private $Classroom;

    /**
     * Lesson constructor.
     * @param $teacher
     * @param $Students
     * @param $Classroom
     */
    public function __construct($teacher, $Students, $Classroom)
    {
        $this->teacher = $teacher;
        $this->Students = $Students;
        $this->Classroom = $Classroom;
    }


    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->Students;
    }

    /**
     * @param mixed $Students
     */
    public function setStudents($Students)
    {
        $this->Students = $Students;
    }

    /**
     * @return mixed
     */
    public function getClassroom()
    {
        return $this->Classroom;
    }

    /**
     * @param mixed $Classroom
     */
    public function setClassroom($Classroom)
    {
        $this->Classroom = $Classroom;
    }


}