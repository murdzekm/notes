<?php

class Users extends Controller
{
    public function index()
    {
        $data['page_title'] = "Użytkownik " . $_SESSION['username'];
        $this->checkLogin();

        $user = $this->loadModel("user");
        $data['user'] = $user->show();

        if (isset($_POST['password']) && isset($_POST['newPassword']) && isset($_POST['repeatPassword'])) {
            $user->changePassword($_POST);

        } elseif (isset($_POST['username']) && !isset($_POST['password']) && !isset($_POST['newPassword'])) {
            $user->changeUser($_POST);
        }

        $this->view("pages/user", $data);
    }


}