<?php

class Estado {

    private $id_estado;
    private $nome;

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getId_estado() {
        return $this->id_estado;
    }

    function setId_estado($id_estado) {
        $this->id_estado = $id_estado;
    }

}
