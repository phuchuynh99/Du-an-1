<?php

class ConnectModel {
    private $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function get_all($sql) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function get_one($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function update($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
    }

    public function delete($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
    }

    public function insert($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $this->conn->lastInsertId();
    }
}
?>
