<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Departamento_U.php';


class Departamento_usuarios {
    
    private $id_departamento_usuario;
    private $Usuario;
    private $Departamento;
    
    
       function __construct() {
        $this->Usuario = new Funcionario();
        $this->Departamento = new Departamento_U ();
       
    }
    
   
    
    
    function getId_departamento_usuario() {
        return $this->id_departamento_usuario;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getDepartamento() {
        return $this->Departamento;
    }

    function setId_departamento_usuario($id_departamento_usuario) {
        $this->id_departamento_usuario = $id_departamento_usuario;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setDepartamento($Departamento) {
        $this->Departamento = $Departamento;
    }


    


}
