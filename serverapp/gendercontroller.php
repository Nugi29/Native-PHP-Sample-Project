<?php

require_once('genderdao.php');

$genders = GenderDao::getAll();

echo json_encode($genders);

//   1.create genderdao.php
//   2.Define class as "GenderDao"
//   3.Define public static function as "getAll"
//   3.Extract Code base from gendercontroller.php excluding "echo json_encode($genders);" into getAll()
//   4.Apply return statement with variable named as "$geders"
//   5. link the genderdao.php file into gendercontroller.php using require_once()
//   6.Call the static method of genderDao [GenderDao::getAll()]