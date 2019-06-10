<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-20
 * Time: 07:49
 */
include_once "Model.php";

class testM extends Model
{
    public function wojewodztwa(){

        $query = "SELECT * FROM wojewodztwa";
        $result = $this->mysqli->query($query);
        $data = array();
        while ($row = $result->fetch_array()) {
            array_push($data,$row);
        }

        return $data;
    }
}