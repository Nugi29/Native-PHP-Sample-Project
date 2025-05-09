<?php

require_once 'employeedao.php';

$employees = EmployeeDao::getAll();

echo json_encode($employees);
