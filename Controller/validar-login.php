<?php

require_once "../Model/conexao.php";
require_once "../Model/Usuario.php";


$con =   getConexao();
$user = new Usuario();

$Login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf =     filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);

$user->  setNome($Login);
$user->     setCpf($cpf);

$login = $user->getNome();
$cpf =    $user->getCpf();


  $query = $con->prepare("SELECT * FROM usuarios WHERE nome = :nome
   OR email = :email AND cpf = :cpf");
  $query->bindValue(":nome", $login);
  $query->bindValue(":email", $login);
  $query->bindValue(":cpf", $cpf);
  $query->execute();


/* $query->execute(array($login, $login));//Vai substituir os sinais de interrogação pela
                                      //variavel Login*/
  
 //Se voltar alguma coisa vai ser feito o select da senha

        //Manipulação de informações que foram retirados do banco
        foreach($query->fetchAll() as $valor){
      
        session_start();

        $_SESSION['nome'] =               $valor['nome'];
        $_SESSION['email'] =             $valor['email'];
        $_SESSION['informacoes'] = $valor['informacoes'];
        $_SESSION['cpf'] =                 $valor['cpf'];
        $_SESSION['jogo'] =       $valor['jogofavorito'];
        $_SESSION["imagem"] =        $valor["diretorio"];

        /*Criação dos cookies, o que está entre aspas é o nome do cookie        
        setcookie("nome", $Nome,               time()+3600);
        setcookie("email", $Email,             time()+3600);
        setcookie("informacoes", $Informacoes, time()+3600);
        setcookie("cpf", $Cpf,                 time()+3600);
        setcookie("jogo", $Jogo,               time()+3600);
        */

        header("location: ../View/feed.php");
  

    header("location: ../View/index.php");
  }
