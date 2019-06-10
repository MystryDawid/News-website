<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-09
 * Time: 09:31
 */
error_reporting(0);
class ArtykulyM extends Model
{
    public function wszystkie(){
        $result = $this->mysqli->query("SELECT * FROM `artykuly`");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function wszystkieSortowanie(){
        $result = $this->mysqli->query(
            "SELECT * FROM `artykuly` WHERE `dataUkazania` < NOW() ORDER BY `dataUkazania` ASC");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function dodawanie()
    {
        print_r($_POST);
        $id = ($this->mysqli->query("SELECT MAX(`artykulyid`) as id FROM `artykuly`")->fetch_array()[0]) + 1;
        $target_Path = "images/".$id."/";
        $target_Path = $target_Path."image.jpg";
        mkdir("images/".$id);
        move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
        $result = $this->mysqli->query(
            "INSERT INTO `artykuly`(`dataUkazania`, `autor`, `tytul`, `tresc`, `obrazek`,`usuniety`)
                    VALUES ("."'".$_POST["time"]."',".$_SESSION['id'].",
                    '".$_POST["title"]."','".$_POST["tresc"]."','"."$target_Path"."',0)");
        if($result){
            header('Location: http://localhost/ProjektNews/index.php');
        }else{
            echo "Błąd podczas dodawania, spróbuj ponowanie.";
        }
    }

    public function wszystkieSortowanieXNaStronie(){
        $offset = $_GET['ileNaStronie'] * ($_GET['Strona'] - 1);
        $result = $this->mysqli->query(
            "SELECT `autor`,`artykulyid`, `dataUkazania`, `login` , `tytul`, 
            SUBSTRING(`tresc`,1,50) as `tresc`, `obrazek` FROM `artykuly` INNER JOIN `uzytkownicy` 
            on autor = `uzytkownicyid` WHERE `dataUkazania` < NOW() AND usuniety = 0 ORDER BY `dataUkazania` 
            ASC LIMIT $_GET[ileNaStronie] OFFSET $offset");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function zliczanieArtykulow(){
        $result = $this->mysqli->query(
            "SELECT count(*) FROM `artykuly` WHERE `dataUkazania` < NOW() AND usuniety = 0 ");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function ArtykulFull(){
        $result = $this->mysqli->query(
            "SELECT `artykulyid`, `login` , `tytul`, 
            `tresc`, `obrazek` FROM `artykuly` INNER JOIN `uzytkownicy` 
            on autor = `uzytkownicyid` WHERE artykulyid = $_GET[id] AND `dataUkazania` < NOW() AND usuniety = 0 ");
        $array = array();
        while ($row = $result->fetch_array()){
            array_push($array,$row);
        }
        return $array;
    }

    public function ArtykulEdycja(){
        $result = $this->mysqli->query(
            "SELECT SUBSTRING(`dataUkazania`,1,16) as dataUkazania,artykulyid, tytul , tresc, 
            `tresc`, `obrazek` FROM `artykuly` WHERE artykulyid = $_GET[id]");
        $row = $result->fetch_array();
        return $row;
    }

    public function Edycja(){
        $id = $_POST['id'];
        $target_Path = "images/".$id."/";
        $target_Path = $target_Path."image.jpg";
        mkdir("images/".$id);
        move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
        $result = $this->mysqli->query(
            "UPDATE `artykuly` SET `dataUkazania` ="."'".$_POST["time"]."', `tytul` = '".$_POST["title"]."',
            `tresc` = '".$_POST["tresc"]."' WHERE artykulyid = $id");
        return $result;
    }


    public function ukryj(){
        $result = $this->mysqli->query(
            "UPDATE `artykuly` SET `usuniety`=1 WHERE artykulyid = ".$_GET['id']);
        return $result;
    }



}