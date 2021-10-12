<?php

class Login extends Controller
{
    function index()
    {
        $data['page_title'] = "Login";
        if ($this->checkLoggedIn()) {
            header("Location:" . ROOT . "notes");
            die;
        } else {
            if (isset($_POST['email']) && $_POST['repeatPassword']) {
                $user = $this->loadModel("user");
                $user->signup($_POST);

            } elseif (isset($_POST['login']) && !isset($_POST['email'])) {


                $user = $this->loadModel("user");
                $user->login($_POST);

            }

            $this->view("pages/login", $data);
        }
    }
}