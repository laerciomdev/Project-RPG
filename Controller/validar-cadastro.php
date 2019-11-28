<?php

require_once "conexao.php";
require_once "../ModelDAO/Usuario.php";


$con =   getConexao();
$user = new Usuario();


    $Nome =        filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $Email =      filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $Informacoes = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_SPECIAL_CHARS);
    $Cpf =          filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
    $Jogo =       filter_input(INPUT_POST, 'Jogos', FILTER_SANITIZE_SPECIAL_CHARS);

    if($Informacoes == ""){
      $Informacoes = "Nenhuma informação...";
    }


    $user->               setNome($Nome);
    $user->                 setCpf($Cpf);
    $user->             setEmail($Email);
    $user-> setInformacoes($Informacoes);
    $user->               setJogo($Jogo);

    
    $Nome = $user->        getNome();
    $Cpf = $user->        getCpf();
    $Email = $user->getEmail();
    $Informacoes = $user->  getInformacoes();
    $Jogo = $user->        getJogo();


    $query = $con->prepare("INSERT INTO usuarios(email,cpf,nome,informacoes,jogofavorito)
     VALUES (:email,:cpf,:nome,:informacoes,:jogo)");


    $query-> bindValue(":email",$Email);
    $query-> bindValue(":cpf",$Cpf);
    $query-> bindValue(":nome",$Nome);
    $query-> bindValue(":informacoes",$Informacoes);
    $query-> bindValue(":jogo",$Jogo);

    $query->execute();