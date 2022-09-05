<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaterialConsumoSelecionado
 *
 * @author lucas
 */
class MaterialConsumoSelecionado {
    
    private $id_MCSelecionado;
    private $id_MC;
    private $nome;
    private $descricao;
    private $qtd;
    private $id_almox;
    private $id_UM;
    private $id_tipo;
    
    function getId_MCSelecionado() {
        return $this->id_MCSelecionado;
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

    function setId_MCSelecionado($id_MCSelecionado) {
        $this->id_MCSelecionado = $id_MCSelecionado;
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
