<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/saidaMC.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';


class ItemMaterial {
    
    private $idItem;
    private $id_SMC;
    private $id_MC;
    private $qtd;
    
      function __construct() {
        $this->id_SMC = new saidaMC();
        $this->id_MC = new MaterialConsumo();
        
    }
    
    
    function getIdItem() {
        return $this->idItem;
    }

    function getId_SMC() {
        return $this->id_SMC;
    }

    function getId_MC() {
        return $this->id_MC;
    }

    function getQtd() {
        return $this->qtd;
    }

    function setIdItem($idItem) {
        $this->idItem = $idItem;
    }

    function setId_SMC($id_SMC) {
        $this->id_SMC = $id_SMC;
    }

    function setId_MC($id_MC) {
        $this->id_MC = $id_MC;
    }

    function setQtd($qtd) {
        $this->qtd = $qtd;
    }


}
