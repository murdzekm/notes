<?php

class Users extends Controller
{
    public function index()
    {
        $data['page_title'] = "Użytkownik " . $_SESSION['username'];
        $this->checkLogin();

        $user = $this->loadModel("user");
        $data['user'] = $user->show();
        $id = $data['user']['id'];

        if (isset($_POST['password']) && isset($_POST['newPassword']) && isset($_POST['repeatPassword'])) {
            $user->changePassword($id, $_POST);

        } elseif (isset($_POST['username']) && !isset($_POST['password']) && !isset($_POST['newPassword'])) {
            $user->changeUser($id, $_POST);
        }

        $this->view("pages/user", $data);
    }


}