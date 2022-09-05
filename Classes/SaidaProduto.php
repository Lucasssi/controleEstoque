<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Pedido.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Status.php';

class SaidaProduto {
    
    private $id_sp;
    private $id_pedido;
    private $Produto;
    private $atendido;
    private $disponivel;
    private $solicitado;
    private $status;
    private $produtoCodigo;
    private $Pedido;
    
    function __construct() {
            
        $this->Produto = new MaterialConsumo();
        $this->Pedido = new Pedido();
        
        
    }
    
    
    function getPedido() {
        return $this->Pedido;
    }

    function setPedido($Pedido) {
        $this->Pedido = $Pedido;
    }

        
    
    function getProdutoCodigo() {
        return $this->produtoCodigo;
    }

    function setProdutoCodigo($produtoCodigo) {
        $this->produtoCodigo = $produtoCodigo;
    }

        
    
    
    function getProduto() {
        return $this->Produto;
    }

    function setProduto($Produto) {
        $this->Produto = $Produto;
    }

        
    
    function getId_sp() {
        return $this->id_sp;
    }

    function getId_pedido() {
        return $this->id_pedido;
    }



    function getAtendido() {
        return $this->atendido;
    }

    function getDisponivel() {
        return $this->disponivel;
    }

    function getSolicitado() {
        return $this->solicitado;
    }

    function getStatus() {
        return $this->status;
    }

    function setId_sp($id_sp) {
        $this->id_sp = $id_sp;
    }

    function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    

    function setAtendido($atendido) {
        $this->atendido = $atendido;
    }

    function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    function setSolicitado($solicitado) {
        $this->solicitado = $solicitado;
    }

    function setStatus($status) {
        $this->status = $status;
    }

  
    
    
   

    
    
}
