<?php

 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';


class DaoAlmoxarifado {
    
       public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = "select id_almox, nome, local  from Almoxarifado";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new Almoxarifado();
            $MC->setId_almox($retorno['id_almox']);
            $MC->setNome($retorno['nome']);
            $MC->setLocal($retorno['local']);
            $vetor[] = $MC;
        }
        return $vetor;
    }
    
    public static function inserir(Almoxarifado $Almox) {
         
     //   $id_func = $Almox->getId_funcionamrio();
        $nome    = $Almox->getNome();
        $local   = $Almox->getLocal();
        
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Almoxarifado (nome, local) values (?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $local, PDO::PARAM_STR);
            //$stmt->bindParam(3, $id_func, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
     public static function alterar(Almoxarifado $Almox) {
            
        $id_Almox = $Almox->getId_almox();
      //  $id_func  = $Almox->getId_funcionamrio();
        $nome     = $Almox->getNome();
        $local    = $Almox->getLocal();
         
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE Almoxarifado SET nome = ?, local = ?   WHERE id_almox = ? ";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $local, PDO::PARAM_STR);
           // $stmt->bindParam(3, $id_func, PDO::PARAM_STR);
            $stmt->bindParam(3, $id_Almox, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
     public static function getAlmoxarifado($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select id_almox, nome, local from Almoxarifado WHERE id_almox = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $Almox = new Almoxarifado();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
            $Almox = new Almoxarifado();
            $Almox->setId_almox($retorno['id_almox']);
            $Almox->setNome($retorno['nome']);
            $Almox->setLocal($retorno['local']);
            
            
        }
        return $Almox;
    }
    
     public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Almoxarifado WHERE id_almox = ?";
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
    
}
