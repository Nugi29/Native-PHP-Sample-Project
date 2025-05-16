<?php

require_once('genderdao.php');
require_once('employeedao.php');
require_once('gender.php');

// echo(json_encode(GenderDao::getById(2)));
echo(json_encode(EmployeeDao::getAll()));


?>