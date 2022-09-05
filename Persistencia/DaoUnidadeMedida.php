<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/UnidadeMedida.php';

class DAOUnidadeMedida {
   
     public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = "select * from UnidadeMedida";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $UM = new UnidadeMedida();
            $UM->setId_UM($retorno['id_UM']);
            $UM->setDescricao($retorno['descricao']);
            $vetor[] = $UM;
        }
        return $vetor;
    }
    
    
     public static function inserir(UnidadeMedida $UM) {
         

            $descricao = $UM->getDescricao();
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO UnidadeMedida (descricao) values (?)";
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
    
         public static function getUM($id) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT id_UM, descricao  FROM UnidadeMedida where id_UM = ?';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
     //   $vetor = array();
      //  $pedido = new Pedido();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $UM = new UnidadeMedida();
            $UM->setId_UM($retorno['id_UM']);
            $UM->setDescricao($retorno['descricao']);
           
        }
        
        return $UM;
    }
    
    
      public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM UnidadeMedida WHERE id_UM = ?";
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
    
    
    
    public static function alterar(UnidadeMedida $UM) {
            
         $descricao = $UM->getDescricao();
         $id_UM = $UM->getId_UM();
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE UnidadeMedida SET descricao = ? WHERE id_UM = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(2, $id_UM, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
}

?>