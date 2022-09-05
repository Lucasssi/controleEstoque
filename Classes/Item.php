<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author lucas
 */
class Item {
    
    private $id;
    private $qtd;
    private $nome;
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

        
    function getId() {
        return $this->id;
    }

    function getQtd() {
        return $this->qtd;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQtd($qtd) {
        $this->qtd = $qtd;
    }


}
