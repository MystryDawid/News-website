<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-09
 * Time: 09:30
 */

class HomePage extends Controller
{
    public function generate(){
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
        $m = $this->loadModel("ArtykulyM");
        $result = $m -> wszystkie();
        foreach ($result as $row){
            $this->loadView("ArtykulPart",$row);
        }
        $this->loadView('stopka');
    }

    public function generateSortowanie(){
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
        $m = $this->loadModel("ArtykulyM");
        $result = $m -> wszystkieSortowanie();
        foreach ($result as $row){
            $this->loadView("ArtykulPart",$row);
        }
        $this->loadView('stopka');
    }

    public function generateSortowanieXnaStronie(){
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
        $m = $this->loadModel("ArtykulyM");
        $result = $m -> wszystkieSortowanieXNaStronie();
        foreach ($result as $row){
            $this->loadView("ArtykulPart",$row);
        }
        $IloscArtykulow = $m -> zliczanieArtykulow()[0][0];
        $this->loadView('PageChanger',$IloscArtykulow);
        $this->loadView('stopka');
    }

    public function ArtykulFull(){
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
        $Am = $this->loadModel("ArtykulyM");
        $result = $Am -> ArtykulFull()[0];
        $this->loadView('ArtykulFull',$result);
        $Cm = $this->loadModel("CommentM");
        $resultC = $Cm->komentarzeArtykulu();
        if($this->czyZalogowany()){
            $this->loadView('CommentAdd',$result['artykulyid']);
            $this->loadAjax("CommentAdderLoading");
        }
        foreach ($resultC as $row){
            $this->loadView("Comment",$row);
        }
        $this->loadView('stopka');
    }

    public function UzytkownicyZarzadzaie(){
        if($this->czyRoot()){
            $this->loadView('head');
            if($this->czyRoot()){
                $this->loadView('menuA');
            }else{
                $this->loadView('menu');
            }

            $m = $this->loadModel("UserM");
            $result = $m->Wszyscy();
            $this->loadView('UzytkownicyZarzadzaie',$result);


            $this->loadView('stopka');
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }

    }
}