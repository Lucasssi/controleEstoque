<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/ItemMaterial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/saidaMC.php';

class DaoItemMC {
  
    
    
    public static function inserir($id_MC, $qtd, $id_SMC) {
        
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO ItemMaterial (id_SMC, id_MC, qtd) values (?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_SMC, PDO::PARAM_INT);
            $stmt->bindParam(2, $id_MC, PDO::PARAM_INT);
            $stmt->bindParam(3, $qtd, PDO::PARAM_INT);
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
        $sql = "select im.id_item, smc.dataSaida,  d.nome as Departamento, mc.nome as Material,"
                . " im.qtd as Quantidade, f.nome as Funcionario "
                . "from funcionario as f inner join saidaMC as smc on (f.id_funcionario = smc.id_funcionario) "
                . "inner join departamento as d on (d.id_dpt = smc.id_dpt) "
                . "inner join ItemMaterial as im on (im.id_SMC = smc.id_SMC) "
                . "inner join MaterialConsumo as mc on (mc.id_MC = im.id_MC)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $item = new ItemMaterial();
            $item->setIdItem($retorno['id_item']);
            $item->getId_SMC()->setDatasaida($retorno['dataSaida']);
            $item->getId_SMC()->getId_dpt()->setNome($retorno['Departamento']);
            $item->getId_MC()->setNome($retorno['Material']);
            $item->setQtd($retorno['Quantidade']);
            $item->getId_SMC()->getId_funcionario()->setNome($retorno['Funcionario']);
                    
            $vetor[] = $item;
        }
        return $vetor;
    }
    
       public static function getTodosSMC() {
        $dbh = Conexao::getInstance();
        $sql = "select id_SMC from saidaMC ORDER BY id_SMC DESC";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $SMC = new saidaMC();
            $SMC->setId_SMC($retorno['id_SMC']);
                    
            $vetor[] = $SMC;
        }
        return $vetor;
    }
    
    
       public static function getPorCurso($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select im.id_item, smc.dataSaida,  d.nome as Departamento, mc.nome as Material,"
                . " im.qtd as Quantidade, f.nome as Funcionario "
                . "from funcionario as f inner join saidaMC as smc on (f.id_funcionario = smc.id_funcionario) "
                . "inner join departamento as d on (d.id_dpt = smc.id_dpt) "
                . "inner join ItemMaterial as im on (im.id_SMC = smc.id_SMC) "
                . "inner join MaterialConsumo as mc on (mc.id_MC = im.id_MC) where d.id_dpt = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $MC = new MaterialConsumo();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           $item = new ItemMaterial();
            $item->setIdItem($retorno['id_item']);
            $item->getId_SMC()->setDatasaida($retorno['dataSaida']);
            $item->getId_SMC()->getId_dpt()->setNome($retorno['Departamento']);
            $item->getId_MC()->setNome($retorno['Material']);
            $item->setQtd($retorno['Quantidade']);
            $item->getId_SMC()->getId_funcionario()->setNome($retorno['Funcionario']);
                    
            $vetor[] = $item;
            
        }
        return $vetor;
    }
    
    
        public static function getPorSaida($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select im.id_item, smc.dataSaida, d.nome as Departamento, mc.nome as Material,"
                . " im.qtd as Quantidade, f.nome as Funcionario "
                . "from funcionario as f inner join saidaMC as smc on (f.id_funcionario = smc.id_funcionario) "
                . "inner join departamento as d on (d.id_dpt = smc.id_dpt) "
                . "inner join ItemMaterial as im on (im.id_SMC = smc.id_SMC) "
                . "inner join MaterialConsumo as mc on (mc.id_MC = im.id_MC) "
                . "where smc.id_SMC = ? ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $MC = new MaterialConsumo();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           $item = new ItemMaterial();
            $item->setIdItem($retorno['id_item']);
            $item->getId_SMC()->setDatasaida($retorno['dataSaida']);
            $item->getId_SMC()->getId_dpt()->setNome($retorno['Departamento']);
            $item->getId_MC()->setNome($retorno['Material']);
            $item->setQtd($retorno['Quantidade']);
            $item->getId_SMC()->getId_funcionario()->setNome($retorno['Funcionario']);
            
            
                    
            $vetor[] = $item;
            
        }
        return $vetor;
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
