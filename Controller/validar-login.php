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


  $query = $con->prepare("SELECT * FROM usuarios WHERE nome = :nome OR email = :email");
  $query->bindValue(":nome", $login);
  $query->bindValue(":email", $login);
  $query->execute();


/* $query->execute(array($login, $login));//Vai substituir os sinais de interrogação pela
                                      //variavel Login*/
  
 //Se voltar alguma coisa vai ser feito o select da senha
 if($query->rowCount() != 0){

  $query = $con->prepare("SELECT * FROM usuarios WHERE cpf = :cpf");
  $query->bindValue(":cpf", $cpf);
  $query->execute();

  //se voltar alguma linha será direcionado para o feed se não vai voltar para a pagina index
 }if($query->rowCount() != 0){

        
        //Manipulação de informações que foram retirados do banco
        foreach($query->fetchAll() as $valor){
      
        session_start();

        $_SESSION['nome'] =               $valor['nome'];
        $_SESSION['email'] =             $valor['email'];
        $_SESSION['informacoes'] = $valor['informacoes'];
        $_SESSION['cpf'] =                 $valor['cpf'];
        $_SESSION['jogo'] =       $valor['jogofavorito'];
        $_SESSION["imagem"] =        $valor["diretorio"];
      }

        /*Criação dos cookies, o que está entre aspas é o nome do cookie        
        setcookie("nome", $Nome,               time()+3600);
        setcookie("email", $Email,             time()+3600);
        setcookie("informacoes", $Informacoes, time()+3600);
        setcookie("cpf", $Cpf,                 time()+3600);
        setcookie("jogo", $Jogo,               time()+3600);
        */

        header("location: ../View/feed.php");
  
      }else{
    header("location: ../View/index.php");
  }
