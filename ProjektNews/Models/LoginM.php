<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-26
 * Time: 08:49
 */

class LoginM extends Model
{
    public function Login(){
        $haslo = md5($_POST["password"]);
        $result = $this->mysqli->query("SELECT rola,uzytkownicyid FROM `uzytkownicy` WHERE `login` = '".$_POST["login"]."'"." AND `haslo` = "."'".$haslo."'");
        return $result;
    }
}