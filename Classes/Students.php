<?php

class Student extends Person{
    public $attendClass,$schoolHour,$studyHour;

    public function __construct($Name, $Age, $Gender,$attendClass,$schoolHour,$studyHour)
    {
        parent::__construct($Name, $Age, $Gender);
        $this->attendClass = $attendClass;
        $this->schoolHour = $schoolHour;
        $this->studyHour = $studyHour;
    }
}