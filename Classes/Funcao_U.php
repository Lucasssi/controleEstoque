<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcao_U
 *
 * @author lucas
 */
class Funcao_U {
    
    private $id_Funcao_U;
    private $nome;
    
    function getId_Funcao_U() {
        return $this->id_Funcao_U;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_Funcao_U($id_Funcao_U) {
        $this->id_Funcao_U = $id_Funcao_U;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
