<?php
namespace homework;

class Subject
{
    var $subjectName;
    var $teachers;

    /**
     * Subject constructor.
     * @param $subjectName
     * @param $teachers
     */
    public function __construct($subjectName, $teachers)
    {
        $this->subjectName = $subjectName;
        $this->teachers = $teachers;
    }

    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param mixed $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @return mixed
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * @param mixed $teachers
     */
    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;
    }


}