<?php
// db.php

require_once __DIR__ . '/config.php';

class Database {
    private $conn;

    public function __construct() {
        try {
            // Kết nối đến cơ sở dữ liệu
            $this->conn = new PDO(
                "mariadb:host=" . Config::$host . ";dbname=" . Config::$dbname,
                Config::$username,
                Config::$password
            );
            // Thiết lập chế độ lỗi
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Trả về kết nối
    public function getConnection() {
        return $this->conn;
    }
}
?>