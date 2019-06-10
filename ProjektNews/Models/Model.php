<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-20
 * Time: 07:49
 */

class Model
{
    public $mysqli = NULL;
    public function __construct()
    {
        $this->mysqli = new mysqli();
        $this->mysqli->connect("localhost", "root", "", "newsy");
        $this->mysqli->set_charset("utf8");
        return $this->mysqli;
    }


}