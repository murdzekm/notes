<?php

class Home extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home";
        $login = $this->check_logged_in();
        if ($login) {
            header("Location:" . ROOT . "notes");
        } else {
            $this->view("pages/Home", $data);
        }

    }

}