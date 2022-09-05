<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/FuncionarioAlmox.php';


class DaoAlmoxarifadoFuncionario {
    
     public static function inserir($id_funcionario, $id_Almox) {
         
                
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Funcionario_Almox ( id_Funcionario, id_Almox ) values ( ? , ? )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_funcionario, PDO::PARAM_INT);
            $stmt->bindParam(2, $id_Almox, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
       public static function getAlmoxUsuario( $id_funcionario ) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT F.nome as funcionario, A.nome as almoxarifado, FA.id_Funcionario, FA.id_Almox, FA.id_Func_Almox 
            FROM Funcionario_Almox AS FA INNER JOIN funcionario AS F ON (F.id_funcionario = FA.id_Funcionario)
                			 INNER JOIN Almoxarifado AS A ON (A.id_almox = FA.id_Almox)
                                      WHERE FA.id_Funcionario = ? ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_funcionario, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $fa = new FuncionarioAlmox();
            $fa->getFuncionario()->setNome($retorno['funcionario']);
            $fa->getAlmoxarifado()->setNome($retorno['almoxarifado']);
            $fa->getFuncionario()->setId_funcionario($retorno['id_Funcionario']);
            $fa->getAlmoxarifado()->setId_almox($retorno['id_Almox']);
            $fa->setId_Func_Almox($retorno['id_Func_Almox']);
                    
            $vetor[] = $fa;
        }
        return $vetor;
    }
    
    
       public static function getVerificarEntrada( $idUsuario, $id_almox ) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT id_Almox FROM Funcionario_Almox WHERE id_Funcionario = ? AND id_Almox = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $idUsuario, PDO::PARAM_INT);
        $stmt->bindParam(2, $id_almox, PDO::PARAM_INT);
        $stmt->execute();
        $teste =null;
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            
            
             $vetor = $retorno['id_Almox'];
             
             $teste = $vetor;
    
        }
          
        return $teste;
    }
    
    
       public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT du.id_Departamento_usuario, du.id_usuario, du.id_departamento,
               d.nome as Departamento, f.nome as Funcionario
                FROM Departamento_usuario as du
                INNER JOIN funcionario AS f ON (f.id_funcionario = du.id_usuario)
                INNER JOIN Departamento_U as d ON (du.id_departamento = d.id_Departamento_U)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $departamento = new Departamento_usuarios();
            $departamento->setId_departamento_usuario($retorno['id_Departamento_usuario']);
            $departamento->getUsuario()->SetId_funcionario($retorno['id_usuario']);
            $departamento->getDepartamento()->SetId_departamento_U($retorno['id_departamento']);
            $departamento->getDepartamento()->SetNome($retorno['Departamento']);
            $departamento->getUsuario()->SetNome($retorno['Funcionario']);
                    
            $vetor[] = $departamento;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Funcionario_Almox WHERE id_Func_Almox = ?";
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
