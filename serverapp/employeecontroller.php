<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "ems";

$dbconn = new mysqli($servername, $username, $password, $database);

if (!$dbconn) {
    die("Connection failed: " . $dbconn->connect_error);
}

$genders = array();

$sql = "SELECT * FROM employee";
$result = $dbconn->query($sql);

while ($row = mysqli_fetch_assoc($result)) {
    array_push($genders, $row);
}

echo json_encode($genders);
