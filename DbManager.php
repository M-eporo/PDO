<?php 
  function getDb(): PDO {
    $dsn = 'mysql:dbname=selfphp;host=localhost;chrset=utf8mb4';
    $user = 'root';
    $password = '';
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTOPN);
    return $db;
  }