<?php

class Employee
{
    public $id;
    public $name;

    public $nic;

    public $gender;

    public function __construct() {}

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getNic()
    {
        return $this->nic;
    }
    public function getGender()
    {
        return $this->gender;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setNic($nic)
    {
        $this->nic = $nic;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
