<?php
class Mahasiswa_model {
    private $dbh, $stmt; //database handler, statement

    public function __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('Select * From mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}