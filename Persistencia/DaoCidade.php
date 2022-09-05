<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Cidade.php';


class DaoCidade {
    
     public static function inserir(Cidade $cidade) {
         
         $nome = $cidade->getNome();
        
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Cidade ( nome ) values ( ? )";
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
        $sql = "SELECT * FROM Cidade";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cidade = new Cidade();
            $cidade->setId_cidade($retorno['id_cidade']);
            $cidade->setNome($retorno['nome']);
                    
            $vetor[] = $cidade;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Cidade WHERE id_cidade = ?";
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
    
    
    public static function alterar(Cidade $cidade) {
            
         $id = $cidade->getId_cidade();
         $nome = $cidade->getNome();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Cidade SET nome = ? WHERE id_cidade = ?";
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
    
    
    public static function getCidade($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Cidade WHERE id_cidade = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $cidade = new Cidade();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $cidade->setId_cidade($retorno['id_cidade']);
            $cidade->setNome($retorno['nome']);
            
                       
        }
        return $cidade;
    }
    
     public static function getCidadeNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Cidade WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $cidade = new Cidade();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $cidade->setId_cidade($retorno['id_cidade']);
          $cidade->setNome($retorno['nome']);
            
                       
        }
        return $cidade->getNome();
    }
    
    

}
