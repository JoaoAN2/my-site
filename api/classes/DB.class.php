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

    public function getPDO(): PDO {
        return $this->pdo;
    }

    public function connect(): void {
        $this->pdo = new PDO("{$this->databasetype}:host={$this->host};dbname={$this->databasename}", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function close(): void {
        $this->pdo = null;
    }
}