<?php
class DB {

    private string $host;
    private string $username;
    private string $password;
    private string $databasename;
    private string $databasetype;
    private PDO $pdo;

    function __construct(string $host, string $username, string $password, string $databasename, string $databasetype) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->databasename = $databasename;
        $this->databasetype = $databasetype;

        $this->connect();
    }

    public function getPDO() {
        return $this->pdo;
    }

    public function connect() {
        $this->pdo = new PDO("{$this->databasetype}:host={$this->host};dbname={$this->databasename}", $this->username, $this->password);
    }

    public function close() {
        $this->pdo = null;
    }
}