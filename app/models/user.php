<?php

class User
{
    public $DB;

    public function __construct()
    {
        $this->DB = new Database();
    }

    public function login($POST)
    {
        $DB = $this->DB;

        $_SESSION['error'] = "";
        if (isset($POST['login']) && isset($POST['password'])) {

            $arr['login'] = $POST['login'];
            $arr['password'] = hash("sha1", $POST['password']);

            $query = "select * from users where login = :login && password = :password limit 1";

            //$data = $DB->read($query, $arr);
//            $params['params'] = "*";
//            $params['table'] = "users";
//            $params['where'] = "login = '" . $arr['login'] . "' && password = '" . $arr['password'] . "' limit 1";

            $data = $DB->get($query, $arr);

            if (is_array($data)) {
                //logged in
                $_SESSION['username'] = $data['username'];
                $_SESSION['url_address'] = $data['url_address'];

                header("Location:" . ROOT . "notes");
                die;

            } else {

                $_SESSION['error'] = "Błędny login lub hasło";
            }
        } else {

            $_SESSION['error'] = "Proszę podać poprawną nazwę użytkownika i hasło";
        }
    }

    public function signup($POST)
    {
        $DB = $this->DB;

        $_SESSION['error'] = "";
        if (isset($POST['login']) && isset($POST['email'])) {

            $arr['login'] = $POST['login'];
            $arr['username'] = $POST['username'];
            $arr['password'] = hash("sha1", $POST['password']);
            $arr['email'] = $POST['email'];
            $arr['url_address'] = getRandomStringMax(60);
            $arr['date'] = date("Y-m-d H:i:s");

            $query = "insert into users (login,username,password,email,url_address,date) values (:login, :username,:password,:email,:url_address,:date)";

            $data = $DB->insert($query, $arr);
            if ($data) {
                header("Location:" . ROOT . "login");
                die;
            }
        } else {
            $_SESSION['error'] = "please enter a valid username and password";
        }
    }


    public function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['url_address']);

        header("Location:" . ROOT . "login");
        die;
    }


    public function show()
    {
        $DB = $this->DB;

        $_SESSION['error'] = "";
        $arr['url_address'] = $_SESSION['url_address'];

        $query = "select * from users where url_address = :url_address limit 1";
        $data = $DB->getAll($query, $arr);

        if ($data) {
            return $data[0];
        }
        return false;
    }

    public function changePassword($POST)
    {
        $DB = $this->DB;

        $_SESSION['error'] = "";
        if (isset($POST['password']) && isset($POST['newPassword'])) {
            $arr['id'] = $POST['id'];
            $arr['password'] = hash("sha1", $POST['password']);
            $query = "select id, password from users where id=:id and password=:password";
            $data = $DB->get($query, $arr);

            if ($data) {
                $arr['password'] = hash("sha1", $POST['newPassword']);

                $query = "update users set password=:password where id=:id";

                $data = $DB->edit($query, $arr);
                if ($data) {
                    return true;
                } else {
                    $_SESSION['error'] = "Nie udało się zminić hasła";
                    return false;
                }
            } else {
                $_SESSION['error'] = "błędne hasło";
            }
        } else {
            $_SESSION['error'] = "błędny odczyt";
        }
    }

    public function changeUser($POST)
    {
        $DB = $this->DB;

        if (isset($POST['username']) && isset($POST['login']) && isset($POST['email'])) {
            $arr['id'] = $POST['id'];
            $arr['login'] = $POST['login'];
            $arr['username'] = $POST['username'];
            $arr['email'] = $POST['email'];

            //$query = "update notes set title= :title, description = :description,created =:created where id=:id";
            $query = "update users set login=:login, username=:username, email=:email where id=:id";
            $data = $DB->edit($query, $arr);
            if ($data) {
                $_SESSION['error'] = "Dane zostało zmienione";
                header("Location:" . ROOT . "users");

            } else {
                $_SESSION['error'] = "Nie udało się zminić danych konta";
            }

        }elseif(!isset($POST['login'])){
            $_SESSION['error'] = "Login nie został ustawiony";

        }elseif(!isset($POST['username'])) {
            $_SESSION['error'] = "Nazwa użytkownika nie została ustawiona";
        }
        elseif(!isset($POST['email'])) {
            $_SESSION['error'] = "Email nie został ustawiony";

        }


    }


}