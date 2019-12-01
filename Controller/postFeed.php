<?php
session_start();

include_once '../Model/conexao.php';

//Verificar se o usuario clicou no botao, clicou no botao acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$recebearquivo = filter_input(INPUT_POST, 'arquivo', FILTER_SANITIZE_STRING);
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

if ($recebearquivo && $comentario) {
    //Receber os dados do formulario    
    $nome_arquivo = $_FILES['arquivo']['name'];
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $insere_arquivo = "INSERT INTO arquivos (comentario, arquivo) VALUES (:comentario, :imagem)";
    $insert_msg = $conn->prepare($insere_arquivo);
    $insert_msg->bindParam(':comentario', $comentario);
    $insert_msg->bindParam(':arquivo', $arquivo);

    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar ultimo ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretorio onde o arquivo vai ser salvo
        $diretorio = '../View/imagens/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['arquivo']['tmp_arquivo'], $diretorio.$arquivo)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso</p>";
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

