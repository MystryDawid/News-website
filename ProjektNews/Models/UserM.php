<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-18
 * Time: 08:06
 */

class UserM extends Model
{

    public function Register(){
        if(!$this->mysqli->query("SELECT login FROM uzytkownicy WHERE login = "."'".$_POST["login"]."'")->fetch_array()[0]){
            $haslo = md5($_POST["password"]);
            return $this->mysqli->query("INSERT INTO `uzytkownicy`(`login`, `haslo`, `dataUrodzenia`, `plec`, `wojewodztwo`, `powiat`, `miejscowosc`, `rola`, `zbanowany`) VALUES ("."'".$_POST["login"]."','".$haslo."','".$_POST["date"]."','".$_POST["plec"]."',".$_POST["wojewodztwo"].",".$_POST["powiat"].",'".$_POST["miejscowosc"]."',1,0)");
        }
    }

    public function Login(){
        $haslo = md5($_POST["password"]);
        $result = $this->mysqli->query("SELECT rola,uzytkownicyid FROM `uzytkownicy` WHERE `login` = '".$_POST["login"]."'"." AND `haslo` = "."'".$haslo."' AND zbanowany = 0");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function WszystkoZProfiluX(){
        $result = $this->mysqli->query("SELECT * FROM `uzytkownicy` WHERE `uzytkownicyid` = ".$_SESSION['id']);
        $row = $result->fetch_array();
        return $row;
    }

    public function Edycja(){
        $haslo = md5($_POST["password"]);
        $this->mysqli->query("UPDATE `uzytkownicy` SET login = '".$_POST["login"]."',`haslo` = '".$haslo."',`dataUrodzenia` = '".$_POST["date"]."', `plec` = '".$_POST["plec"]."', `wojewodztwo` = ".$_POST["wojewodztwo"].", `powiat` = ".$_POST["powiat"].", `miejscowosc` = '".$_POST["miejscowosc"]."' WHERE uzytkownicyid = ".$_SESSION['id']);
    }

    public function Wszyscy(){
        $result = $this->mysqli->query("SELECT `u`.`uzytkownicyid`,`u`.`login`,`u`.`dataUrodzenia`,`u`.`plec`,`u`.`miejscowosc`,`u`.`rola`,`u`.`zbanowany`,`w`.`nazwa` as `wojewodztwo`,`p`.`nazwa` as `powiat` FROM `uzytkownicy` `u` INNER JOIN `wojewodztwa` `w` ON `w`.`wojewodztwaid` = `u`.`wojewodztwo` INNER JOIN
`powiaty` `p` ON `u`.`powiat` = `p`.`powiatyid`");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function Ban(){
        $this->mysqli->query("UPDATE `uzytkownicy` SET zbanowany = 1 where uzytkownicyid = ".$_POST['uzytkownicyid']);
    }

    public function UnBan(){
        $this->mysqli->query("UPDATE `uzytkownicy` SET zbanowany = 0");
    }

    public function CzyIstniejeTakieKonto(){
        print_r($this->mysqli->query("SELECT uzytkownicyid FROM uzytkownicy WHERE login = "."'".$_GET["login"]."'")->fetch_array()[0]);
    }




}