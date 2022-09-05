<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author lucas
 */
class Empresa {
    
   private $id_empresa;
   private $nome;
   private $nome_fantasia;
   private $cmpj;
   private $email;
   private $site;
   private $seguimento;
   private $telefone;
   private $estado;
   private $cidade;
   private $rua;
   private $numero;
   private $bairro;
   
   
   
   function getBairro() {
       return $this->bairro;
   }

   function setBairro($bairro) {
       $this->bairro = $bairro;
   }

      
   function getEstado() {
       return $this->estado;
   }

   function getCidade() {
       return $this->cidade;
   }

   function getRua() {
       return $this->rua;
   }

   function getNumero() {
       return $this->numero;
   }

   function setEstado($estado) {
       $this->estado = $estado;
   }

   function setCidade($cidade) {
       $this->cidade = $cidade;
   }

   function setRua($rua) {
       $this->rua = $rua;
   }

   function setNumero($numero) {
       $this->numero = $numero;
   }

              
   function getTelefone() {
       return $this->telefone;
   }

   function setTelefone($telefone) {
       $this->telefone = $telefone;
   }

      
   function getId_empresa() {
       return $this->id_empresa;
   }

   function getNome() {
       return $this->nome;
   }

   function getNome_fantasia() {
       return $this->nome_fantasia;
   }

   function getCmpj() {
       return $this->cmpj;
   }

   function getEmail() {
       return $this->email;
   }

   function getSite() {
       return $this->site;
   }

   function getSeguimento() {
       return $this->seguimento;
   }

   function setId_empresa($id_empresa) {
       $this->id_empresa = $id_empresa;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setNome_fantasia($nome_fantasia) {
       $this->nome_fantasia = $nome_fantasia;
   }

   function setCmpj($cmpj) {
       $this->cmpj = $cmpj;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSite($site) {
       $this->site = $site;
   }

   function setSeguimento($seguimento) {
       $this->seguimento = $seguimento;
   }


   
}
