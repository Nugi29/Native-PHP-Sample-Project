<?php
require_once ('commondao.php');

class EmployeeDao
{
    public static function getAll()
    {

        $sql = "SELECT * FROM employee";
        $employees = CommonDao::get($sql);
        return $employees;
    }
}
