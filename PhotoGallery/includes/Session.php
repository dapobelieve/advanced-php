<?php

class Session 
{
    private $loggedIn = false;
    public $userId;

    function __construct()
    {
        session_start();
        $this->checkLogin();
    }

    public function isLoggedIn()
    {
        return $this->loggedIn;
    }

    public function login($user)
    {
        if ($user){
            $this->userId = $_SESSION['user_id'] = $user->id;
            $this->loggedIn = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->userId);
        $this->loggedIn = false;
    }

    public function checkLogin()
    {
        if(isset($_SESSION['user_id'])){
            $this->userId = $_SESSION['user_id'];
            $this->loggedIn = true;
        }else {
            unset($this->userId);
            $this->loggedIn = false;
        }
    }
}

$session = new Session();
?>