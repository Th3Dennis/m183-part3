<?php

Class Job {

    public $name;
    public $details;
    public $dateAndTime;
    public $salaryPerHour;
    public $jobProvider;

    public function __construct($name, $details, $dateAndTime, $salaryPerHour, $jobProvider){

    $this->name = $name;
    $this->details = $details;
    $this->dateAndTime = $dateAndTime;
    $this->salaryPerHour = $salaryPerHour;
    $this->jobProvider = $jobProvider;


    }

}

?>