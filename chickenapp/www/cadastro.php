<?php

    $con = mysql_connect('192.168.1.110','root','');

// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro

    if (!$con) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

    mysql_select_db('banco_test', $con);

    $nome  = mysql_real_escape_string($_REQUEST['nome']);
    $cpf   = mysql_real_escape_string($_REQUEST['cpf']);
    $rg    = mysql_real_escape_string($_REQUEST['rg']);
    $tel   = mysql_real_escape_string($_REQUEST['tel']);
    $email = mysql_real_escape_string($_REQUEST['email']);

    $sql = "INSERT INTO cliente(nome,cpf,rg,tel,email) VALUE('$nome','$cpf','$rg','$tel','$email')";
    $res = mysql_query($sql);

    $cadastro;

    if($res == true) {
        $cadastro = 1;
    }
    else{
        $cadastro = 0;
    }

    echo (json_encode($cadastro));
?>