<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-24
 * Time: 07:41
 */

class Comment extends Controller
{

    public function DodawanieKomentarzy(){
        $m = $this -> loadModel("CommentM");
        $m -> dodawanie();
    }

    public function startModyfikowanieKomentarzy(){
        if($_SESSION['id'] == $_GET['ida'] || $_SESSION['rola'] == "root"){
            $this->loadView('head');
            if($this->czyRoot()){
                $this->loadView('menuA');
            }else{
                $this->loadView('menu');
            }
            $Am = $this->loadModel("ArtykulyM");
            $result = $Am -> ArtykulFull()[0];
            $this->loadView('ArtykulFull',$result);
            $Cm = $this->loadModel("CommentM");
            $resultC = $Cm->jedenKomentarzArtykulu();


            $this->loadView('CommentEditor',$resultC);// TODO zmneinc na edycje komentarza ($_GET[idk])

            $Cm = $this->loadModel("CommentM");
            $resultC = $Cm->komentarzeArtykulu();
            foreach ($resultC as $row){
                if($row[komentarzid] != $_GET['idk'])
                $this->loadView("Comment",$row);
            }
            $this->loadView("stopka");
        }else{
            header('Location: http://localhost/ProjektNews/index.php?f=blad403&c=bledy');
        }
    }

    public function ModyfikowanieKomentarzy(){
        if($_SESSION['id'] == $_POST['autor'] || $_SESSION['rola'] == "root"){
            $m = $this -> loadModel("CommentM");
            if($m -> modyfikowanie()){
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

    public function UsuwanieKomentarzy(){
        if($_SESSION['id'] == $_GET['ida'] || $_SESSION['rola'] == "root"){
            $m = $this -> loadModel("CommentM");
            if($m -> usuwanie()){
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