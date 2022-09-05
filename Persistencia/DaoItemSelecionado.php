<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/ItemSelecionado.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';




class DaoItemSelecionado {
    
    
     public static function inserir($id_pedido, $id_produto, $qtd, $cx, $cxUn, $total) {
        
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO item_selecionado (id_pedido, id_produto, qtd, cx, cxUn, totalUnidade) values (?, ?, ?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
            $stmt->bindParam(2, $id_produto, PDO::PARAM_INT);
            $stmt->bindParam(3, $qtd, PDO::PARAM_INT);
            $stmt->bindParam(4, $cx, PDO::PARAM_INT);
            $stmt->bindParam(5, $cxUn, PDO::PARAM_INT);
            $stmt->bindParam(6, $total, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
       public static function getItemSelecionadoPorPedido($IdPedido ) {
                 
        $dbh = Conexao::getInstance();
        $sql = "SELECT i.id_item_sel, i.id_pedido, p.codigo as codigoProduto, p.id_MC as id_produto, p.nome as produto, p.descricao, i.qtd, p.id_almox, UM.descricao as UM, TIP.descricao AS ProdutoTipo,
                       i.cx, i.totalUnidade, i.cxUn, p.id_UM
            FROM MaterialConsumo as p 
            INNER JOIN UnidadeMedida as UM ON (UM.id_UM = p.id_UM)
            INNER JOIN tipo AS TIP ON (TIP.id_tipo =  p.id_tipo)
            INNER JOIN item_selecionado as i ON (p.codigo = i.id_produto) 
            INNER JOIN Almoxarifado as a ON (p.id_almox = a.id_almox)
            WHERE i.id_pedido = ? ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $IdPedido, PDO::PARAM_INT);
       // $stmt->bindParam(2, $idAlmox, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        //$MC = new MaterialConsumo();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $item = new ItemSelecionado();
            $item->setItem_selecionado($retorno['id_item_sel']);
            $item->setId_pedido($retorno['id_pedido']);
            $item->getProduto()->setCodigo($retorno['codigoProduto']);
            $item->getProduto()->setId_MC($retorno['id_produto']);
            $item->getProduto()->setNome($retorno['produto']);
            $item->getProduto()->setDescricao($retorno['descricao']);
            $item->getProduto()->getId_UM()->setDescricao($retorno['produto']);
            $item->setQtd($retorno['qtd']);
            $item->getProduto()->getId_almox()->setId_almox($retorno['id_almox']);
            $item->getProduto()->getId_UM()->setDescricao($retorno['UM']);
            $item->getProduto()->getId_tipo()->setDescricao($retorno['ProdutoTipo']);
            $item->setCx($retorno['cx']);
            $item->setTotalUnidade($retorno['totalUnidade']);
            $item->setCxUn($retorno['cxUn']);
            $item->getProduto()->getId_UM()->setId_UM($retorno['id_UM']);
                    
            $vetor[] = $item;
            
        }
        return $vetor;
    }
    
    
        public static function alterar( $id_item, $qtd, $cx, $total) {
            
         
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE item_selecionado SET qtd = ?, cx = ?, totalUnidade = ? WHERE id_item_sel = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $qtd, PDO::PARAM_STR);
            $stmt->bindParam(2, $cx, PDO::PARAM_INT);
            $stmt->bindParam(3, $total, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_item, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
    
    
       public static function getItemSelecionadoPorItem($ItemPedido) {
                 
        $dbh = Conexao::getInstance();
        $sql = "SELECT id_item_sel, id_pedido, id_produto, qtd, cx, cxUn, totalUnidade FROM item_selecionado WHERE id_pedido = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $ItemPedido, PDO::PARAM_INT);
        $stmt->execute();
       // $vetor = array();
        //$MC = new MaterialConsumo();
       $item = new ItemSelecionado();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $item = new ItemSelecionado();
            $item->setItem_selecionado($retorno['id_item_sel']);            
            $item->setId_pedido($retorno['id_pedido']);            
            $item->getProduto()->setId_MC($retorno['id_produto']);
            $item->setQtd($retorno['qtd']);          
            $item->setCx($retorno['cx']);          
            $item->setCxUn($retorno['cxUn']);          
            $item->setTotalUnidade($retorno['totalUnidade']);          
                    
          //  $vetor[] = $item;
           return $item;
        }
         //return $item;
    }
       public static function getItemSelecionadoPorItem2($id_item_sel) {
                 
        $dbh = Conexao::getInstance();
        $sql = "SELECT item.id_item_sel, item.id_pedido, item.id_produto, mc.nome , mc.codigo, mc.descricao, mc.id_UM,  item.qtd, item.cx, item.cxUn, item.totalUnidade "
             . "FROM item_selecionado as item INNER JOIN MaterialConsumo as mc ON (mc.codigo = item.id_produto) "
             . " WHERE id_item_sel = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_item_sel, PDO::PARAM_INT);
        $stmt->execute();
       // $vetor = array();
        //$MC = new MaterialConsumo();
       $item = new ItemSelecionado();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $item = new ItemSelecionado();
            $item->setItem_selecionado($retorno['id_item_sel']);            
            $item->setId_pedido($retorno['id_pedido']);            
            $item->getProduto()->setId_MC($retorno['id_produto']);
            $item->getProduto()->setNome($retorno['nome']);
            $item->getProduto()->setCodigo($retorno['codigo']);
            $item->getProduto()->setDescricao($retorno['descricao']);
            $item->getProduto()->getId_UM()->setId_UM($retorno['id_UM']);
            $item->setQtd($retorno['qtd']);          
            $item->setCx($retorno['cx']);          
            $item->setCxUn($retorno['cxUn']);          
            $item->setTotalUnidade($retorno['totalUnidade']);          
                    
          //  $vetor[] = $item;
           return $item;
        }
         //return $item;
    }
    
    
    
       public static function getVerificarId($id_Pedido, $Cod_Produto ) {
                 
        $dbh = Conexao::getInstance();
        $sql = "SELECT id_produto FROM item_selecionado WHERE id_pedido = ? AND id_produto = ? ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_Pedido, PDO::PARAM_INT);
        $stmt->bindParam(2, $Cod_Produto, PDO::PARAM_INT);
        $stmt->execute();
       // $vetor = array();
        //$MC = new MaterialConsumo();
       
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
           
            
            
                    
          //  $vetor[] = $item;
           return $retorno['id_produto'];
        }
         //return $item;
    }
    
        public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM item_selecionado WHERE id_item_sel = ?";
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
    
    
    
      public static function getTodos($id_pedido) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT i.id_pedido, i.cx, i.totalUnidade, i.cxUn, p.codigo as codigoProduto, p.nome as produto, i.qtd, p.id_almox, p.id_UM "
             . "FROM MaterialConsumo as p "
             . "INNER JOIN item_selecionado as i ON (p.codigo = i.id_produto) "
             . "INNER JOIN Almoxarifado as a ON (p.id_almox = a.id_almox)"
             . "WHERE i.id_pedido = ? ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
    //    $stmt->bindParam(2, $id_almox, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $item = new ItemSelecionado();
            $item->setId_pedido($retorno['id_pedido']);
            $item->setCx($retorno['cx']);
            $item->setTotalUnidade($retorno['totalUnidade']);
            $item->setCxUn($retorno['cxUn']);
            $item->getProduto()->setCodigo($retorno['codigoProduto']);
            $item->getProduto()->setNome($retorno['produto']);
            $item->setQtd($retorno['qtd']);
            $item->getProduto()->setId_UM($retorno['id_UM']);
           
            
                    
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
