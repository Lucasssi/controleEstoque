<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcao_U.php';



class DaoFuncao_U {
   
    public static function inserir(Funcao_U $funcao) {
         
         $nome = $funcao->getNome();
        
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Funcao_U ( nome ) values ( ? )";
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
        $sql = "SELECT * FROM Funcao_U";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $funcao = new Funcao_U();
            $funcao->setId_Funcao_U($retorno['id_Funcao_U']);
            $funcao->setNome($retorno['nome']);
                    
            $vetor[] = $funcao;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Funcao_U WHERE id_Funcao_U = ?";
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
    
    
    public static function alterar(Funcao_U $funcao) {
            
         $id = $funcao->getId_Funcao_U();
         $nome = $funcao->getNome();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Funcao_U SET nome = ? WHERE id_Funcao_U = ?";
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
        $sql = "select * from Funcao_U WHERE id_Funcao_U = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $funcao = new Funcao_U();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $funcao->setId_Funcao_U($retorno['id_Funcao_U']);
          $funcao->setNome($retorno['nome']);
            
                       
        }
        return $funcao;
    }
    public static function getFuncaoNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Funcao_U WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $funcao = new Funcao_U();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $funcao->setId_Funcao_U($retorno['id_Funcao_U']);
          $funcao->setNome($retorno['nome']);
            
                       
        }
        return $funcao->getNome();
    }
    
}
