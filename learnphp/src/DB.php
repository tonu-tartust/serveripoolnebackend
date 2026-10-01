<?php

namespace App;

use App\Models\Post;
use PDO;
use PDOException;


class DB
{

  private PDO $conn;

  public function __construct()
  {
    $servername = "localhost:33061";
    $username = "root";
    $password = "example";
    $dbname = "php";

    try {
      $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function all($table, $class)
  {
    $sql = "SELECT * FROM $table";
    // Execute the SQL query
    $result = $this->conn->query($sql);
    $result->setFetchMode(PDO::FETCH_CLASS, $class);
    return $result->fetchAll();
  }
}
