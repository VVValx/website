<?php
  class Dbc{
    protected function connect(){
      $db_hostname = "localhost";
      $db_username = "root";
      $db_password = "";
      $db_name = "website";
      $charset = "utf8mb4";

      try {
        $dsn = "mysql:host=" . $db_hostname . ";dbname=" . $db_name . ";charset=" . $charset;
        $pdo = new PDO($dsn, $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $e) {
        echo "Error connecting to database: " . $e->getMessage();
      }
    }
  }
 ?>
