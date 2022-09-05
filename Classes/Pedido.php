<?php
            

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Status.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';



class Pedido {
    
    private $id_pedido;
    private $Func_cli;
    private $Func_almox;
    private $Curso;
    private $Status;
    private $Almox;
    private $data_pedido;
    private $data_entrega;
    
    
     function __construct() {
         
        $this->Func_almox = new Funcionario();
        $this->Func_cli = new Funcionario();
        $this->Curso = new Curso();
        $this->Status = new Status();
        $this->Almox = new Almoxarifado();
        
    }
    
    function getId_pedido() {
        return $this->id_pedido;
    }

    function getFunc_cli() {
        return $this->Func_cli;
    }

    function getFunc_almox() {
        return $this->Func_almox;
    }

    function getCurso() {
        return $this->Curso;
    }

    function getStatus() {
        return $this->Status;
    }

    function getAlmox() {
        return $this->Almox;
    }

    function getData_pedido() {
        return $this->data_pedido;
    }

    function getData_entrega() {
        return $this->data_entrega;
    }

    function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    function setFunc_cli($Func_cli) {
        $this->Func_cli = $Func_cli;
    }

    function setFunc_almox($Func_almox) {
        $this->Func_almox = $Func_almox;
    }

    function setCurso($Curso) {
        $this->Curso = $Curso;
    }

    function setStatus($Status) {
        $this->Status = $Status;
    }

    function setAlmox($Almox) {
        $this->Almox = $Almox;
    }

    function setData_pedido($data_pedido) {
        $this->data_pedido = $data_pedido;
    }

    function setData_entrega($data_entrega) {
        $this->data_entrega = $data_entrega;
    }


    
}
