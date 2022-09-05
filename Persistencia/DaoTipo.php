<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Tipo.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoTipo {
    
    
    
    
        public static function inserir(Tipo $tipo) {
         

            $descricao = $tipo->getDescricao();
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO tipo (descricao) values (?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $descricao, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
    
    public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = "select * from tipo";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tipo = new Tipo();
            $tipo->setId_tipo($retorno['id_tipo']);
            $tipo->setDescricao($retorno['descricao']);
            $vetor[] = $tipo;
        }
        return $vetor;
    }
    
           public static function getTipo($id) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT id_tipo, descricao  FROM tipo where id_tipo = ?';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
     //   $vetor = array();
      //  $pedido = new Pedido();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $tipo = new Tipo();
            $tipo->setId_tipo($retorno['id_tipo']);
            $tipo->setDescricao($retorno['descricao']);
           
        }
        
        return $tipo;
    }
    
    
      public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM tipo WHERE id_tipo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
    public static function alterar(Tipo $tipo) {
            
         $descricao = $tipo->getDescricao();
         $id_tipo = $tipo->getId_tipo();
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE tipo SET descricao = ? WHERE id_tipo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(2, $id_tipo, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
}
