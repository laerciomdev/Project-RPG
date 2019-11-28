<?php
Class usuario{
  private $Nome;
  private $Email;
  private $Cpf;
  private $Informacoes;

  public function getNome(){
    return $this->Nome;
  }

  public function setNome($nome){
    $this->Nome = $nome;
  }

  public function getEmail(){
    return $this->Email;
  }

  public function setNome($Email){
    $this->Email = $Email;
  }

  public function getCpf(){
    return $this->Cpf;
  }

  public function setNome($Cpf){
    $this->Cpf = $Cpf;
  }

  public function getInformacoes(){
    return $this->Informacoes;
  }

  public function setNome($Informacoes){
    $this->Informacoes = $Informacoes;
  }
}