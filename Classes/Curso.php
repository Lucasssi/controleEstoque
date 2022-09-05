<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso
 *
 * @author lucas
 */
class Curso {
  
    private $id_curso;
    private $nome;
    
    function getId_curso() {
        return $this->id_curso;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_curso($id_curso) {
        $this->id_curso = $id_curso;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
