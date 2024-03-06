<?php
    include "conexao.php";
    
    $logins = $_POST['login'];
    $senha = $_POST['senha'];

    $sql_login = "SELECT * FROM usuario where login = :LOGINS AND senha = :SENHA";
    $stmt = $PDO->prepare($sql_login);
    $stmt->bindParam(':LOGINS', $logins);
    $stmt->bindParam(':SENHA', $senha);
    $stmt->execute();

    //capturando retorno
    if($stmt->rowCount() > 0){
        session_start();
        $_SESSION['login'] = $logins;
        $retornoApp = array("LOGIN"=>"SUCESSO");
        header("Refresh:2; URL=index.html");
        
    }else{
        $retornoApp = array("LOGIN"=>"ERRO");
        header("Refresh:2; URL=index.php");
    }
    //echo json_encode($retornoApp);