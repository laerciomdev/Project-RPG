<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$nome = $_POST['senha'];
$sobrenome = $_POST['senha'];
$email = $_POST['senha'];
$data = $_POST['data'];
$telefone = $_POST['telefone'];
$connect = mysql_connect('ProjectRpg','root','');
$db = mysql_select_db('ProjectRpg');
$query_select = "SELECT usuarios FROM usuarios WHERE login = '$login',senha ='$senha'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='../View/Cadastro';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha,nome,sobrenome,email,data,telefone) VALUES ('$login','$senha','$nome','$sobrenome','$email','$data','$telefone')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }

