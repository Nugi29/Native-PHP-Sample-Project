<?php

require_once('commondao.php');
require_once('gender.php');
class GenderDao
{

    private static function setData($row)
    {
        $gender = new Gender();
        $gender->setId($row['id']);
        $gender->setName($row['name']);

        return $gender;
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM gender";
        $result = CommonDao::get($sql);

        $genders = array();

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($genders, self::setData($row));
        }

        return $genders;
    }

    public static function getById($id)
    {
        $sql = 'SELECT * FROM gender WHERE id = ' . $id;
        $result = CommonDao::get($sql);

        $row = mysqli_fetch_assoc($result);

        return self::setData($row);
    }
}
