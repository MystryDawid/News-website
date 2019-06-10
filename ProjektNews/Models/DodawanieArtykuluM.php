<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-10-02
 * Time: 09:30
 */

class DodawanieArtykuluM extends Model
{
    public function dodawanie()
    {
        $id = ($this->mysqli->query("SELECT MAX(`artykulyid`) as id FROM `artykuly`")->fetch_array()[0]) + 1;
        $target_Path = "images/".$id."/";
        $target_Path = $target_Path."image.jpg";
        mkdir("images/".$id);
        move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
        $this->mysqli->query("INSERT INTO `artykuly`(`dataUkazania`, `autor`, `tytul`, `tresc`, `obrazek`)
        VALUES ("."'".$_POST["time"]."',".$_SESSION['id'].",'".$_POST["title"]."','".$_POST["tresc"]."','"."$target_Path"."')");
    }
}