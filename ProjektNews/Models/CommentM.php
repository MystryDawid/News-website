<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-24
 * Time: 07:42
 */

class CommentM extends Model
{

    public function dodawanie()
    {
        $this->mysqli->query(
            "INSERT INTO `komentarz`(`artykul`, `data`, `autor`, `ocena`, `tresc`, `usuniety`)
                    VALUES (".$_POST["artykul"].",NOW(),".$_SESSION["id"].",".$_POST["ocena"].",'".$_POST["tresc"]."',0)");
    }

    public function komentarzeArtykulu(){
        $result = $this->mysqli->query(
            "SELECT komentarzid,autor,login,tresc,ocena FROM `komentarz` INNER JOIN `uzytkownicy` 
            on autor = `uzytkownicyid` WHERE artykul = $_GET[id] AND usuniety = 0 ORDER BY komentarzid DESC");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function usuwanie(){
        $result = $this->mysqli->query(
            "UPDATE komentarz SET usuniety = 1 WHERE komentarzid = $_GET[id]");
        return $result;
    }

    public function modyfikowanie(){
        $result = $this->mysqli->query(
            "UPDATE komentarz SET tresc = '".$_POST["tresc"]."',ocena = ".$_POST["ocena"]." WHERE komentarzid = ".$_POST['idk']." ");
        return $result;
    }

    public function jedenKomentarzArtykulu(){
        $result = $this->mysqli->query(
            "SELECT komentarzid,autor,tresc,ocena FROM `komentarz` WHERE komentarzid = $_GET[idk]");
        return $result->fetch_array();
    }
}