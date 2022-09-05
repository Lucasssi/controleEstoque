<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Status.php';


class DaoStatus {
    
    public static function inserir(Status $Status) {
         
         $nome = $Status->getNome();
        
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Status_pedido ( nome ) values ( ? )";
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
        $sql = "SELECT * FROM `Status_pedido` WHERE id_status_pedido -6 and id_status_pedido - 1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Status = new Status();
            $Status->setId_status($retorno['id_status_pedido']);
            $Status->setNome($retorno['nome']);
                    
            $vetor[] = $Status;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Status_pedido where id_status_pedido = ?";
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
    
    
    public static function alterar(Status $Status) {
            
         $id = $Status->getId_status();
         $nome = $Status->getNome();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Status_pedido SET nome = ? WHERE id_status_pedido = ?";
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
    
    
    public static function getFuncao($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Status_pedido WHERE id_status_pedido = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $Status = new Status();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $Status->setId_status($retorno['id_status_pedido']);
          $Status->setNome($retorno['nome']);
            
                       
        }
        return $Status;
    }
    public static function getFuncaoNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Status_pedido WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $Status = new Status();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $Status->setId_status($retorno['id_status_pedido']);
          $Status->setNome($retorno['nome']);
            
                       
        }
        return $Status->getNome();
    }
}
