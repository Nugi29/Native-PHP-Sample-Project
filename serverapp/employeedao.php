<?php
require_once('commondao.php');
require_once('genderdao.php');
require_once('employee.php');
require_once('gender.php');


class EmployeeDao
{
    private static function setData($row)
    {
        $employee = new Employee();
        $employee->setId($row['id']);
        $employee->setName($row['name']);
        $employee->setNic($row['nic']);
        // $employee->setGender($row['gender_id']);
        $employee->setGender(GenderDao::getById($row['gender_id']));

        return $employee;
    }
    public static function getAll()
    {

        $sql = "SELECT * FROM employee";
        $result = CommonDao::get($sql);

        $employees = array();

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($employees, self::setData($row));
        }
        return $employees;
    }

    public static function getAllByName($name)
    {

        $sql = "SELECT * FROM employee WHERE name LIKE '%" . $name . "%'  ";
        // $sql = "SELECT * FROM employee WHERE name = '" . $name . "' ";

        $result = CommonDao::get($sql);

        $employees = array();

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($employees, self::setData($row));
        }
        return $employees;
    }

    public static function getAllByGender($gender)
    {

        $sql = "SELECT * FROM employee WHERE gender_id =" . $gender->id;

        $result = CommonDao::get($sql);

        $employees = array();

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($employees, self::setData($row));
        }
        return $employees;
    }

    public static function getByNameAndGender($name, $gender)
    {

        $sql = "SELECT * FROM employee WHERE gender_id =" . $gender->getId() . " AND name LIKE '%" . $name . "%'  ";

        $result = CommonDao::get($sql);

        $employees = array();

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($employees, self::setData($row));
        }
        return $employees;
    }

    public static function addEmployee($employee)
    {
        $name = $employee->getName();
        $gender = $employee->getGender()->getId();
        $nic = $employee->getNic();

        $sql = "INSERT INTO employee (name, nic, gender_id) VALUES ('$name', '$nic', $gender)";

        $result = CommonDao::get($sql);
        
        return $result;
    }

    public static function updateEmployee($employee)
    {
        $id = $employee->getId();
        $name = $employee->getName();
        $gender = $employee->getGender()->getId();
        $nic = $employee->getNic();

        $sql = "UPDATE employee SET name = '$name', nic = '$nic', gender_id = $gender WHERE id = $id";

        $result = CommonDao::get($sql);
        
        return $result;
    }
}
