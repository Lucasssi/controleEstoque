<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';


class FuncionarioAlmox {
    
    private $Id_Func_Almox;
    private $Funcionario;
    private $Almoxarifado;
   
    
  

         function __construct() {
        $this->Funcionario = new Funcionario();
        $this->Almoxarifado = new Almoxarifado();
       
    }
    
    function getId_Func_Almox() {
        return $this->Id_Func_Almox;
    }

    function getFuncionario() {
        return $this->Funcionario;
    }

    function getAlmoxarifado() {
        return $this->Almoxarifado;
    }

    function setId_Func_Almox($Id_Func_Almox) {
        $this->Id_Func_Almox = $Id_Func_Almox;
    }

    function setFuncionario($Funcionario) {
        $this->Funcionario = $Funcionario;
    }

    function setAlmoxarifado($Almoxarifado) {
        $this->Almoxarifado = $Almoxarifado;
    }




}
