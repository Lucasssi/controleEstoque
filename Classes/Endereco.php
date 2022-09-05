<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Cidadee.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Estadoo.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';

class Endereco {
    
    private $id_endereco;
    private $descricao;
    private $bairro;
    private $rua;
    private $numero;
    private $Empresa;
    private $Cidadee;
    private $Estadoo;
    
        function __construct() {
            
        $this->Empresa = new Empresa();
        $this->Cidadee = new Cidadee();
        $this->Estadoo = new Estadoo();
        
    }
    
    function getId_endereco() {
        return $this->id_endereco;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getEmpresa() {
        return $this->Empresa;
    }

    function getCidadee() {
        return $this->Cidadee;
    }

    function getEstadoo() {
        return $this->Estadoo;
    }

    function setId_endereco($id_endereco) {
        $this->id_endereco = $id_endereco;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

    function setCidadee($Cidadee) {
        $this->Cidadee = $Cidadee;
    }

    function setEstadoo($Estadoo) {
        $this->Estadoo = $Estadoo;
    }





    
    
}
