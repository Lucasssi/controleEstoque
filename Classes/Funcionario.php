<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcao_U.php';


class Funcionario {
    
    private $id_funcionario;
    private $nome;
    private $data_adm;
    private $Funcao;
    private $senha;
    private $login;
    private $tipo;
    
  

         function __construct() {
        $this->Funcao = new Funcao_U();
       
    }
    
    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

        
      function getFuncao() {
        return $this->Funcao;
    }

    function setFuncao($Funcao) {
        $this->Funcao = $Funcao;
    }
    
    function getLogin() {
        return $this->login;
    }

    function setLogin($login) {
        $this->login = $login;
    }

        
    function getId_funcionario() {
        return $this->id_funcionario;
    }

    function getNome() {
        return $this->nome;
    }

    function getData_adm() {
        return $this->data_adm;
    }

   

    function getSenha() {
        return $this->senha;
    }

    function setId_funcionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setData_adm($data_adm) {
        $this->data_adm = $data_adm;
    }

    

    function setSenha($senha) {
        $this->senha = $senha;
    }


}
