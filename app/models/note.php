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
        $arr['url_address'] = $_SESSION['url_address'];
        $query = "select id, title, created, url_address from notes where url_address = :url_address";

        $data = $DB->getAll($query, $arr);
        return $data;

    }

    public function show($id, $database = [])
    {
        $DB = $this->DB;
        $arr['url_address'] = $_SESSION['url_address'];
        $arr['id'] = $id;
        $query = "select id, title, description, created, url_address from notes where id = :id and url_address = :url_address";
        $data = $DB->get($query, $arr);
        if ($data) {
            return $data;
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
            $arr['url_address'] = $_SESSION['url_address'];
            $arr['created'] = date("Y-m-d H:i:s");

            $query = "insert into notes (title,description,created,url_address) values (:title,:description,:created, :url_address)";
            $data = $DB->insert($query, $arr);

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

            $arr['id'] = $id;
            $arr['title'] = $POST['title'];
            $arr['description'] = $POST['description'];
            $arr['created'] = date("Y-m-d H:i:s");

            $query = "update notes set title= :title, description = :description,created =:created where id=:id";

            $data = $DB->edit($query, $arr);

            if ($data) {
                header("Location:" . ROOT . "notes/show/" . $id);
                die;
            }
        } else {
            return $this->show($id);

        }
    }

    public function delete($id)
    {
        $DB = $this->DB;
        $arr['id'] = $id;
        $query = "delete from notes where id = :id limit 1";

        $DB->delete($query, $arr);
        header("Location:" . ROOT . "notes");
        die;

    }

}