<?php
session_start();

include_once '../Model/conexao.php';


//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
$arquivo = filter_input(INPUT_POST, 'arquivo', FILTER_SANITIZE_STRING);
if ($comentario && $arquivo) {
    //Receber os dados do formulário
    $nome_arquivo = $_FILES['arquivo']['name'];
    //var_dump($_FILES['arquivo']);
    //Inserir no BD
    $result_arq = "INSERT INTO post (comentario, arquivo) VALUES (:comentario, :arquivo)";
    $insert_msg = $conn->prepare($result_arq);
    $insert_msg->bindParam(':comentario', $comentario);
    $insert_msg->bindParam(':arquivo', $nome_arquivo);

    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = "../View/posts/".$ultimo_id;

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nome_arquivo)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload do arquivo realizado com sucesso</p>";
            header("Location: ../View/feed.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload do arquivo</span></p>";
            header("Location: ../View/feed.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: ../View/feed.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
     header("Location: ../View/feed.php");
}