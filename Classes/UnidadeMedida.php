<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnidadeMedida
 *
 * @author lucas
 */
class UnidadeMedida {
   
    private $id_UM;
    private $descricao;
    
    function getId_UM() {
        return $this->id_UM;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId_UM($id_UM) {
        $this->id_UM = $id_UM;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


    
}
