<?php

class Home extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home";
        $login = $this->checkLoggedIn();
        if ($login) {
            header("Location:" . ROOT . "notes");
        } else {
            $this->view("pages/home", $data);
        }

    }

}