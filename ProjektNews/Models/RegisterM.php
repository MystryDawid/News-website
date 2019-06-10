<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-26
 * Time: 07:36
 */
class RegisterM extends Model
{

    public function Register(){
        $haslo = md5($_POST["password"]);
        $this->mysqli->query("INSERT INTO `uzytkownicy`(`login`, `haslo`, `dataUrodzenia`, `plec`, `wojewodztwo`, `powiat`, `miejscowosc`, `rola`, `zbanowany`) VALUES ("."'".$_POST["login"]."','".$haslo."','".$_POST["date"]."','".$_POST["plec"]."',".$_POST["wojewodztwo"].",".$_POST["powiat"].",'".$_POST["miejscowosc"]."',1,0)");
    }
}
