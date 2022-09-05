<?php

 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/UnidadeMedida.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Tipo.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/SaidaProduto.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoMaterialConsumo {
    
    
     public static function inserir(MaterialConsumo $MC) {
         $nome = $MC->getNome();
         $Descricao = $MC->getDescricao();
         $Qtd = $MC->getQtd();
         $id_almox = $MC ->getId_almox();
         $id_UM = $MC->getId_UM();
         $id_tipo = $MC->getId_tipo();
         $codigo = $MC->getCodigo();
         $validade = $MC->getValidade();
         
         
        $dbh = Conexao::getInstance();
        //$sql = "CALL PR_addMC2 (?, ?, ?, ?, ?, ?, ?)";
        $sql = "INSERT INTO MaterialConsumo (nome, descricao, qtd, id_almox, id_UM, id_tipo, codigo, validade) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Descricao, PDO::PARAM_STR);
            $stmt->bindParam(3, $Qtd, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_almox, PDO::PARAM_INT);
            $stmt->bindParam(5, $id_UM, PDO::PARAM_INT);
            $stmt->bindParam(6, $id_tipo, PDO::PARAM_INT);
            $stmt->bindParam(7, $codigo, PDO::PARAM_INT);
            $stmt->bindParam(8, $validade, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
     public static function inserirCodigo($idAlmox, $codigo, $nf) {
      
        $dbh = Conexao::getInstance();
        //$sql = "CALL PR_addMC2 (?, ?, ?, ?, ?, ?, ?)";
        $sql = "INSERT INTO MaterialConsumo (nome, descricao,     qtd, id_almox, id_UM, id_tipo, codigo, EstMinUn, EstMinCx, EstMedUn, NF, statuss, Cx, CxUn) 
                                     VALUES ('nulo',   'nulo',     0,     ?,       2,      4,      ?,       0,        0,         0,    ?,   0,      0,   0)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $idAlmox, PDO::PARAM_INT);
            $stmt->bindParam(2, $codigo, PDO::PARAM_INT);
            $stmt->bindParam(3, $nf, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
     public static function inserir3($id_almox, $codigo, $NF) {
         
         
        
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO MaterialConsumo 
                (nome,   descricao,     qtd, id_almox, id_UM, id_tipo, codigo, EstMinUn, EstMinCx, EstMedUn, NF, statuss, Cx, CxUn, EstMedCx) VALUES 
                ('nulo',   'nulo',       0,     ?,       2,      3,      ?,       0,        0,         0,     ?,   0,      0,   0,    0     )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_almox, PDO::PARAM_STR);
            $stmt->bindParam(2, $codigo, PDO::PARAM_STR);
            $stmt->bindParam(3, $NF, PDO::PARAM_INT);
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
     public static function inserirCodigo2($idAlmox, $codigo, $nf) {
      
        $dbh = Conexao::getInstance();
        //$sql = "CALL PR_addMC2 (?, ?, ?, ?, ?, ?, ?)";
        $sql = "INSERT INTO MaterialConsumo 
                (nome,   descricao,     qtd, id_almox, id_UM, id_tipo, codigo, EstMinUn, EstMinCx, EstMedUn, NF, statuss, Cx, CxUn, EstMedCx, validade) VALUES 
                ('nulo',   'nulo',       0,     ?,       2,      3,      ?,       0,        0,         0,     ?,   0,      0,   0,    0    , '00/00/0000' )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $idAlmox, PDO::PARAM_INT);
            $stmt->bindParam(2, $codigo, PDO::PARAM_INT);
            $stmt->bindParam(3, $nf, PDO::PARAM_STR);
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
        $sql = "select MC.id_MC, MC.nome as produto, MC.descricao as descMC, MC.qtd, AL.nome,
                  UM.descricao as UnidadeMedidaa, TP.descricao as Tipoo, MC.codigo, MC.validade
                  from Almoxarifado as AL inner join MaterialConsumo as MC on (AL.id_almox = MC.id_almox)
                  inner join tipo as TP on (MC.id_tipo = TP.id_tipo)
                  inner join UnidadeMedida as UM on (MC.id_UM = UM.id_UM) order by AL.nome ";
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
            $MC->setCodigo($retorno['codigo']);
            $MC->setValidade($retorno['validade']);
           
         
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
    
   public static function getIdMCMaior() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT Max(id_MC) as idMaior FROM MaterialConsumo ";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $idMCMaior = $retorno['idMaior'];
                     
            return $idMCMaior + 1;
        }
       
    }
    
   public static function getDataVencimento() {
       //PEGA DATA ATUAL E SOMA MAIS A QUANTIDADE DE DIAS(NA CONSULTA ESTA COM 30 DIAS)
        $dbh = Conexao::getInstance();
        $sql = "SELECT DATE_ADD(CURDATE(), INTERVAL 30 DAY) as dataVenvimento";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $DataVenc = $retorno['dataVenvimento'];
                     
            return $DataVenc;
        }
       
    }
   public static function getMenorData() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT MIN(validade) as menorData FROM `materialconsumo` WHERE validade != '0000-00-00' and qtd >0";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $menorData = $retorno['menorData'];
                     
            return $menorData;
        }
       
    }
   
    
    
     public static function getTodosJatoba($id) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT mc.id_MC, mc.nome, mc.descricao, mc.qtd, mc.id_almox, al.nome as almoxarifado, mc.id_UM, um.descricao as 'UnidMedida', mc.id_tipo,"
             . " tp.descricao as Nometipo, mc.codigo, mc.EstMinUn, mc.EstMinCx, mc.EstMedUn, mc.EstMedCx, mc.NF, nota.numero , mc.statuss, mc.Cx, mc.CxUn, mc.statuss, mc.validade "
             . "FROM MaterialConsumo as mc "
             . "INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox) "
             . "INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM) "
             . "INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo) "
             . "INNER JOIN NotaFiscal as nota ON (nota.id_notaFiscal = mc.NF)"
             . " WHERE mc.id_almox = ? and mc.statuss = 1";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['id_almox']);
            $MC->getId_UM()->setId_UM($retorno['id_UM']);
            $MC->getId_UM()->setDescricao($retorno['UnidMedida']);
            $MC->getId_tipo()->setId_tipo($retorno['id_tipo']);
            $MC->getId_tipo()->setDescricao($retorno['Nometipo']);
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->getNF()->SetId_notafiscal($retorno['NF']);
            $MC->getNF()->SetNumero($retorno['numero']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setValidade($retorno['validade']);
           // $MC->getCategoria()->setId($retorno['id']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
     public static function getVencimento30Dias($DataMenor, $DataVencimento) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT mc.id_MC, mc.nome, mc.descricao, mc.qtd, mc.id_almox, al.nome as almoxarifado, mc.id_UM, um.descricao as 'UnidMedida', mc.id_tipo,
              tp.descricao as Nometipo, mc.codigo, mc.EstMinUn, mc.EstMinCx, mc.EstMedUn, mc.EstMedCx, mc.NF, nota.numero , mc.statuss, mc.Cx, mc.CxUn, mc.statuss, mc.validade, ca.nome as categoriaNome, ca.id as idcateg
             FROM MaterialConsumo as mc 
             INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox)
             INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM)
             INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo)
             INNER JOIN NotaFiscal as nota ON (nota.id_notaFiscal = mc.NF)
             INNER JOIN categoria as ca ON (ca.id = mc.id_categoria)
             WHERE mc.validade BETWEEN (?)  AND (?)
             ORDER BY categoriaNome";
        $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $DataMenor, PDO::PARAM_STR);
        $stmt->bindParam(2, $DataVencimento, PDO::PARAM_STR);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['id_almox']);
            $MC->getId_UM()->setId_UM($retorno['id_UM']);
            $MC->getId_UM()->setDescricao($retorno['UnidMedida']);
            $MC->getId_tipo()->setId_tipo($retorno['id_tipo']);
            $MC->getId_tipo()->setDescricao($retorno['Nometipo']);
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->getNF()->SetId_notafiscal($retorno['NF']);
            $MC->getNF()->SetNumero($retorno['numero']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setValidade($retorno['validade']);
            $MC->getCategoria()->setId($retorno['idcateg']);
            $MC->getCategoria()->setNome($retorno['categoriaNome']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
     public static function getTodosCategoria() {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT mc.id_MC, mc.nome, mc.descricao, mc.qtd, mc.id_almox, al.nome as almoxarifado, mc.id_UM, um.descricao as 'UnidMedida', mc.id_tipo,
              tp.descricao as Nometipo, mc.codigo, mc.EstMinUn, mc.EstMinCx, mc.EstMedUn, mc.EstMedCx, mc.NF, nota.numero , mc.statuss, mc.Cx, mc.CxUn, mc.statuss, mc.validade, ca.nome as categoriaNome, ca.id as idcateg
             FROM MaterialConsumo as mc 
             INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox)
             INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM)
             INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo)
             INNER JOIN NotaFiscal as nota ON (nota.id_notaFiscal = mc.NF)
             INNER JOIN categoria as ca ON (ca.id = mc.id_categoria)";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
       // $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['id_almox']);
            $MC->getId_UM()->setId_UM($retorno['id_UM']);
            $MC->getId_UM()->setDescricao($retorno['UnidMedida']);
            $MC->getId_tipo()->setId_tipo($retorno['id_tipo']);
            $MC->getId_tipo()->setDescricao($retorno['Nometipo']);
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->getNF()->SetId_notafiscal($retorno['NF']);
            $MC->getNF()->SetNumero($retorno['numero']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setValidade($retorno['validade']);
            $MC->getCategoria()->setId($retorno['idcateg']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
    
    
     public static function getTodosCategoriaItems($id_categoria) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT mc.id_MC, mc.nome, mc.descricao, mc.qtd, mc.id_almox, al.nome as almoxarifado, mc.id_UM, um.descricao as 'UnidMedida', mc.id_tipo,
              tp.descricao as Nometipo, mc.codigo, mc.EstMinUn, mc.EstMinCx, mc.EstMedUn, mc.EstMedCx, mc.NF, nota.numero , mc.statuss, mc.Cx, mc.CxUn, mc.statuss, mc.validade, ca.nome as categoriaNome, ca.id as idcateg
             FROM MaterialConsumo as mc 
             INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox)
             INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM)
             INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo)
             INNER JOIN NotaFiscal as nota ON (nota.id_notaFiscal = mc.NF)
             INNER JOIN categoria as ca ON (ca.id = mc.id_categoria)
             WHERE ca.id = ?";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_categoria, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['id_almox']);
            $MC->getId_UM()->setId_UM($retorno['id_UM']);
            $MC->getId_UM()->setDescricao($retorno['UnidMedida']);
            $MC->getId_tipo()->setId_tipo($retorno['id_tipo']);
            $MC->getId_tipo()->setDescricao($retorno['Nometipo']);
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->getNF()->SetId_notafiscal($retorno['NF']);
            $MC->getNF()->SetNumero($retorno['numero']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setValidade($retorno['validade']);
            $MC->getCategoria()->setId($retorno['idcateg']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
     public static function getTodosCategoriaItems2($id_categoria) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT mc.id_MC, mc.nome, mc.descricao, mc.qtd, mc.id_almox, al.nome as almoxarifado, mc.id_UM, um.descricao as 'UnidMedida', mc.id_tipo,
              tp.descricao as Nometipo, mc.codigo, mc.EstMinUn, mc.EstMinCx, mc.EstMedUn, mc.EstMedCx, mc.NF, mc.statuss, mc.Cx, mc.CxUn, mc.statuss, mc.validade, ca.nome as categoriaNome, ca.id as idcateg
             FROM MaterialConsumo as mc 
             INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox)
             INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM)
             INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo)
             INNER JOIN categoria as ca ON (ca.id = mc.id_categoria)
             WHERE ca.id = ?";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_categoria, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['id_almox']);
            $MC->getId_UM()->setId_UM($retorno['id_UM']);
            $MC->getId_UM()->setDescricao($retorno['UnidMedida']);
            $MC->getId_tipo()->setId_tipo($retorno['id_tipo']);
            $MC->getId_tipo()->setDescricao($retorno['Nometipo']);
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->getNF()->SetId_notafiscal($retorno['NF']);
         //   $MC->getNF()->SetNumero($retorno['numero']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setValidade($retorno['validade']);
            $MC->getCategoria()->setId($retorno['idcateg']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
    
    
     public static function getTodosSaidaJaneiro($anoAtual, $anofinal) {        
        $dbh = Conexao::getInstance();
        $sql = "SELECT 
                dp.id_dpt, dp.nome as NomeDepar, 
                pe.id_pedido as idpedido, pe.id_status, STP.nome as StatusPedido, pe.data_pedido, pe.data_entrega,
                sp.id_sp, sp.codigoProduto, sp.atendido as Saida,
                mc.nome as NomeProduto, mc.id_MC,
                ca.nome as CategoriaMC, 
                tp.descricao AS TIPO_Produto,
                um.descricao as UnidadeMedidaMC,
                AL.nome as almoxarifado
                      FROM departamento    AS dp 
                INNER JOIN pedido          AS pe  ON (dp.id_dpt = pe.id_departamento)
                INNER JOIN status_pedido   as STP ON (STP.id_status_pedido = pe.id_status)
                INNER JOIN saidaproduto    AS sp  ON (pe.id_pedido = sp.id_pedido)
                INNER JOIN materialconsumo AS MC  ON (sp.Id_Produto = mc.id_MC)
                INNER JOIN categoria       AS ca  ON (ca.id = mc.id_categoria)
                INNER JOIN tipo            AS tp  ON (tp.id_tipo = mc.id_tipo) 
                INNER JOIN unidademedida   AS um  ON (um.id_UM = mc.id_UM)
                INNER JOIN almoxarifado    AS AL  ON (AL.id_almox = mc.id_almox)
                WHERE pe.data_entrega 
                BETWEEN 
                ('?-01-01') 
                AND 
                ('?-12-31')
                ORDER BY NomeDepar";
        $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $anoAtual, PDO::PARAM_INT);
        $stmt->bindParam(2, $anofinal, PDO::PARAM_INT);
        $stmt->execute();
        $dbh->commit();
    
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $sp = new SaidaProduto();
            $sp->getPedido()->getCurso()->setId_curso($retorno['id_dpt']);
            $sp->getPedido()->getCurso()->setNome($retorno['NomeDepar']);
            $sp->getPedido()->getStatus()->setId_status($retorno['id_status']);
            $sp->getPedido()->getStatus()->SetNome($retorno['StatusPedido']);
            $sp->getPedido()->setData_pedido($retorno['data_pedido']);
            $sp->getPedido()->setData_entrega($retorno['data_entrega']);
            $sp->setId_sp($retorno['id_sp']);
            $sp->getProduto()->setCodigo($retorno['codigoProduto']);
            $sp->setAtendido($retorno['Saida']);
            $sp->getProduto()->setNome($retorno['NomeProduto']);
            $sp->getProduto()->setId_MC($retorno['id_MC']);
            $sp->getProduto()->getCategoria()->setNome($retorno['CategoriaMC']);
            $sp->getProduto()->getId_tipo()->setDescricao($retorno['TIPO_Produto']);
            $sp->getProduto()->getId_UM()->setDescricao($retorno['UnidadeMedidaMC']);
            $sp->getProduto()->getId_almox()->setNome($retorno['almoxarifado']);           
            $vetor[] = $sp;           
        }
        return $vetor;
    }
    
    
    
    public static function getDepartamentoConsumo($anoAtual) {        
        $dbh = Conexao::getInstance();
        $sql = "SELECT dp.id_dpt, dp.nome as NomeDepar, SUM(sp.atendido) as totalAno 
                FROM departamento    AS dp 
                INNER JOIN pedido     AS pe  ON (dp.id_dpt = pe.id_departamento)
                INNER JOIN saidaproduto as sp ON (sp.id_pedido = pe.id_pedido)
                WHERE pe.data_entrega BETWEEN ('?-01-01') AND ('?-12-31')
                GROUP BY NomeDepar
                ORDER BY totalAno";
        $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $anoAtual, PDO::PARAM_STR);
        $stmt->bindParam(2, $anoAtual, PDO::PARAM_STR);
        $stmt->execute();
        $dbh->commit();
    
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $sp = new SaidaProduto();
            $sp->getPedido()->getCurso()->setId_curso($retorno['id_dpt']);
            $sp->getPedido()->getCurso()->setNome($retorno['NomeDepar']);
            $sp->setAtendido($retorno['totalAno']);
                 
            $vetor[] = $sp;           
        }
        return $vetor;
    }
    
    
    
    
     public static function getTodosCategoriaID($Id_categoria) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
     $sql = "SELECT ca.nome as categoriaNome, ca.id as idcateg, sum(mc.qtd) as total, ca.estMed, ca.estMin, ca.comp 
             FROM MaterialConsumo as mc 
             INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox)
             INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM)
             INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo)
             INNER JOIN NotaFiscal as nota ON (nota.id_notaFiscal = mc.NF)
             INNER JOIN categoria as ca ON (ca.id = mc.id_categoria)
             WHERE ca.id =?";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $Id_categoria, PDO::PARAM_INT);
        $stmt->execute();
      //  $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
         
            
            $MC->getCategoria()->setNome($retorno['categoriaNome']);
            $MC->getCategoria()->setId($retorno['idcateg']);
            $MC->getCategoria()->setEstMed($retorno['estMed']);
            $MC->getCategoria()->setEstMin($retorno['estMin']);
            $MC->getCategoria()->setComp($retorno['comp']);
            $MC->setQtd($retorno['total']);
           
         
        //    $vetor[] = $MC;
              return $MC;
        }
      
    }
     public static function getTodosCategoriaID2($Id_categoria) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
     $sql = "SELECT ca.nome as categoriaNome, ca.id as idcateg, sum(mc.qtd) as total, ca.estMed, ca.estMin, ca.comp 
             FROM MaterialConsumo as mc 
             INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox)
             INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM)
             INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo)
             INNER JOIN categoria as ca ON (ca.id = mc.id_categoria)
             WHERE ca.id =?";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $Id_categoria, PDO::PARAM_INT);
        $stmt->execute();
      //  $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $MC = new MaterialConsumo();
         
            
            $MC->getCategoria()->setNome($retorno['categoriaNome']);
            $MC->getCategoria()->setId($retorno['idcateg']);
            $MC->getCategoria()->setEstMed($retorno['estMed']);
            $MC->getCategoria()->setEstMin($retorno['estMin']);
            $MC->getCategoria()->setComp($retorno['comp']);
            $MC->setQtd($retorno['total']);
           
         
        //    $vetor[] = $MC;
              return $MC;
        }
      
    }
    
    
     public static function getTodosPorNotaFiscal($id_notaFiscal) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT mc.id_MC, mc.nome, mc.descricao, mc.qtd, mc.id_almox, al.nome as almoxarifado, mc.id_UM, um.descricao as 'UnidMedida', mc.id_tipo,"
             . " tp.descricao as Nometipo, mc.codigo, mc.EstMinUn, mc.EstMinCx, mc.EstMedUn, mc.EstMedCx, mc.NF, nota.numero , mc.statuss, mc.Cx, mc.CxUn, mc.statuss, mc.validade "
             . "FROM MaterialConsumo as mc "
             . "INNER JOIN Almoxarifado as al ON (al.id_almox = mc.id_almox) "
             . "INNER JOIN UnidadeMedida as um ON (um.id_UM = mc.id_UM) "
             . "INNER JOIN tipo as tp ON (tp.id_tipo = mc.id_tipo) "
             . "INNER JOIN NotaFiscal as nota ON (nota.id_notaFiscal = mc.NF)"
             . " WHERE mc.NF = ?";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_notaFiscal, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $MC = new MaterialConsumo();
            $MC->setId_MC($retorno['id_MC']);
            $MC->setNome($retorno['nome']);
            $MC->setDescricao($retorno['descricao']);
            $MC->setQtd($retorno['qtd']);
            $MC->getId_almox()->setNome($retorno['almoxarifado']);
            $MC->getId_almox($retorno['id_almox']);
            $MC->getId_UM()->setId_UM($retorno['id_UM']);
            $MC->getId_UM()->setDescricao($retorno['UnidMedida']);
            $MC->getId_tipo()->setId_tipo($retorno['id_tipo']);
            $MC->getId_tipo()->setDescricao($retorno['Nometipo']);
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->getNF()->SetId_notafiscal($retorno['NF']);
            $MC->getNF()->SetNumero($retorno['numero']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setValidade($retorno['validade']);
           
         
            $vetor[] = $MC;
        }
        return $vetor;
    }
    
    
    
    
     public static function VerificarCodigo($codigo) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "SELECT codigo FROM MaterialConsumo WHERE codigo = ?";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $codigo, PDO::PARAM_INT);
        $stmt->execute();
        //$vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
            return $retorno['codigo'];
           
         
            
        }
        //return $vetor;
    }
    
     public static function getItemAlmox($id_almox, $codigoProduto) {
        // $id = 5;
         
        $dbh = Conexao::getInstance();
        $sql = "select MC.id_MC, MC.nome as produto, MC.descricao as descMC, MC.qtd, AL.nome as almoxarifado, MC.EstMinUn,
               AL.id_almox as codAlmox, UM.descricao as UnidadeMedida, TP.descricao as Tipo, MC.codigo as codigoMC, MC.validade, MC.CxUn, MC.Cx
               from Almoxarifado as AL inner join MaterialConsumo as MC on (AL.id_almox = MC.id_almox) 
                                    inner join tipo as TP on (MC.id_tipo = TP.id_tipo) 
                                    inner join UnidadeMedida as UM on (MC.id_UM = UM.id_UM) 
                                    where AL.id_almox = ? and MC.codigo = ? order by Tipo, MC.nome ";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_almox, PDO::PARAM_INT);
        $stmt->bindParam(2, $codigoProduto, PDO::PARAM_INT);
        $stmt->execute();
        //$vetor = array();
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
            $MC->setCodigo($retorno['codigoMC']);
            $MC->setValidade($retorno['validade']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setCx($retorno['Cx']);
            $MC->setEstMinUn($retorno['EstMinUn']);
         
           
         
           // $vetor[] = $MC;
        }
        //return $vetor;
          return $MC;
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
         $codigo = $MC->getId_MC();
            
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET nome = ? , descricao = ?, id_UM = ?, id_tipo = ? WHERE codigo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Descricao, PDO::PARAM_STR);
           // $stmt->bindParam(3, $Qtd, PDO::PARAM_INT);
            //$stmt->bindParam(4, $id_almox, PDO::PARAM_INT);
            $stmt->bindParam(3, $id_UM, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_tipo, PDO::PARAM_INT);
            $stmt->bindParam(5, $codigo, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
        public static function alterarCX( $Cxx, $id_MC) {
            
//         $nome = $MC->getNome();
//         $Descricao = $MC->getDescricao();
//         $Qtd = $MC->getQtd();
//         $id_almox = $MC ->getId_almox();
//         $id_UM = $MC->getId_UM();
//         $id_tipo = $MC->getId_tipo();
//         $id_MC = $MC->getId_MC();
//         $codigo = $MC->getId_MC();
            
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET CxUn = ? WHERE codigo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $Cxx, PDO::PARAM_STR);
            $stmt->bindParam(2, $id_MC, PDO::PARAM_STR);
              // $stmt->bindParam(3, $Qtd, PDO::PARAM_INT);
             //$stmt->bindParam(4, $id_almox, PDO::PARAM_INT);
            // $stmt->bindParam(3, $id_UM, PDO::PARAM_INT);
           // $stmt->bindParam(4, $id_tipo, PDO::PARAM_INT);
          // $stmt->bindParam(5, $codigo, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
        public static function FinalizarPedido($Id_pedido) {
           
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET statuss = 1  WHERE NF = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $Id_pedido, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
    
        public static function EntradaNotaFiscal($id_NotaFiscal) {
            
      
        $dbh = Conexao::getInstance();
        $sql = "CALL InserirDadosNF(?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_NotaFiscal, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
        public static function InserirDados(MaterialConsumo $MC) {
            
         $nome = $MC->getNome();
         $Descricao = $MC->getDescricao();
         $id_UM = $MC->getId_UM()->getId_UM();
         $id_tipo = $MC->getId_tipo()->getId_tipo();
         $codigo = $MC->getCodigo();
         $validade = $MC->getValidade();
         $categoria = $MC->getCategoria()->getId();
            
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET nome = ? , descricao = ?, id_UM = ?, id_tipo = ?, statuss = 0, validade = ?, id_categoria = ? WHERE codigo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Descricao, PDO::PARAM_STR);
            $stmt->bindParam(3, $id_UM, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_tipo, PDO::PARAM_INT);
            $stmt->bindParam(5, $validade, PDO::PARAM_STR);
            $stmt->bindParam(6, $categoria, PDO::PARAM_INT);
            $stmt->bindParam(7, $codigo, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
        public static function InserirDados2(MaterialConsumo $MC) {
            
         $EstMedCx = $MC->getEstMedCx();
         $EstMinCx = $MC->getEstMinCx();
         $Cx = $MC->getCx();
         $CxUn = $MC->getCxUn();
         $Qtd = $MC->getQtd();
        
         $codigo = $MC->getCodigo();
            
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET  EstMedUn = -1, EstMinUn = -1, EstMedCx = ? , EstMinCx = ?, Cx = ?, CxUn = ?, qtd = ?  WHERE codigo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $EstMedCx, PDO::PARAM_STR);
            $stmt->bindParam(2, $EstMinCx, PDO::PARAM_STR);
            $stmt->bindParam(3, $Cx, PDO::PARAM_INT);
            $stmt->bindParam(4, $CxUn, PDO::PARAM_INT);
            $stmt->bindParam(5, $Qtd, PDO::PARAM_INT);
            $stmt->bindParam(6, $codigo, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
        public static function InserirDados3(MaterialConsumo $MC) {
            
         $EstMedUn = $MC->getEstMedUn();
         $EstMinUn = $MC->getEstMinUn();
         $Qtd = $MC->getQtd();
        
         $codigo = $MC->getCodigo();
            
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE MaterialConsumo SET  EstMedCx = -1, EstMinCx = -1, EstMedUn = ? , EstMinUn = ?, qtd = ?  WHERE codigo = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $EstMedUn, PDO::PARAM_STR);
            $stmt->bindParam(2, $EstMinUn, PDO::PARAM_STR);
            $stmt->bindParam(3, $Qtd, PDO::PARAM_INT);
            $stmt->bindParam(4, $codigo, PDO::PARAM_INT);
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
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->setNF($retorno['NF']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setValidade($retorno['validade']);
            $MC->setCategoria($retorno['id_categoria']);
            
        }
        return $MC;
    }
    
    
     public static function getMaterialConsumoCodigo($codigo) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from MaterialConsumo WHERE codigo = ?";
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
            $MC->setCodigo($retorno['codigo']);
            $MC->setEstMinUn($retorno['EstMinUn']);
            $MC->setEstMinCx($retorno['EstMinCx']);
            $MC->setEstMedUn($retorno['EstMedUn']);
            $MC->setEstMedCx($retorno['EstMedCx']);
            $MC->setNF($retorno['NF']);
            $MC->setStatuss($retorno['statuss']);
            $MC->setCx($retorno['Cx']);
            $MC->setCxUn($retorno['CxUn']);
            $MC->setValidade($retorno['validade']);
            $MC->setCategoria($retorno['id_categoria']);
            
        }
        return $MC;
    }
     public static function getMaterialConsumoCodigoQTD($codigo) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select qtd, Cx, CxUn from MaterialConsumo WHERE codigo = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $codigo, PDO::PARAM_INT);
        $stmt->execute();
       
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
             $unidade = $retorno['qtd'];
             $cx = $retorno['Cx'];
             $cxUn = $retorno['CxUn'];
           
            return  $unidade +  ( $cx * $cxUn);
            
         
        }
        
    }
    
    
    
     public static function getMaterialConsumoCodigoUN($codigo) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select qtd from MaterialConsumo WHERE codigo = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $codigo, PDO::PARAM_INT);
        $stmt->execute();
       
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            

           $qtd = $retorno['qtd'];
            return $qtd;
            
           
        }
      
    }
     public static function Atualizarsaldo( $saldo, $id_produto) {
                 
        $dbh = Conexao::getInstance();
        $sql = "UPDATE materialconsumo SET qtd = ? WHERE id_MC = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $saldo, PDO::PARAM_INT);
        $stmt->bindParam(2, $id_produto, PDO::PARAM_INT);
        $stmt->execute();
       
        //while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            

         //  $qtd = $retorno['qtd'];
         //   return $qtd;
            
           
      //  }
      
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
    
    
    

?>
