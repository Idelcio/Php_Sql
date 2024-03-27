<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome= $_POST["nome"];
            $email= $_POST["email"];
            $senha= md5$_POST["senha"];

            $sql = "INSERT INTO cadastro_usuario (nome,
                email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
                $res =$conn->query($sql);

            if($res==true){
                echo "<script>alert('Cadastro com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            break;
        case 'excluir':
            break;
    }