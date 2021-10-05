<?php

class Controller
{
    protected function view($view,$data = [])
    {
        if(file_exists("../app/views/". $view .".php"))
        {
            include "../app/views/". $view .".php";
        }else{
            include "../app/views/404.php";
        }
    }

    protected function loadModel($model)
    {
        if(file_exists("../app/models/". $model .".php"))
        {
            include "../app/models/". $model .".php";
            return $model = new $model();
        }

        return false;
    }

    protected function check_loogin()
    {
       // $user = $this->loadModel("user");

        if (!$result = $this->check_logged_in()) {
            header("Location:" . ROOT . "login");
           die;
        }
    }

    function check_logged_in()
    {

        $DB = new Database();
        if (isset($_SESSION['user_url'])) {

            $arr['user_url'] = $_SESSION['user_url'];

            $query = "select * from users where url_address = :user_url limit 1";
            $data = $DB->read($query, $arr);
            if (is_array($data)) {
                //logged in
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;

    }
}