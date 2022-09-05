<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/SaidaProduto.php';


echo $_SESSION['AnoAtual'];

if (isset($_POST['enviar'])) {
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
            ('" . $_SESSION['AnoAtual'] . "-01-01') 
            AND 
            ('" . $_SESSION['AnoAtual'] . "-12-31')
            ORDER BY NomeDepar";
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
    //   $stmt->bindParam(1, $anoAtual, PDO::PARAM_INT);
    //   $stmt->bindParam(2, $anofinal, PDO::PARAM_INT);

    $stmt->execute();
    $dbh->commit();

    $VDepartamentoCons = array();
    while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $spp = new SaidaProduto();
        $spp->getPedido()->getCurso()->setId_curso($retorno['id_dpt']);
        $spp->getPedido()->getCurso()->setNome($retorno['NomeDepar']);
        $spp->getPedido()->getStatus()->setId_status($retorno['id_status']);
        $spp->getPedido()->getStatus()->SetNome($retorno['StatusPedido']);
        $spp->getPedido()->setData_pedido($retorno['data_pedido']);
        $spp->getPedido()->setData_entrega($retorno['data_entrega']);
        $spp->setId_sp($retorno['id_sp']);
        $spp->getProduto()->setCodigo($retorno['codigoProduto']);
        $spp->setAtendido($retorno['Saida']);
        $spp->getProduto()->setNome($retorno['NomeProduto']);
        $spp->getProduto()->setId_MC($retorno['id_MC']);
        $spp->getProduto()->getCategoria()->setNome($retorno['CategoriaMC']);
        $spp->getProduto()->getId_tipo()->setDescricao($retorno['TIPO_Produto']);
        $spp->getProduto()->getId_UM()->setDescricao($retorno['UnidadeMedidaMC']);
        $spp->getProduto()->getId_almox()->setNome($retorno['almoxarifado']);
        $VDepartamentoCons[] = $spp;
    }

    $_SESSION['VConsumoDepartamento'] = $VDepartamentoCons;
    
   // var_dump($_SESSION['VConsumoDepartamento']);
}
?>

