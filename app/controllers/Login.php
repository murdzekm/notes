<?php

class Login extends Controller
{
    function index()
    {
        $data['page_title'] = "Login";
        if ($this->checkLoggedIn()) {
            header("Location:" . ROOT . "notes");
            die;
        } elseif (isset($_POST['email']) && isset($_POST['repeatPassword'])) {
            $user = $this->loadModel("user");
            if ($user->checkUser($_POST) && $user->checkEmail($_POST)) {
                $user->signup($_POST);
            } else {
                $_SESSION['error'] = "Podany login jest już zajęty";
            }

        } elseif (isset($_POST['login']) && !isset($_POST['email'])) {
            $user = $this->loadModel("user");
            $user->login($_POST);
        }

        $this->view("pages/login", $data);
    }

}