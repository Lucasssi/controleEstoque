<?php


class Categoria {
    
    private $id;
    private $nome;
    private $estMin;
    private $estMed;
    private $comp;
    
    
    
    function getEstMin() {
        return $this->estMin;
    }

    function getEstMed() {
        return $this->estMed;
    }

    function getComp() {
        return $this->comp;
    }

    function setEstMin($estMin) {
        $this->estMin = $estMin;
    }

    function setEstMed($estMed) {
        $this->estMed = $estMed;
    }

    function setComp($comp) {
        $this->comp = $comp;
    }

        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
