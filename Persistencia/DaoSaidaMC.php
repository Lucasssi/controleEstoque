<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/saidaMC.php';


class DaoSaidaMC {
    
         public static function inserir(saidaMC $saidaMC) {
         
             $id_curso = $saidaMC->getId_dpt();
             $id_funcionario = $saidaMC->getId_funcionario();
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO saidaMC (dataSaida, id_dpt, id_funcionario) values (now(), ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_curso, PDO::PARAM_INT);
            $stmt->bindParam(2, $id_funcionario, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    public static function getMaiorID() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT MAX(id_SMC) as maior FROM `saidaMC` WHERE id_SMC";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $maior = $retorno['maior'];
            
                    
            
        }
        return $maior;
    }
   
}
