<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-10-02
 * Time: 09:36
 */

class Artykuly extends Controller
{

    public function startDodawanie(){
        if($this -> czyRoot()){
            $this->loadView('head');
            if($this->czyRoot()){
                $this->loadView('menuA');
            }else{
                $this->loadView('menu');
            }
            $this -> loadView("ArtykulForm");
            $this->loadAjax("ArtykulForm");
            $this->loadView("stopka");
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }
    }

    public function Dodawanie(){
        if($this -> czyRoot()){
            $m = $this -> loadModel("ArtykulyM");
            $m -> dodawanie();
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }
    }

    public function startEdycja(){
        if($_SESSION['id'] == $_GET['ida'] || $_SESSION['rola'] == "root"){
            $this->loadView('head');
            if($this->czyRoot()){
                $this->loadView('menuA');
            }else{
                $this->loadView('menu');
            }
            $m = $this->loadModel("ArtykulyM");
            $result = $m->ArtykulEdycja();
            $this->loadView("ArtykulEdycja",$result);
            $this->loadView("stopka");
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }
    }

    public function ukryj(){
        if($_SESSION['id'] == $_GET['ida'] || $_SESSION['rola'] == "root"){
            $m = $this -> loadModel("ArtykulyM");
            if($m -> ukryj()){
                $this->loadView('head');
                if($this->czyRoot()){
                    $this->loadView('menuA');
                }else{
                    $this->loadView('menu');
                }
                $this->loadView("Pomyslnie");
                $this->loadView("stopka");

            }else{
                $this->loadView('head');
                if($this->czyRoot()){
                    $this->loadView('menuA');
                }else{
                    $this->loadView('menu');
                }
                $this->loadView("NiePomyslnie");
                $this->loadView("stopka");
            }
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }
    }

    public function Edycja(){
        if($_SESSION['id'] == $_GET['ida'] || $_SESSION['rola'] == "root"){
            $m = $this -> loadModel("ArtykulyM");
            if($m -> Edycja()){
                $this->loadView('head');
                if($this->czyRoot()){
                    $this->loadView('menuA');
                }else{
                    $this->loadView('menu');
                }
                $this->loadView("Pomyslnie");
                $this->loadView("stopka");

            }else{
                $this->loadView('head');
                if($this->czyRoot()){
                    $this->loadView('menuA');
                }else{
                    $this->loadView('menu');
                }
                $this->loadView("NiePomyslnie");
                $this->loadView("stopka");
            }
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }
    }

}