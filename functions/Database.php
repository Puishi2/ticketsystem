<?php

namespace functions;

class Database
{

    public \mysqli $connection;

    public function __construct()
    {
        $this->connection = new \mysqli("localhost", "root", "123", "ticketsystem");
    }

    /**
     * @return \mysqli
     */
    public function getConnection(): \mysqli
    {
        return $this->connection;
    }

    public function prepareStatement($stmt): void
    {
        $stmt_execute = $this->getConnection()->prepare($stmt);
        $stmt_execute->execute();
    }

    public function createTables(): void
    {
        $this->prepareStatement("CREATE TABLE IF NOT EXISTS register (ID INT NOT NULL AUTO_INCREMENT, NAME TEXT, EMAIL TEXT, PASSWORD TEXT, USER_ROLE INT, PRIMARY KEY(ID))");
        $this->prepareStatement("CREATE TABLE IF NOT EXISTS user_roles (ID INT NOT NULL AUTO_INCREMENT, NAME TEXT, PRIMARY KEY(ID))");
    }

}