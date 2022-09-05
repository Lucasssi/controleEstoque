<?php


 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/UnidadeMedida.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Tipo.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumoSelecionado.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';



class DaoMaterialConsumoSelecionado {
    
     public static function inserir(MaterialConsumoSelecionado $MC) {
         
         $nome = $MC->getNome();
         $Descricao = $MC->getDescricao();
         $Qtd = $MC->getQtd();
         $id_almox = $MC ->getId_almox();
         $id_UM = $MC->getId_UM();
         $id_tipo = $MC->getId_tipo();
         
         
        $dbh = Conexao::getInstance();
        $sql = "CALL PR_addMC2 (?, ?, ?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Descricao, PDO::PARAM_STR);
            $stmt->bindParam(3, $Qtd, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_almox, PDO::PARAM_INT);
            $stmt->bindParam(5, $id_UM, PDO::PARAM_INT);
            $stmt->bindParam(6, $id_tipo, PDO::PARAM_INT);
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
        $sql = "select MC.id_MC, MC.nome as produto, MC.descricao as descMC, MC.qtd, AL.nome,"
                . "  UM.descricao as UnidadeMedidaa, TP.descricao as Tipoo "
                . "from Almoxarifado as AL inner join MaterialConsumo as MC on (AL.id_almox = MC.id_almox) "
                . "inner join tipo as TP on (MC.id_tipo = TP.id_tipo)"
                . " inner join UnidadeMedida as UM on (MC.id_UM = UM.id_UM) order by AL.nome ";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['produto']);
            $MC->setDescricao($retorno['descMC']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['nome']);
            $MC->getId_UM()->setDescricao($retorno['UnidadeMedidaa']);
            $MC->getId_tipo()->setDescricao($retorno['Tipoo']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
   public static function getTodosAlmox() {
        $dbh = Conexao::getInstance();
        $sql = "select id_almox FROM Almoxarifado ";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $almox = new Almoxarifado();
            $almox->setId_almox($retorno['id_almox']);
                     
            $vetor[] = $almox;
        }
        return $vetor;
    }
   
    
    
     public static function getTodosJatoba($id) {
        $dbh = Conexao::getInstance();
        $sql = "select MC.id_MC, MC.nome as produto, MC.descricao as descMC, MC.qtd,"
                . " AL.nome as almoxarifado, AL.id_almox as codAlmox,"
                . " UM.descricao as UnidadeMedida, TP.descricao as Tipo "
                . "from Almoxarifado as AL inner join MaterialConsumo as MC on (AL.id_almox = MC.id_almox)"
                . " inner join tipo as TP on (MC.id_tipo = TP.id_tipo) "
                . "inner join UnidadeMedida as UM on (MC.id_UM = UM.id_UM)"
                . " where AL.id_almox = ? order by Tipo, MC.nome";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['produto']);
            $MC->setDescricao($retorno['descMC']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['codAlmox']);
            $MC->getId_UM()->setDescricao($retorno['UnidadeMedida']);
            $MC->getId_tipo()->setDescricao($retorno['Tipo']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
    
        public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM MaterialConsumo WHERE id_MC = ?";
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
    
        public static function alterar(MaterialConsumo $MC) {
            
         $nome = $MC->getNome();
         $Descricao = $MC->getDescricao();
         $Qtd = $MC->getQtd();
         $id_almox = $MC ->getId_almox();
         $id_UM = $MC->getId_UM();
         $id_tipo = $MC->getId_tipo();
         $id_MC = $MC->getId_MC();
            
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET nome = ? , descricao = ?, qtd = ?, id_almox = ?, id_UM = ?, id_tipo = ? WHERE id_MC = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Descricao, PDO::PARAM_STR);
            $stmt->bindParam(3, $Qtd, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_almox, PDO::PARAM_INT);
            $stmt->bindParam(5, $id_UM, PDO::PARAM_INT);
            $stmt->bindParam(6, $id_tipo, PDO::PARAM_INT);
            $stmt->bindParam(7, $id_MC, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
     public static function getMaterialConsumo($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from MaterialConsumo WHERE id_MC = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $MC = new MaterialConsumo();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->setId_almox($retorno['id_almox']);
            $MC->setId_UM($retorno['id_UM']);
            $MC->setId_tipo($retorno['id_tipo']);
            
        }
        return $MC;
    }
    
    
       public static function getMcQtd($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select id_MC, qtd, nome from MaterialConsumo WHERE id_MC = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $MC = new MaterialConsumo();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC->setId_UM($retorno['id_MC']);
            $MC->setQtd($retorno['qtd']);
            $MC->setNome($retorno['nome']);
           
            
        }
        return $MC;
    }

    
     /* Outro Projeto */
    
      public static function getTodoss() {
        $dbh = Conexao::getInstance();
        $sql = "select p.*, c.descricao as categoria from produto p inner join categoria c on c.id = p.id_categoria"
                . " order by  c.descricao, p.nome";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_categoria, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto();
            $produto->setId($retorno['id']);
            $produto->setNome($retorno['nome']);
            $produto->setValor($retorno['valor']);
            $produto->setObs($retorno['obs']);
            $produto->getCategoria()->setId($retorno['id_categoria']);
            $produto->getCategoria()->setDescricao($retorno['categoria']);
            $vetor[] = $produto;
        }
        return $vetor;
    }
    
   

    

    
        public static function getProduto($id) {
        $dbh = Conexao::getInstance();
        $sql = "select p.*, c.descricao from produto p inner join categoria c on p.id_categoria = c.id where p.id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_STR);
        $stmt->execute();
        $produto = new Produto();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto->setId($retorno['id']);
            $produto->setNome($retorno['nome']);
            $produto->setValor($retorno['valor']);
            $produto->setObs($retorno['obs']);
            $produto->getCategoria()->setId($retorno['id_categoria']);
            $produto->getCategoria()->setDescricao($retorno['descricao']);
        }
        return $produto;
    }
    
    
         public static function getQTD($id) {
        $dbh = Conexao::getInstance();
        $sql = "select qtd from MaterialConsumo where id_MC = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_STR);
        $stmt->execute();
        $produto = new Produto();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto->setId($retorno['id']);
            $produto->setNome($retorno['nome']);
            $produto->setValor($retorno['valor']);
            $produto->setObs($retorno['obs']);
            $produto->getCategoria()->setId($retorno['id_categoria']);
            $produto->getCategoria()->setDescricao($retorno['descricao']);
        }
        return $produto;
    }
}
