<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/UnidadeMedida.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Tipo.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/NotaFiscal.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Categoria.php';

class MaterialConsumo {
    
    
    private $id_MC;
    private $codigo;
    private $nome;
    private $descricao;
    private $qtd;
    private $id_almox;
    private $id_UM;
    private $id_tipo;
    private $estMedCx;
    private $estMinCx;
    private $estMedUn;
    private $estMinUn;
    private $NF;
    private $statuss;
    private $cx;
    private $cxUn;
    private $validade;
    private $Categoria;
    
    
            
      function __construct() {
        $this->id_almox = new Almoxarifado();
        $this->id_UM = new UnidadeMedida();
        $this->id_tipo = new Tipo();
        $this->NF = new NotaFiscal();
        $this->Categoria = new Categoria();
    }
    
    
    function getCategoria() {
        return $this->Categoria;
    }

    function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

        
    
    function getValidade() {
        return $this->validade;
    }

    function setValidade($validade) {
        $this->validade = $validade;
    }

        
    
    
    function getCx() {
        return $this->cx;
    }

    function getCxUn() {
        return $this->cxUn;
    }

    function setCx($cx) {
        $this->cx = $cx;
    }

    function setCxUn($cxUn) {
        $this->cxUn = $cxUn;
    }

        
    function getEstMedCx() {
        return $this->estMedCx;
    }

    function getEstMinCx() {
        return $this->estMinCx;
    }

    function getEstMedUn() {
        return $this->estMedUn;
    }

    function getEstMinUn() {
        return $this->estMinUn;
    }

    function getNF() {
        return $this->NF;
    }

    function getStatuss() {
        return $this->statuss;
    }

    function setEstMedCx($estMedCx) {
        $this->estMedCx = $estMedCx;
    }

    function setEstMinCx($estMinCx) {
        $this->estMinCx = $estMinCx;
    }

    function setEstMedUn($estMedUn) {
        $this->estMedUn = $estMedUn;
    }

    function setEstMinUn($estMinUn) {
        $this->estMinUn = $estMinUn;
    }

    function setNF($NF) {
        $this->NF = $NF;
    }

    function setStatuss($statuss) {
        $this->statuss = $statuss;
    }

        
    
    
    function getCodigo() {
        return $this->codigo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

        
    function getId_MC() {
        return $this->id_MC;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQtd() {
        return $this->qtd;
    }

    function getId_almox() {
        return $this->id_almox;
    }

    function getId_UM() {
        return $this->id_UM;
    }

    function getId_tipo() {
        return $this->id_tipo;
    }

    function setId_MC($id_MC) {
        $this->id_MC = $id_MC;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQtd($qtd) {
        $this->qtd = $qtd;
    }

    function setId_almox($id_almox) {
        $this->id_almox = $id_almox;
    }

    function setId_UM($id_UM) {
        $this->id_UM = $id_UM;
    }

    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }


    
    
    
}
