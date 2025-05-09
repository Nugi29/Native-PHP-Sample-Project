<?php
class CommonDao
{

  public static function get($sql)
  {

        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $database = "ems";

        $dbconn = new mysqli($servername, $username, $password, $database);

        if (!$dbconn) {
            die("Connection failed: " . $dbconn->connect_error);
        }

        $data = array();

        $result = $dbconn->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
        return $data;
  }
}
