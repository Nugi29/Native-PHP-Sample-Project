<?php

require_once ('commondao.php');
class GenderDao
{
    public static function getAll()
    {
        $sql = "SELECT * FROM gender";
        $genders = CommonDao::get($sql);
        return $genders;
    }
}
