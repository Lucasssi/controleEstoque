<?php

   //require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
class Almoxarifado {
    
    private $id_almox;
    private $nome;
    private $local;
    private $id_funcionamrio;
    
//     function __construct() {
//        $this->id_funcionamrio = new Funcionario();
//       
//    }
    
    function getId_almox() {
        return $this->id_almox;
    }

    function getNome() {
        return $this->nome;
    }

    function getLocal() {
        return $this->local;
    }

//    function getId_funcionamrio() {
//        return $this->id_funcionamrio;
//    }

    function setId_almox($id_almox) {
        $this->id_almox = $id_almox;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLocal($local) {
        $this->local = $local;
    }

//    function setId_funcionamrio($id_funcionamrio) {
//        $this->id_funcionamrio = $id_funcionamrio;
//    }


}
