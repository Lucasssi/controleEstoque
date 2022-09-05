<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';

  

class ItemSelecionado {
    
    
    private $item_selecionado;
    private $id_pedido;
    private $Produto;
    private $qtd;
    private $cx;
    private $cxUn;
    private $totalUnidade;
    
       function __construct() {
            
        $this->Produto = new MaterialConsumo();
        
    }
    
    
    function getCx() {
        return $this->cx;
    }

    function getCxUn() {
        return $this->cxUn;
    }

    function getTotalUnidade() {
        return $this->totalUnidade;
    }

    function setCx($cx) {
        $this->cx = $cx;
    }

    function setCxUn($cxUn) {
        $this->cxUn = $cxUn;
    }

    function setTotalUnidade($totalUnidade) {
        $this->totalUnidade = $totalUnidade;
    }

        
    
    
    function getProduto() {
        return $this->Produto;
    }

    function setProduto($Produto) {
        $this->Produto = $Produto;
    }

        
    function getItem_selecionado() {
        return $this->item_selecionado;
    }

    function getId_pedido() {
        return $this->id_pedido;
    }

    function getQtd() {
        return $this->qtd;
    }

    function setItem_selecionado($item_selecionado) {
        $this->item_selecionado = $item_selecionado;
    }

    function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    function setQtd($qtd) {
        $this->qtd = $qtd;
    }


    
    
}
