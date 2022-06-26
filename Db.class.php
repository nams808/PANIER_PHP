<?php
class Database
{
    private $host = 'localhost';
    private $dbname = 'maboutique';
    private $username = 'root';
    private $password = 'root';
    private $db;

    public function __construct($host = null, $dbname = null, $username = null, $password = null)
    {
        if ($host != null) {
            $this->host = $host;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
        }
        try {
            $this->db = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->dbname,
                $this->username,
                $this->password,
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE =>
                    PDO::ERRMODE_WARNING
                )
            );
        } catch (PDOException $e) {
            die('<h1>Impossible de se connecter a la bdd</h1>');
        }
    }

    public function requeteSql($sql, $data = array())
    {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}
