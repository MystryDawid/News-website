<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-10-02
 * Time: 10:42
 */

class bledy extends Controller
{
    public function blad403()
    {

        $this->loadView('head');
        if($this->czyZalogowany()){
            if($this->czyRoot()){
                $this->loadView('menuA');
            }else{
                $this->loadView('menu');
            }
        }else{
            $this->loadView('Guest');
        }
        $this->loadView("blad403");
        $this->loadView('stopka');
    }
}