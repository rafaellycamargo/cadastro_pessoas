<?php
    //recebendo e guardando dados do index.php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $estado = $_POST["estados"];
    $cid = $_POST["cid"];

    //inserindo dados no banco
    include "inc/cabecalho_con.inc";
    $SQL = "INSERT INTO pessoa (nome, telefone, estado, cidade) VALUE ('$nome', '$telefone', '$estado', '$cid')";
    echo '<h1>Operação realizada com sucesso!</h1>';
    include "inc/rodape_con.inc";
?>