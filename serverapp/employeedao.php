<?php
require_once('commondao.php');
require_once('genderdao.php');
require_once('employee.php');
require_once('gender.php');


class EmployeeDao
{
    public static function getAll()
    {

        $sql = "SELECT * FROM employee";
        $result = CommonDao::get($sql);

        $employees = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $employee = new Employee();
            $employee->setId($row['id']);
            $employee->setName($row['name']);
            $employee->setNic($row['nic']);
            // $employee->setGender($row['gender_id']);
            $employee->setGender(GenderDao::getById($row['gender_id']));


            array_push($employees, $employee);
        }
        return $employees;
    }
}
