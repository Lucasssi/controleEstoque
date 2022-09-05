<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo
 *
 * @author lucas
 */
class Tipo {
    private $id_tipo;
    private $descricao;
    
    function getId_tipo() {
        return $this->id_tipo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}
