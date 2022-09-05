<?php
session_start();
$_SESSION['login'];
if ($_SESSION['login'] == "ativo") {
    ?>
    <!DOCTYPE html>


    <html lang="pt-br">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta http-equiv="Content-Language" content="pt-br">

            <title> COMSUMO - CONTROLE DE ESTOQUE </title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- MetisMenu CSS -->
            <link href="css/metisMenu.min.css" rel="stylesheet">
            <link href="css/dataTables.bootstrap.css" rel="stylesheet">
            <link href="css/dataTables.responsive.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/sb-admin-2.css" rel="stylesheet">
            <link href="css/sb-admin-2.min.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body>

            <div id="wrapper">

                <!-- Navigation -->
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="PaginaPrincipal.php">VOLTAR AO INICIO</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <a href="#">
                                        <div>
                                            <strong>Atualizações</strong>
                                            <span class="pull-right text-muted">
                                                <em>Avisos</em>
                                            </span>
                                        </div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <strong>John Smith</strong>
                                            <span class="pull-right text-muted">
                                                <em>Yesterday</em>
                                            </span>
                                        </div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <strong>John Smith</strong>
                                            <span class="pull-right text-muted">
                                                <em>Yesterday</em>
                                            </span>
                                        </div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#">
                                        <strong>Read All Messages</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-messages -->
                        </li>
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-tasks">
                                <li>
                                    <a href="#">
                                        <div>
                                            <p>
                                                <strong>Task 1</strong>
                                                <span class="pull-right text-muted">40% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p>
                                                <strong>Task 2</strong>
                                                <span class="pull-right text-muted">20% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p>
                                                <strong>Task 3</strong>
                                                <span class="pull-right text-muted">60% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p>
                                                <strong>Task 4</strong>
                                                <span class="pull-right text-muted">80% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#">
                                        <strong>See All Tasks</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-tasks -->
                        </li>
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-comment fa-fw"></i> New Comment
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-tasks fa-fw"></i> New Task
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-alerts -->
                        </li>
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['nome'] ?></a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">



                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>

                <?php
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcao_U.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Categoria.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/SaidaProduto.php';

                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCategoria.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoMaterialConsumo.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoFuncao_U.php';

                $MESES = array();

                $MESES [] = "JANEIRO";
                $MESES [] = "FEVEREIRO";
                $MESES [] = "MARÇO";
                $MESES [] = "ABRIL";
                $MESES [] = "MAIO";
                $MESES [] = "JUNHO";
                $MESES [] = "JULHO";
                $MESES [] = "AGOSTO";
                $MESES [] = "SETEMBRO";
                $MESES [] = "OUTUBRO";
                $MESES [] = "NOVENBRO";
                $MESES [] = "DEZEMBRO";
                $i = 0;
//                                              foreach ($MESES as $MES) {
//                                                  $i++;
//                                                  if($i > 9){
//                                                  ECHO "".$MES." / ".$i;
//                                                  }else{
//                                                  ECHO "".$MES." / "."0".$i;
//                                                  }
//                                                  echo '<BR>';
//                                              }
                ?>

                <div class="col-lg-12">


                    <div class="row">
                        <div class="col-lg-12">
                            <!--                        <h1 class="page-header">SISTEMA ASSIS</h1>-->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    RELATORIOS DE COMSUMO
                                </div>
                                <div class="panel-body">

                                    <ul class="nav nav-tabs">

                                        <li class="active"><a href="#CONSUMO" data-toggle="tab">    ESTOQUE   </a></li>
                                        <li ><a href="#solicitado" data-toggle="tab"> CONSUMO   </a></li>
                                        <li>               <a href="#profile" data-toggle="tab">    VALIDADE  </a></li>
                                        <li>               <a href="#DEPARTAMENTO" data-toggle="tab">    CONSUMO POR DEPARTAMENTO  </a></li>
                                    </ul>
                                    <br>

                                    <div class="tab-content">


                                        <!--=================================== INICIO  ====================================================-->                          
                                        <div class="tab-pane fade" id="solicitado">
                                            <div class="panel-group" id="accordion"> 

    <?php
//                                                          echo '<center>';
//                                                          echo '<h3>';
//                                                          echo 'DATA ATUAL: '.date('d-m-Y').'';
//                                                          echo '</h3>';
//                                                          echo '<br>';
//                                                           echo '<h3>';
//                                                          echo 'DATA ATUAL: '.date('Y').'';
//                                                          echo '</h3>';
//                                                          echo '<center>';
//                                                          echo '<br>';
    $anoAtul = date('Y');
    $_SESSION['AnoAtual'] = date('Y');

    // $dataFinal = date('Y');
//                                                          echo "Ano Atual: ".$dataSolicitada."";
    echo 'Meses presente e referento ao ano Atual: ' . $anoAtul;
    ?>




                                                <?php
                                                foreach ($MESES as $MES) {
                                                    $i++;
                                                    ?>
                                                    <table class="table table-striped table-bordered table-hover">

                                                        <tr>

                                                            <th> <a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $MES; ?>" ><?php echo $MES; ?></a></th>
                                                        </tr>



                                                    </table>




                                                    <div id="<?php echo $MES; ?>" class="panel-collapse collapse">
                                                        <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                                            <tr>

                                                                <td>ALMOXARIFADO</td>
                                                                <td>DATA ENTREGUE</td>
                                                                <td>DEPARTAMENTO/CURSO</td>
                                                                <td>PRODUTO</td>
                                                                <td>QUANTIDADE</td>




                                                            </tr>
                                                            <tbody>
        <?php
        //  echo "Primeiro paramentro (Datasolicitada)".$dataSolicitada."<br>";
        //echo "Segundo paramentro (DataFinal)".$dataFinal."<br>";
        // $vSaidaProduto = DaoMaterialConsumo::getTodosSaidaJaneiro($dataSolicitada, $dataFinal );
//                                                         ======================== BANCO DE DADOS ACESSO - INICIO  ===================

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
               
                ('" . $anoAtul . "-" . $i . "-01') 
                AND 
                ('" . $anoAtul . "-" . $i . "-31')
                ORDER BY NomeDepar";
        $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
//        $stmt->bindParam(1, $anoAtual, PDO::PARAM_INT);
//        $stmt->bindParam(2, $anofinal, PDO::PARAM_INT);
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
        // $vetor;
//                                                         ======================== BANCO DE DADOS ACESSO - FIM  ===================
        //    var_dump($vSaidaProduto);
        // foreach ($vSaidaProduto as $Saida) {
        //var_dump($vetor);
        echo "<br>";
        //print_r($vetor);
        foreach ($vetor as $Saida) {
            ?>
                                                                    <tr>
                                                                        <td> <?php echo $Saida->getProduto()->getId_almox()->getNome(); ?></td>
                                                                        <td> <?php echo $Saida->getPedido()->getData_entrega(); ?></td>
                                                                        <td> <?php echo $Saida->getPedido()->getCurso()->getNome(); ?></td>
                                                                        <td> <?php echo $Saida->getProduto()->getNome(); ?></td>
                                                                        <td> <?php echo $Saida->getAtendido(); ?></td>



                                                                    </tr>

                                                                    <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>




                                                    </div>

        <?php
    }
    ?>  

    <!--                                                <table class="table table-striped table-bordered table-hover">

            <tr>
                
                <th> <a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#FEVEREIRO" >FEVEREIRO</a></th>
            </tr>
       


        </table>-->




                                                <!--                                                <div id="FEVEREIRO" class="panel-collapse collapse">
                                                                                                    <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                                                                                        <tr>
                                                
                                                                                                            <td>ALMOXARIFADO</td>
                                                                                                            <td>DATA ENTREGUE</td>
                                                                                                            <td>DEPARTAMENTO/CURSO</td>
                                                                                                            <td>PRODUTO</td>
                                                                                                            <td>QUANTIDADE</td>
                                                                                                            
                                                
                                                
                                                
                                                                                                        </tr>
                                                                                                        <tbody>
    <?php
//                                                           echo "Primeiro paramentro (Datasolicitada)".$dataSolicitada."<br>";
//                                                           echo "Segundo paramentro (DataFinal)".$dataFinal."<br>";
    // $vSaidaProduto = DaoMaterialConsumo::getTodosSaidaJaneiro($dataSolicitada, $dataFinal );
//                                                         ======================== BANCO DE DADOS ACESSO - INICIO  ===================
//        $dbh = Conexao::getInstance();
//        $sql = "SELECT 
//                dp.id_dpt, dp.nome as NomeDepar, 
//                pe.id_pedido as idpedido, pe.id_status, STP.nome as StatusPedido, pe.data_pedido, pe.data_entrega,
//                sp.id_sp, sp.codigoProduto, sp.atendido as Saida,
//                mc.nome as NomeProduto, mc.id_MC,
//                ca.nome as CategoriaMC, 
//                tp.descricao AS TIPO_Produto,
//                um.descricao as UnidadeMedidaMC,
//                AL.nome as almoxarifado
//                      FROM departamento    AS dp 
//                INNER JOIN pedido          AS pe  ON (dp.id_dpt = pe.id_departamento)
//                INNER JOIN status_pedido   as STP ON (STP.id_status_pedido = pe.id_status)
//                INNER JOIN saidaproduto    AS sp  ON (pe.id_pedido = sp.id_pedido)
//                INNER JOIN materialconsumo AS MC  ON (sp.Id_Produto = mc.id_MC)
//                INNER JOIN categoria       AS ca  ON (ca.id = mc.id_categoria)
//                INNER JOIN tipo            AS tp  ON (tp.id_tipo = mc.id_tipo) 
//                INNER JOIN unidademedida   AS um  ON (um.id_UM = mc.id_UM)
//                INNER JOIN almoxarifado    AS AL  ON (AL.id_almox = mc.id_almox)
//                WHERE pe.data_entrega 
//                BETWEEN 
//                ('".$dataSolicitada."-02-01') 
//                AND 
//                ('".$dataSolicitada."-02-28')
//                ORDER BY NomeDepar";
//        $dbh->beginTransaction();
//        $stmt = $dbh->prepare($sql);
////        $stmt->bindParam(1, $anoAtual, PDO::PARAM_INT);
////        $stmt->bindParam(2, $anofinal, PDO::PARAM_INT);
//        $stmt->execute();
//        $dbh->commit();
//        $vetor = array();
//        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
//            $sp = new SaidaProduto();
//            $sp->getPedido()->getCurso()->setId_curso($retorno['id_dpt']);
//            $sp->getPedido()->getCurso()->setNome($retorno['NomeDepar']);
//            $sp->getPedido()->getStatus()->setId_status($retorno['id_status']);
//            $sp->getPedido()->getStatus()->SetNome($retorno['StatusPedido']);
//            $sp->getPedido()->setData_pedido($retorno['data_pedido']);
//            $sp->getPedido()->setData_entrega($retorno['data_entrega']);
//            $sp->setId_sp($retorno['id_sp']);
//            $sp->getProduto()->setCodigo($retorno['codigoProduto']);
//            $sp->setAtendido($retorno['Saida']);
//            $sp->getProduto()->setNome($retorno['NomeProduto']);
//            $sp->getProduto()->setId_MC($retorno['id_MC']);
//            $sp->getProduto()->getCategoria()->setNome($retorno['CategoriaMC']);
//            $sp->getProduto()->getId_tipo()->setDescricao($retorno['TIPO_Produto']);
//            $sp->getProduto()->getId_UM()->setDescricao($retorno['UnidadeMedidaMC']);
//            $sp->getProduto()->getId_almox()->setNome($retorno['almoxarifado']);           
//            $vetor[] = $sp;           
    //    }
    // $vetor;
//                                                         ======================== BANCO DE DADOS ACESSO - FIM  ===================
    //    var_dump($vSaidaProduto);
    // foreach ($vSaidaProduto as $Saida) {
    //foreach ($vetor as $Saida) {
    ?>
                                                                                                                <tr>
                                                                                                                
                                                                                                                    
                                                
                                                
                                                                                                                </tr>
                                                
                                                <?php
                                                //  }
                                                ?>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                    
                                                                                
                                                                                
                                                
                                                                                        </div>-->






                                            </div>
                                        </div>
                                        <!--=================================== FIM  ====================================================-->










                                        <!--=================================== INICIO - CONSUMO  ====================================================-->
                                        <div class="tab-pane fade in active" id="CONSUMO">
                                            <div class="panel-group" id="accordion"> 
    <?PHP
    $vCategoriaa = DaoCategoria::getTodos();
    // var_dump($vCategoria);
    foreach ($vCategoriaa as $categoriass) {
        $MCItenss = DaoMaterialConsumo::getTodosCategoriaID2($categoriass->getId());
        //   var_dump($MCItens);
        ?>



                                                    <table class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                            <th WIDTH="180"> NOME</th>
                                                            <th WIDTH="50"> <CENTER>ESTOQUE</CENTER></th>
                                                        <th WIDTH="80"> <CENTER>ESTOQUE MINIMO</CENTER></th>
                                                        <th WIDTH="80"> <CENTER>COMPRA SUGERIDA</CENTER></th>
                                                        <th WIDTH="80"> <CENTER>SELECIONAR</CENTER></th>

                                                        </tr>
                                                        <tr>

                                                            <th WIDTH="180" BGCOLOR=#B0E0E6> <?php echo $MCItenss->getCategoria()->getNome(); ?></th>

                                                    <?php
                       if ($MCItenss->getQtd() == NULL) {
                                                        ?>
                                                        <?php
                                                        if ($MCItenss->getQtd() <= $MCItenss->getCategoria()->getEstMin()) {
                                                            ?>
                                                                    <th WIDTH="50" BGCOLOR=#FF0000><CENTER>0</CENTER></th>

                                                            <?php
                                                        } else {
                                                            ?>

                                                                <th WIDTH="50" BGCOLOR=#B0E0E6><CENTER>0</CENTER></th>

                                                            <?php
                                                            }
                        } else {
                                                            ?>


                                                            <?php
                                                            if ($MCItenss->getQtd() <= $MCItenss->getCategoria()->getEstMin()) {
                                                                ?>

                                                                <th WIDTH="50" BGCOLOR=#FF0000> <CENTER> <?php echo $MCItenss->getQtd(); ?></CENTER></th>
                                                            <?php 
                                                            
                                                            } else{ ?>
                                                                <th WIDTH="50" BGCOLOR=#B0E0E6> <CENTER> <?php echo $MCItenss->getQtd(); ?></CENTER></th>
                                                                <?php }
                                } ?>


                                                        <th WIDTH="80" BGCOLOR=#B0E0E6><CENTER><?php echo $MCItenss->getCategoria()->getEstMin(); ?></center></th>


                                                        <th WIDTH="80" BGCOLOR=#ADFF2F><CENTER> <?php echo $MCItenss->getCategoria()->getComp(); ?></CENTER></th>


                                                        <th WIDTH="100" BGCOLOR=#FFD700> <CENTER><a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $MCItenss->getCategoria()->getId(); ?>" >VISUALIZAR </a></CENTER></th>


                                                        </tr>



                                                    </table>

                                                    <div id="<?php echo $MCItenss->getCategoria()->getId(); ?>" class="panel-collapse collapse">
                                                        <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                                            <tr>

                                                                <td>ALMOXARIFADO</td>
                                                                <td>NOME</td>
                                                                <td>DESCRIÇÃO</td>
        <!--                                                            <td>UNID/CX</td>-->
                                                                <td>UNIDADES</td>



                                                            </tr>
                                                            <tbody>
        <?php
        $vCategoriaItenss = DaoMaterialConsumo::getTodosCategoriaItems2($MCItenss->getCategoria()->getId());
        //       var_dump($vCategoriaItens);
        foreach ($vCategoriaItenss as $CategoriaItenss) {
            ?>
                                                                    <tr>
                                                                        <td> <?php echo $CategoriaItenss->getId_almox()->getNome(); ?></td>
                                                                        <td> <?php echo $CategoriaItenss->getNome(); ?></td>
                                                                        <td> <?php echo $CategoriaItenss->getDescricao(); ?></td>
            <!--                                                                    <td> <?php //echo $CategoriaItenss->getCxUn();  ?></td>-->
                                                                        <td> <?php echo $CategoriaItenss->getQtd(); ?></td>


                                                                    </tr>

            <?php
        }
        ?>
                                                            </tbody>
                                                        </table>
                                                    </div>


        <?php
    }
    ?>








                                            </div>
                                        </div>
                                        <!--=================================== FIM - CONSUMO ====================================================-->




                                        <!--=================================== INICIO  ====================================================-->

                                        <div class="tab-pane fade" id="profile">
                                            <div class="panel-group" id="accordion"> 


          <!--<h1><?php //echo date('Y');?></h1>-->
                                                            <?PHP
                                                            $DataVencimento = DaoMaterialConsumo::getDataVencimento();
                                                            $DataMenor = DaoMaterialConsumo::getMenorData();
                                                            $VProdVenciProx = DaoMaterialConsumo::getVencimento30Dias($DataMenor, $DataVencimento);
                                                            ?>

                                                <h3><?php echo 'PRODUTOS VENCIDOS OU QUE VÃO VENCER NO PRAZO DE 30 DIAS NA DATA INICIAL DE ' . $DataMenor . " E DATA FINAL " . $DataVencimento; ?></h3>


                                                <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                                    <tr>

                                                        <td>ALMOXARIFADO</td>
                                                        <td>CATEGORIA</td>
                                                        <td>NOME DO PRODUTO</td>
                                                        <td>DESCRIÇÃO</td>
                                                        <td>UNID/CX</td>
                                                        <td>UNIDADES</td>
                                                        <td>VALIDADE</td>



                                                    </tr>
                                                    <tbody>
    <?php
    // $vCategoriaItenss = DaoMaterialConsumo::getTodosCategoriaItems($MCItenss->getCategoria()->getId());
    //       var_dump($vCategoriaItens);
    foreach ($VProdVenciProx as $CategoriaItenss) {
        ?>
                                                            <tr>
                                                                <td> <?php echo $CategoriaItenss->getId_almox()->getNome(); ?></td>
                                                                <td> <?php echo $CategoriaItenss->getCategoria()->getNome(); ?></td>
                                                                <td> <?php echo $CategoriaItenss->getNome(); ?></td>
                                                                <td> <?php echo $CategoriaItenss->getDescricao(); ?></td>
                                                                <td> <?php echo $CategoriaItenss->getCxUn(); ?></td>
                                                                <td> <?php echo $CategoriaItenss->getQtd(); ?></td>
                                                                <td> <?php echo $CategoriaItenss->getValidade(); ?></td>


                                                            </tr>

        <?php
    }
    ?>
                                                    </tbody>
                                                </table>





                                            </div>
                                        </div>
                                        <!--=================================== FIM  ====================================================-->





                                        <!--=================================== INICIO  ====================================================-->

                                        <div class="tab-pane fade" id="DEPARTAMENTO">
                                            <div class="panel-group" id="accordion"> 

    <?PHP
    // $VgastoDepartamento = DaoMaterialConsumo::getDepartamentoConsumo($anoAtul);
    //  var_dump($VgastoDepartamento);
    //echo $anoAtul;
    $dbhh = Conexao::getInstance();
    $sqll = "SELECT dp.id_dpt, dp.nome as NomeDepar, SUM(sp.atendido) as totalAno 
                FROM departamento    AS dp 
                INNER JOIN pedido     AS pe  ON (dp.id_dpt = pe.id_departamento)
                INNER JOIN saidaproduto as sp ON (sp.id_pedido = pe.id_pedido)
                WHERE pe.data_entrega BETWEEN ('" . $anoAtul . "-01-01') AND ('" . $anoAtul . "-12-31')
                GROUP BY NomeDepar
                ORDER BY totalAno";
    // $dbhh->beginTransaction();
    $stmtt = $dbhh->prepare($sqll);
    //$stmt->bindParam(1, $anoAtual, PDO::PARAM_STR);
    //$stmt->bindParam(2, $anoAtual, PDO::PARAM_STR);
    $stmtt->execute();
    $dbhh->commit();

    $VconsumoDepar = array();
    while ($retornoo = $stmtt->fetch(PDO::FETCH_ASSOC)) {
        $spp = new SaidaProduto();
        $spp->getPedido()->getCurso()->setId_curso($retornoo['id_dpt']);
        $spp->getPedido()->getCurso()->setNome($retornoo['NomeDepar']);
        $spp->setAtendido($retornoo['totalAno']);

        $VconsumoDepar[] = $spp;
    }
    //   var_dump($consumoDepar);
    ?>
    <?php
    foreach ($VconsumoDepar as $ConsumoDep) {
        ?> 
                                                    <table class="table table-striped table-bordered table-hover">

                                                        <tr>
                                                            <!--<th WIDTH="250"><a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#1" > DEPARTAMENTO: <?php //echo $ConsumoDep->getPedido()->getCurso()->getNome(); ?> </a></th>-->
                                                            <th WIDTH="250"><a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $ConsumoDep->getPedido()->getCurso()->getId_curso() . "dep"; ?>" > <?php echo $ConsumoDep->getPedido()->getCurso()->getNome(); ?> </a></th>
                                                            <th WIDTH="100"> <?php echo $ConsumoDep->getAtendido(); ?></th>



                                                        </tr>



                                                    </table>     
                                                    <?php //echo $ConsumoDep->getPedido()->getCurso()->getId_curso(); ?>
                                                    <?php
                                                    //      $vCategoriaItenss = DaoMaterialConsumo::getTodosCategoriaItems($MCItenss->getCategoria()->getId());
                                                    //       var_dump($vCategoriaItens);
                                                    //======== inicio ==============================
                                                    $dbh = Conexao::getInstance();
                                                    $sql = "SELECT 
                                                                    dp.id_dpt, dp.nome as NomeDepar, 
                                                                    pe.id_pedido as idpedido, pe.id_status, STP.nome as StatusPedido, pe.data_pedido, pe.data_entrega,
                                                                    sp.id_sp, sp.codigoProduto, sp.atendido as Saida, al.nome as Nomealmoxarifado, MC.nome as NomeMC
                                                                          FROM departamento    AS dp 
                                                                    INNER JOIN pedido          AS pe  ON (dp.id_dpt = pe.id_departamento)
                                                                    INNER JOIN almoxarifado    AS al  ON (al.id_almox = pe.id_almox)
                                                                    INNER JOIN status_pedido   as STP ON (STP.id_status_pedido = pe.id_status)
                                                                    INNER JOIN saidaproduto    AS sp  ON (pe.id_pedido = sp.id_pedido)
                                                                    INNER JOIN materialconsumo AS MC  ON (MC.codigo = sp.codigoProduto)
                                                                    
                                                                  
                                                                    WHERE dp.id_dpt = " . $ConsumoDep->getPedido()->getCurso()->getId_curso() . "
                                                                    AND
                                                                    pe.data_entrega 
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
                                                        $spp->getProduto()->setId_MC($retorno['codigoProduto']);
                                                        //   $spp->getProduto()->setCodigo($retorno['codigoProduto']);
                                                        $spp->setAtendido($retorno['Saida']);
                                                        $spp->getProduto()->setNome($retorno['NomeMC']);
                                                        // $spp->getProduto()->setId_MC($retorno['id_MC']);
                                                        // $spp->getProduto()->getCategoria()->setNome($retorno['CategoriaMC']);
                                                        // $spp->getProduto()->getId_tipo()->setDescricao($retorno['TIPO_Produto']);
                                                        // $spp->getProduto()->getId_UM()->setDescricao($retorno['UnidadeMedidaMC']);
                                                        $spp->getProduto()->getId_almox()->setNome($retorno['Nomealmoxarifado']);
                                                        $VDepartamentoCons[] = $spp;
                                                    }
                                                    // return $vetor;
                                                    //      var_dump($VDepartamentoCons);
                                                    //======== fim ==============================
                                                    ?>
                                                    <div id="<?php echo $ConsumoDep->getPedido()->getCurso()->getId_curso() . "dep"; ?>" class="panel-collapse collapse">
                                                        <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                                            <tr>

                                                                <td>ALMOXARIFADO0</td>
                                                                <td>CURSO / DEPARTAMENTO</td>
                                                                <td>DATA ENTREGA</td>
                                                                <td>PRODUTO</td>
                                                                <td>QUANTIDADE</td>



                                                            </tr>
                                                            <tbody>
                                                    <?php
                                                    foreach ($VDepartamentoCons as $DepCons) {
                                                        $SpMc = DaoMaterialConsumo::getMaterialConsumo($DepCons->getProduto()->getId_MC());
                                                        ?>
                                                                    <tr>
                                                                        <td> <?php echo $DepCons->getProduto()->getId_almox()->getNome(); ?></td>
                                                                        <td> <?php echo $DepCons->getPedido()->getCurso()->getNome(); ?></td>
                                                                        <td> <?php echo $DepCons->getPedido()->getData_entrega(); ?></td>
                                                                        <td> <?php echo $DepCons->getProduto()->getNome(); ?></td>
                                                                        <td> <?php echo $DepCons->getAtendido(); ?></td>



                                                                    </tr>

                                                        <?php
                                                    }
                                                    ?>
                                                            </tbody>
                                                        </table>



                                                    </div>
    <?php }
    ?>

    <?php
    //    var_dump($VDepartamentoCons);
    ?>




                                            </div>
                                        </div>
                                        <!--=================================== FIM  ====================================================-->

                                    </div>
                                </div>


                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /#page-wrapper -->

                </div>
                <!-- /#wrapper -->

                <!-- jQuery -->
                <script src="jquery/jquery.min.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Metis Menu Plugin JavaScript -->
                <script src="js/metisMenu.min.js"></script>

                <script src="js/dataTables.bootstrap.min.js"></script>
                <script src="js/dataTables.responsive.js"></script>

                <script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
                <script type="text/javascript" language="javascript" src="jquery/jquery.dataTables.js"></script>

                <!-- Custom Theme JavaScript -->
                <script src="js/sb-admin-2.js"></script>


                <script>
                    $(document).ready(function () {
                        $('#dataTables-funcao').DataTable({
                            responsive: true,
                            "oLanguage": {
                                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                                "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                                "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                                "sInfoFiltered": "",
                                "sSearch": "Procurar",
                                "oPaginate": {
                                    "sFirst": "Primeiro",
                                    "sPrevious": "   Anterior  ",
                                    "sNext": "      Próximo     ",
                                    "sLast": "  Último"
                                }
                            }


                        });
                    });
                </script>


        </body>

    </html>
    <?php
} else {

    header("location: login.php");
}
?>