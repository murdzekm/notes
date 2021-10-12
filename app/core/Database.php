<?php

class Database
{
    public function dbConnect()
    {

        try {

            $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
            $db = new PDO($string, DB_USER, DB_PASS);
            return $db;

        } catch (PDOExecption $e) {

            die($e->getMessage());
        }
    }

    public function read($query, $data = [])
    {

        $DB = $this->dbConnect();
        $stm = $DB->prepare($query);


        if (count($data) == 0) {
            $stm = $DB->query($query);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {
            $check = $stm->execute($data);
        }

        if ($check) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);

            if (is_array($data) && count($data) > 0) {

                return $data;
            }

            return false;
        } else {
            return false;
        }
    }

    public function write($query, $data = [])
    {

        $DB = $this->dbConnect();
        $stm = $DB->prepare($query);

        if (count($data) == 0) {
            $stm = $DB->query($query);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {

            $check = $stm->execute($data);

        }

        if ($check) {
            return true;
        } else {
            return false;
        }
    }


    public $error = "";
    private $pdo = null;
    private $stmt = null;

    function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";",
                DB_USER, DB_PASS, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (Exception $ex) {
            exit($ex->getMessage());
        }
    }

    // (B) CLOSE CONNECTION
    function __destruct()
    {
        if ($this->stmt !== null) {
            $this->stmt = null;
        }
        if ($this->pdo !== null) {
            $this->pdo = null;
        }
    }

    // (C) RUN A SELECT QUERY
    public function getAll($sql, $data = [])
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($data);
            $result = $this->stmt->fetchAll();
            return $result;

        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    public function get($sql, $arr = [])
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($arr);
            $result = $this->stmt->fetch();
            return $result;

        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    public function insert($sql, $arr)
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($arr);
            if ($this->stmt) {
                return true;
            }
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    public function edit($sql, $arr)
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($arr);
            if ($this->stmt) {
                return true;
            }
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    public function delete($sql, $arr = [])
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($arr);
            if ($this->stmt->rowCount() === 1) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }


}