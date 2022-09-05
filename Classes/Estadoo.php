<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estadoo
 *
 * @author lucas
 */
class Estadoo {
    
    private $id;
    private $estado;
    private $nome;
    private $uf;
    
    function getUf() {
        return $this->uf;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

        
    function getId() {
        return $this->id;
    }

    function getEstado() {
        return $this->estado;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
