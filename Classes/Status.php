<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Status
 *
 * @author lucas
 */
class Status {
    private $id_status;
    private $nome;
    
    function getId_status() {
        return $this->id_status;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_status($id_status) {
        $this->id_status = $id_status;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


    
}
