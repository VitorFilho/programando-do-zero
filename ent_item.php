<?php
    include "conexao.php";
    
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $unimedida= $_POST['unimedida'];
    $vlcompra= $_POST['vlcompra'];
    $vlvenda= $_POST['vlvenda'];
    $fornecedor= $_POST['fornecedor'];
    $linkImagem = $_POST['linkImagem'];

    $sql_insert = "INSERT INTO item(nome, categoria, descricao, quantidade,unimedida,vlcompra,vlvenda,fornecedor,linkimagem)VALUES
    ('$nome','$categoria','$descricao','$quantidade','$unimedida','$vlcompra','$vlvenda','$fornecedor','$linkImagem')";
    $stmt = $PDO->prepare($sql_insert);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        header("Refresh:2; URL=item.php");
    } 
