<?php

namespace App;

use PDO;
use PDOException;

class DB
{
  private PDO $conn;

  public function __construct()
  {
    $servername = "127.0.0.1";
    $port = 33061;
    $username = "root";
    $password = "example";
    $dbname = "php";

    try {
      $this->conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      // stop here, otherwise every query fails with "$conn must not be accessed before initialization"
      die("Connection failed: " . $e->getMessage());
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

  public function where($table, $class, $field, $value)
  {
    $sql = "SELECT * FROM $table WHERE $field='$value'";
    // Execute the SQL query
    $result = $this->conn->query($sql);
    $result->setFetchMode(PDO::FETCH_CLASS, $class);
    return $result->fetchAll();
  }
}
