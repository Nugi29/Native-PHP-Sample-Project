<?php
class EmployeeDao
{
    public static function getAll()
    {

        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $database = "ems";

        $dbconn = new mysqli($servername, $username, $password, $database);

        if (!$dbconn) {
            die("Connection failed: " . $dbconn->connect_error);
        }

        $employees = array();

        $sql = "SELECT * FROM gender";
        $result = $dbconn->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($employees, $row);
        }
        return $employees;
    }
}
