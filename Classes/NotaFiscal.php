<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';



class NotaFiscal {
    
    private $id_notafiscal;
    private $dataEmissao;
    private $numero;
    private $Empresa;
    
     
    
    function __construct() {
        $this->Empresa = new Empresa();
        
    } 
    
    
    function getEmpresa() {
        return $this->Empresa;
    }

    function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

        
    function getId_notafiscal() {
        return $this->id_notafiscal;
    }

    function getDataEmissao() {
        return $this->dataEmissao;
    }

    function getNumero() {
        return $this->numero;
    }

    function setId_notafiscal($id_notafiscal) {
        $this->id_notafiscal = $id_notafiscal;
    }

    function setDataEmissao($dataEmissao) {
        $this->dataEmissao = $dataEmissao;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }


    
}
