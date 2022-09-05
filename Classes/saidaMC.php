<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';


class saidaMC {
    private $id_SMC;
    private $datasaida;
    private $id_dpt;
    private $id_funcionario;
    
       function __construct() {
        $this->id_dpt = new Curso();
        $this->id_funcionario = new Funcionario();
        
    }
    
    function getId_SMC() {
        return $this->id_SMC;
    }

    function getDatasaida() {
        return $this->datasaida;
    }

    function getId_dpt() {
        return $this->id_dpt;
    }

    function getId_funcionario() {
        return $this->id_funcionario;
    }

    function setId_SMC($id_SMC) {
        $this->id_SMC = $id_SMC;
    }

    function setDatasaida($datasaida) {
        $this->datasaida = $datasaida;
    }

    function setId_dpt($id_dpt) {
        $this->id_dpt = $id_dpt;
    }

    function setId_funcionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
    }


}
