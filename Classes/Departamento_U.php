<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Departamento_U
 *
 * @author lucas
 */
class Departamento_U {
    
    private $id_departamento_U;
    private $nome;
    
    function getId_departamento_U() {
        return $this->id_departamento_U;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_departamento_U($id_departamento_U) {
        $this->id_departamento_U = $id_departamento_U;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
