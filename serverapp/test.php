<?php

require_once('genderdao.php');
require_once('employeedao.php');
require_once('gender.php');

// echo(json_encode(GenderDao::getById(2)));
// echo(json_encode(EmployeeDao::getAll()));
// echo(json_encode(EmployeeDao::getAllByName('Ruwan Hettiarachchi')));
// echo(json_encode(EmployeeDao::getAllByGender(GenderDao::getById(2))));
echo(json_encode(EmployeeDao::getByNameAndGender('Ruwan',GenderDao::getById(1))));

?>