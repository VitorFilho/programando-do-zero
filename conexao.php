<?php
  $dns = "mysql:host=localhost;dbname=sostraumas;charset=utf8";
  $usuario = "root";
  $senha = "";

  try{

    $PDO = new PDO($dns, $usuario, $senha);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $erro){
    
    echo "Ocorreu um erro de conexão:{$erro->getMessage()}";
    $PDO = null;
    exit;
  }

