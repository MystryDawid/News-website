<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-20
 * Time: 07:40
 */
include_once "Controller.php";
class test extends Controller
{

    public function testFunction(){
        $dataTable['napis'] = "napis";
        $this->loadView("View1",$dataTable);
    }


    public function wojewodztwa(){
        $m = $this->loadModel("testM");
        $dataTable = $m->wojewodztwa();
        $this->loadView("View1",$dataTable);
    }


}