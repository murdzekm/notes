<?php


class Note
{
    public $DB;

    public function __construct()
    {
        $this->DB = new Database();
    }


    public function lists()
    {
        $DB = $this->DB;
        $_SESSION['error'] = "";
        $user_url = $_SESSION['user_url'];
        $query = "select id, title, created, url_address from notes where url_address = '$user_url'";
        $data = $DB->read($query);
        return $data;

    }

    public function show($id, $database = [])
    {
        $DB = $this->DB;
        $url_address = $_SESSION['user_url'];
        $query = "select id, title, description, created, url_address from notes where id = $id and url_address = '$url_address'";
        $data = $DB->read($query);
        if($data){
            return $data[0];
        }

        return false;

    }

    public function add($POST)
    {
        $DB = $this->DB;

        $_SESSION['error'] = "";
        if (isset($POST['title']) && isset($POST['description'])) {

            $arr['title'] = $POST['title'];
            $arr['description'] = $POST['description'];
            $arr['url_address'] = $_SESSION['user_url'];
            $arr['created'] = date("Y-m-d H:i:s");


            $query = "insert into notes (title,description,created,url_address) values (:title,:description,:created, :url_address)";
            $data = $DB->write($query, $arr);
            if ($data) {

                header("Location:" . ROOT . "notes");
                die;
            }

        } else {

            $_SESSION['error'] = "please enter a valid username and password";
        }
    }

    public function edit($POST, $id)
    {

        $DB = $this->DB;

        $_SESSION['error'] = "";
        if (isset($POST['title']) && isset($POST['description'])) {

            $arr['id'] = $POST['id'];
            $arr['title'] = $POST['title'];
            $arr['description'] = $POST['description'];
            //$arr['url_address'] = get_random_string_max(60);
            $arr['created'] = date("Y-m-d H:i:s");


            $query = "update notes set title= :title, description = :description,created =:created where id=:id";

            $data = $DB->write($query, $arr);
            if ($data) {
                header("Location:" . ROOT . "notes/show/" . $arr['id']);
                die;
            }
        } else {
            return $this->show($id);

        }
    }

    public function delete($id)
    {
        $DB = $this->DB;
        $query = "delete from notes where id = $id limit 1";
        $DB->read($query);
        header("Location:" . ROOT . "notes");
        die;

    }

}