<?php

namespace functions;

class UserFunction
{

    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getUserNameByID($id) {
        return $this->database->getConnection()->query("SELECT NAME FROM register WHERE ID=$id")->fetch_assoc()['NAME'];
    }

}