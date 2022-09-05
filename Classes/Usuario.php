<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author lucas
 */
class Usuario {
    
   private $id_usuario;
   private $nome;
   private $sobre_nome;
   private $login;
   private $senha;
   private $matricula;
   
   function getMatricula() {
       return $this->matricula;
   }

   function setMatricula($matricula) {
       $this->matricula = $matricula;
   }

      
   function getId_usuario() {
       return $this->id_usuario;
   }

   function getNome() {
       return $this->nome;
   }

   function getSobre_nome() {
       return $this->sobre_nome;
   }

   function getLogin() {
       return $this->login;
   }

   function getSenha() {
       return $this->senha;
   }

   function setId_usuario($id_usuario) {
       $this->id_usuario = $id_usuario;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setSobre_nome($sobre_nome) {
       $this->sobre_nome = $sobre_nome;
   }

   function setLogin($login) {
       $this->login = $login;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }


   
}
