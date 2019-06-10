<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-19
 * Time: 08:52
 */

class Controller
{
    public function loadView($viewName, $dataTable = null,$returnHTML = false){
        if($returnHTML) ob_start();
        include "./Views/$viewName".".php";
        if($returnHTML){
            $HTML = ob_get_contents();
            ob_clean();
            return $HTML;
        }
    }

    public function loadModel($modelName,$dataTable = NULL){
        include "./Models/".$modelName.".php";
        $o = new $modelName($dataTable);
        return $o;
    }

    public function loadAjax($AjaxName){
        include "./Ajax/".$AjaxName.".php";
    }

    public function loadJS($JsName){
        echo "<script src=\"./Javascript/$JsName.js\" type=\"text/javascript\"></script>";
    }

    public function czyRoot(){
        if($_SESSION['rola'] == "root"){
            return true;
        }else{
            return false;
        }
    }


    public function czyZalogowany(){
        if(isset($_SESSION['rola'])){
            return true;
        }else{
            return false;
        }
    }

}