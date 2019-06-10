<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-25
 * Time: 09:33
 */

class Users extends Controller
{
    public function startLogin(){
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
        $this->loadView("login");
        $this->loadView("stopka");

    }

    public function Logout(){
        $_SESSION['zalogowany'] = false;
        $_SESSION['rola'] = null;
        unset($_SESSION['id']);
        header('Location: http://localhost/ProjektNews/index.php?');
    }

    public function Login(){
        $m = $this->loadModel("UserM");
        $result = $m->Login()[0];
        if($result)
        {
            echo "ZALOGOWANO";
            $dane = $result;
            $_SESSION['zalogowany'] = true;
            $_SESSION['id'] = $dane['uzytkownicyid'];
            if($dane['rola'] == 1){
                $_SESSION['rola'] = "user";
            }else{
                $_SESSION['rola'] = "root";
            }
            header('Location: http://localhost/ProjektNews/index.php?');
        }else{
            echo "BŁĄD PODCZAS LOGOWANIA";
        }
    }

    public function startRegister(){
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
        $this->loadView("Register");
        $this->loadJS("registerJs");
        $this->loadAjax("FormLoading");
        $this->loadView('stopka');
    }

    public function Register(){
        $m = $this->loadModel("UserM");
        $m->Register();
    }

    public function EdycjaProfilu()
    {
        $this->loadView('head');
        if($this->czyRoot()){
            $this->loadView('menuA');
        }else{
            $this->loadView('menu');
        }
        $m = $this->loadModel("UserM");
        $result = $m->WszystkoZProfiluX();
        $this->loadJS("register");
        $this->loadAjax("EdycjaProfilu");
        $this->loadView("EdycjaProfilu",$result);
        $this->loadView('stopka');
    }

    public function Edycja(){
        $m = $this->loadModel("UserM");
        $m->Edycja();
    }

    public function UnBan(){
        $m = $this->loadModel("UserM");
        $m->UnBan();
    }

    public function Ban(){
        $m = $this->loadModel("UserM");
        $m->Ban();
    }

    public function CzyIstniejeTakieKonto(){
        $m = $this->loadModel("UserM");
        $m->CzyIstniejeTakieKonto();
    }



}