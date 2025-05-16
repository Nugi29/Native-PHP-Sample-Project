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

    $result = $dbconn->query($sql);

    return $result;
  }
}
