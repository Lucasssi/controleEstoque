<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Departamento_U.php';


class DaoDepartamentoU {
    
     public static function inserir(Departamento_U $departamento) {
         
         $nome = $departamento->getNome();
        
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Departamento_U ( nome ) values ( ? )";
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
        $sql = "SELECT * FROM departamento";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $departamento = new Departamento_U();
            $departamento->setId_departamento_U($retorno['id_dpt']);
            $departamento->setNome($retorno['nome']);
                    
            $vetor[] = $departamento;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Departamento_U WHERE id_Departamento_U = ?";
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
    
    
    public static function alterar(Departamento_U $departamento) {
            
         $id = $departamento->getId_departamento_U();
         $nome = $departamento->getNome();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Departamento_U SET nome = ? WHERE id_Departamento_U = ?";
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
    
    
    public static function getDepartamento($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Departamento_U WHERE id_departamento_U = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $departamento = new Departamento_U();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $departamento->setId_departamento_U($retorno['id_Departamento_U']);
            $departamento->setNome($retorno['nome']);
            
                       
        }
        return $departamento;
    }
    
     public static function getDepartamentoNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Departamento_U WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $departamento = new Departamento_U();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $departamento->setId_departamento_U($retorno['id_Departamento_U']);
          $departamento->setNome($retorno['nome']);
            
                       
        }
        return $departamento->getNome();
    }
    
    

}
