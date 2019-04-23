<?php
    session_start();

    include_once("conexao.php");

    //Salva em variaveis o formulario preenchido do site
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data-nascimento'];
    $estado_civil = $_POST['estado-civil'];
    $filhos = $_POST['filhos'];
    $renda = $_POST['renda'];
    $esportes = $_POST['esportes'];
    $atividades_lazer = $_POST['atividades-lazer'];
    $telefone = $_POST['telefone'];

    //Faz o insert no banco de dados dessas informações
    $result_usuario = "INSERT INTO candidato (nome, sexo, data_nascimento, email, estado_civil, filhos, renda, esportes, atividades_lazer, telefone) VALUES ('$nome', '$sexo', '$data_nascimento', '$email', '$estado_civil', '$filhos', '$renda', '$esportes', '$atividades_lazer', '$telefone')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    //Verifica se a operação foi bem sucedida e informa ao usuário
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado. Tente novamente!</p>";
        header("Location: index.php");
    }
?>