<?php

include "conexao.php";

$con = getConexao();

$Login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);

$query = $con->prepare("SELECT * FROM usuarios WHERE nome = ? OR email = ?");
$query->execute(array($Login, $Login));//Vai substituir os sinais de interrogação pela
                                      //variavel Login
  
 //Se voltar alguma coisa vai ser feito o select da senha
 if($query->rowCount() != 0){
  $query = $con->prepare("SELECT * FROM usuarios WHERE cpf = ?");
  $query->execute(array($cpf));

  //se voltar alguma linha será direcionado para o feed se não vai voltar para a pagina index
  if($query->rowCount() != 0){
    header("location: ../View/feed.php");
  }else{
    header("location: ../View/index.php");
  }
 
}
