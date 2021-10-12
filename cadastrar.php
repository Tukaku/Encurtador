<?php
    if($_POST){
    require_once "conexao.php";

        $urlCliente = $_POST['url'];
        $linkCliente = $_POST['link'];

        $sql = "INSERT INTO cliente VALUES (default,'{$urlCliente}','{$linkCliente}')";
        
        if($urlCliente==""){
            $erro = "Preencah o nome !";
        }else if ($conn->query($sql) === TRUE) {
            $m = "Cadastro com sucesso";
        
        } else {
            $erro = "Erro ao cadastrar!";
        }
        
        $conn->close();
        }
    ?>