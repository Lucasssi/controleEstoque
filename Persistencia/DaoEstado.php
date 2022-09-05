<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Estado.php';


class DaoEstado {
    
    
     public static function inserir(Estado $estado) {
         
         $nome = $estado->getNome();
                        
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Estado ( nome ) values ( ? )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
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
        $sql = "SELECT * FROM Estado";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $estado = new Estado();
            $estado->setId_estado($retorno['id_estado']);
            $estado->setNome($retorno['nome']);
                    
            $vetor[] = $estado;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Estado WHERE id_estado = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return 1;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
        
    }
    
    
    public static function alterar(Estado $estado) {
            
         $id = $estado->getId_estado();
         $nome = $estado->getNome();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Estado SET nome = ? WHERE id_estado = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $id, PDO::PARAM_STR);
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getEstado($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Estado WHERE id_estado = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $estado = new Estado();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $estado->setId_estado($retorno['id_estado']);
            $estado->setNome($retorno['nome']);
            
                       
        }
        return $estado;
    }
    
     public static function getEstadoNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Estado WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $estado = new Estado();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $estado->setId_estado($retorno['id_estado']);
          $estado->setNome($retorno['nome']);
            
                       
        }
        return $estado->getNome();
    }
}
