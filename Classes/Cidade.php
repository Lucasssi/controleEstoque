<?php


class Cidade {
    
    private $id_cidade;
    private $nome;
    
    function getId_cidade() {
        return $this->id_cidade;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_cidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
