<?php
  try {
    $username = "root";
    $password = "";
  
    $conex = new PDO('mysql:host=localhost;dbname=PWEB2', $username, $password);
    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $m) {
    echo 'Conexão não realizada. ' . $m->getMessage();
  }
?>