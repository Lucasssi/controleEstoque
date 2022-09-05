<?php


class Cidadee {
    
    private $id_cidade;
    private $estado;
    private $uf;
    private $nome;
    
    
    function getId_cidade() {
        return $this->id_cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getUf() {
        return $this->uf;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_cidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


    
}
