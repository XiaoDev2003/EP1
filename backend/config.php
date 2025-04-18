<?php
// config.php

class Config {
    // Thông tin kết nối cơ sở dữ liệu
    public static $host = 'localhost';
    public static $dbname = 'EP1'; // Tên cơ sở dữ liệu
    public static $username = 'root'; // Username MySQL
    public static $password = ''; // Password MySQL (mặc định là rỗng)

    // Đường dẫn đến thư mục uploads
    public static $uploadsDir = '/uploads/';

    // URL gốc của backend
    public static $baseUrl = 'http://localhost/backend/';
}
?>