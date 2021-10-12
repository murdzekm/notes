<?php

class Signup extends Controller
{
    function index()
    {
        $data['page_title'] = "Signup";
        if ($this->checkLoggedIn()) {
            header("Location:" . ROOT . "notes");
            die;
        } else {
            if (isset($_POST['email']) && $_POST['repeatPassword']) {
                $user = $this->loadModel("user");
                $user->signup($_POST);
            } elseif (isset($_POST['username']) && !isset($_POST['email'])) {

                $user = $this->loadModel("user");
                $user->login($_POST);
            }
            $this->view("pages/signup", $data);
        }
    }
}
