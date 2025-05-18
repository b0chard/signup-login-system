<?php
  $host = 'localhost';
  $dbname = 'your_database';
  $dbusername = 'your_db_username';
  $dbpassword = 'your_db_password';

  try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    die("connection failed: {$e->getMessage()}");
  }