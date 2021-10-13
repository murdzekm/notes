<?php

class Database
{
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
            include "../app/views/error.php";
            //echo $ex->getMessage();
            exit();
        }
    }

    function __destruct()
    {
        if ($this->stmt !== null) {
            $this->stmt = null;
        }
        if ($this->pdo !== null) {
            $this->pdo = null;
        }
    }

    public function getAll($sql, $arr = [])
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($arr);
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