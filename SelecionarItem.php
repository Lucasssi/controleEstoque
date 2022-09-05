<!DOCTYPE html>

<?php
session_start();
$_SESSION['login'];
if ($_SESSION['login'] == "ativo") {
    ?>


    <html lang="pt-br">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>SISTEMA ASSIS - CADASTRO DE CURSOS</title>

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
                        <a class="navbar-brand" href="home.php">CONTROLE DE ESTOQUE</a>
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
                                <li><a href="Sair.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <!--                        <li class="sidebar-search">
                                                            <div class="input-group custom-search-form">
                                                                <input type="text" class="form-control" placeholder="Pesquisas">
                                                                <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                            </div>
                                                             /input-group 
                                                        </li>-->
                                <!--                        <li>
                                                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                                        </li>-->
                                <!--                        <li>
                                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Relatorios <span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                <li>
                                                                    <a href="flot.html">Pedidos Realizados</a>
                                                                </li>
                                                                <li>
                                                                    <a href="morris.html">Consumo</a>
                                                                </li>
                                                            </ul>
                                                             /.nav-second-level 
                                                        </li>-->
                                <!--                        <li>
                                                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                                                        </li>-->

                                <!--                        <li>
                                                            <a href="#"><i class="fa fa-edit fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                <li>
                                                                    <a href="CadAlmoxarifado.php">Almoxarifado</a>
                                                                </li>
                                                                <li>
                                                                    <a href="CadEmpresa.php">Empresa</a>
                                                                </li>
                                                                <li>
                                                                    <a href="CadFuncao.php">Funções</a>
                                                                </li>
                                                                <li>
                                                                    <a href="CadFuncionario.php">Funcionarios</a>
                                                                </li>
                                                                <li>
                                                                    <a href="CadMaterialComsumo.php">Produtos</a>
                                                                </li>
                                                               
                                                            </ul>
                                                             /.nav-second-level 
                                                        </li>-->

<!--                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Pedidos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="RealizarPedido.php">Realizar Pedido</a>
                                        </li>
                                                                        <li>
                                                                            <a href="">Consumo</a>
                                                                        </li>
                                    </ul>
                                     /.nav-second-level 
                                </li>-->


                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>


                <div class="col-lg-12">
                    <div class="row">
                        <br>
<!--                        <div class="col-lg-12">
                            <h1 class="page-header">SISTEMA ASSIS</h1>
                        </div>-->


                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">



    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/saidaMC.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/ItemMaterial.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/ItemSelecionado.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Item.php';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCurso.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoSaidaMC.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoMaterialConsumo.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoItemMC.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoItemSelecionado.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoPedido.php';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';



    $_SESSION['id_Curso'];
    echo "<h1>". $_SESSION['id_pedido']."</h1>";
    $_SESSION['id_funcionario'];


 if(isset($_POST['InserirAlmox']))
        {
        
           $_SESSION['id_almox3'] = $_POST['id_almox'];
        
        DaoPedido::InserirAlmoxarifado($_POST['id_almox'], $_SESSION['id_pedido']);
         
        }









    if (isset($_POST['Alterar2'])) {
        
        $total = $_POST['qtd'] + ($_POST['CxUn'] * $_POST['Cx']);

        DaoItemSelecionado::alterar($_POST['Item_selecionado'], $_POST['qtd'], $_POST['Cx'], $total);


        $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['id_pedido']);


        
        
          $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['id_pedido'],  $_SESSION['id_almox3']);

        //var_dump($vItemSelecionado);
        //DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
        echo ' <div class="panel panel-default">
                            <div class="panel-heading">
                                PRODUTOS SELECIONADOS
                            </div>
                            
                        ';

        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-item">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>NOME</th>';
        echo '<th>DESCRIÇÃO</th>';
        echo '<th>UNIDADE DE MEDIDA</th>';
        echo '<th>UNID / CAIXA</th>';
        echo '<th>QUANT. CAIXA</th>';
        echo '<th>UNIDADES</th>';
        echo '<th>TOTAL</th>';
        echo '<th>AÇÕES</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($vItemSelecionado as $itemm) 
        {
            echo '<tr>';
            echo '<td>' . $itemm->getProduto()->getNome() . '</td>';
            echo '<td>' . $itemm->getProduto()->getDescricao() . '</td>';
            echo '<td>' . $itemm->getProduto()->getId_UM()->getDescricao() . '</td>';
           if($itemm->getProduto()->getId_UM()->getId_UM() == 2){
            echo '<td>' . $itemm->getCxUn() . '</td>';
            }else{
                 echo '<td>UNIDADE</td>';
            }
            echo '<td>' . $itemm->getCx() . '</td>';
            echo '<td>' . $itemm->getQtd() . '</td>';
            echo '<td>' . $itemm->getTotalUnidade() . '</td>';
            echo '<td>';
            echo '<form role="form" action="SelecionarItem.php" method="post">';
            
            echo '<input class="form-control" value="' . $itemm->getItem_selecionado() . '" type ="hidden" name="ItemSelecionadoo" tabindex="1">';
            //echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=alterarSelecao&id=" . $itemm->getItem_selecionado() . "&nome=" . $itemm->getProduto()->getNome() . "&codigo=" . $itemm->getProduto()->getCodigo() . "&quantidade=" . $itemm->getQtd() . "'>Alterar</a>   ";
            echo '<button type="submit" class="btn btn-outline btn-warning"   name="alterarSelecao"  >Alterar</button>';
            echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=excluir&id=" . $itemm->getItem_selecionado() . "'>Excluir</a>";
            echo '</form>';

            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        echo '</div>';
           echo ' <div class="row">
                        <div class="col-lg-9">
                            
                        </div>
                        <div class="col-lg-2">
                            <a type="button" class="btn btn-danger"  href="FimPedido.php">FINALIZAR PEDIDO</a>
                        </div>


                    </div>';
            
            echo ' ';
            echo '<br>';
            echo '<br>';
    }

    if (isset($_GET['op'])) {

        $operacao = $_GET['op'];
        if ($operacao == "excluir") {

            DaoItemSelecionado::excluir($_GET['id']);


               $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['id_pedido'],  $_SESSION['id_almox3']);

        //var_dump($vItemSelecionado);
        //DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
        echo ' <div class="panel panel-default">
                            <div class="panel-heading">
                                PRODUTOS SELECIONADOS
                            </div>
                            
                        ';

        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-item">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>NOME</th>';
        echo '<th>DESCRIÇÃO</th>';
        echo '<th>UNIDADE DE MEDIDA</th>';
        echo '<th>UNID / CAIXA</th>';
        echo '<th>QUANT. CAIXA</th>';
        echo '<th>UNIDADES</th>';
        echo '<th>TOTAL</th>';
        echo '<th>AÇÕES</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($vItemSelecionado as $itemm) 
        {
            echo '<tr>';
            echo '<td>' . $itemm->getProduto()->getNome() . '</td>';
            echo '<td>' . $itemm->getProduto()->getDescricao() . '</td>';
            echo '<td>' . $itemm->getProduto()->getId_UM()->getDescricao() . '</td>';
           if($itemm->getProduto()->getId_UM()->getId_UM() == 2){
            echo '<td>' . $itemm->getCxUn() . '</td>';
            }else{
                 echo '<td>UNIDADE</td>';
            }
            echo '<td>' . $itemm->getCx() . '</td>';
            echo '<td>' . $itemm->getQtd() . '</td>';
            echo '<td>' . $itemm->getTotalUnidade() . '</td>';
            echo '<td>';
            echo '<form role="form" action="SelecionarItem.php" method="post">';
            
            echo '<input class="form-control" value="' . $itemm->getItem_selecionado() . '" type ="hidden" name="ItemSelecionadoo" tabindex="1">';
            //echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=alterarSelecao&id=" . $itemm->getItem_selecionado() . "&nome=" . $itemm->getProduto()->getNome() . "&codigo=" . $itemm->getProduto()->getCodigo() . "&quantidade=" . $itemm->getQtd() . "'>Alterar</a>   ";
            echo '<button type="submit" class="btn btn-outline btn-warning"   name="alterarSelecao"  >Alterar</button>';
            echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=excluir&id=" . $itemm->getItem_selecionado() . "'>Excluir</a>";
            echo '</form>';

            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        echo '</div>';
           echo ' <div class="row">
                        <div class="col-lg-9">
                            
                        </div>
                        <div class="col-lg-2">
                            <a type="button" class="btn btn-danger"  href="FimPedido.php">FINALIZAR PEDIDO</a>
                        </div>


                    </div>';
            
            echo ' ';
            echo '<br>';
            echo '<br>';
            
        }
    }
    
        if (isset($_GET['FIM'])) {

      
      

          


              $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['id_pedido'],  $_SESSION['id_almox3']);

        //var_dump($vItemSelecionado);
        //DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
        echo ' <div class="panel panel-default">
                            <div class="panel-heading">
                                PRODUTOS SELECIONADOS
                            </div>
                            
                        ';

        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-item">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>NOME</th>';
        echo '<th>DESCRIÇÃO</th>';
        echo '<th>UNIDADE DE MEDIDA</th>';
        echo '<th>UNID / CAIXA</th>';
        echo '<th>QUANT. CAIXA</th>';
        echo '<th>UNIDADES</th>';
        echo '<th>TOTAL</th>';
        echo '<th>AÇÕES</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($vItemSelecionado as $itemm) 
        {
            echo '<tr>';
            echo '<td>' . $itemm->getProduto()->getNome() . '</td>';
            echo '<td>' . $itemm->getProduto()->getDescricao() . '</td>';
            echo '<td>' . $itemm->getProduto()->getId_UM()->getDescricao() . '</td>';
           if($itemm->getProduto()->getId_UM()->getId_UM() == 2){
            echo '<td>' . $itemm->getCxUn() . '</td>';
            }else{
                 echo '<td>UNIDADE</td>';
            }
            echo '<td>' . $itemm->getCx() . '</td>';
            echo '<td>' . $itemm->getQtd() . '</td>';
            echo '<td>' . $itemm->getTotalUnidade() . '</td>';
            echo '<td>';
            echo '<form role="form" action="SelecionarItem.php" method="post">';
            
            echo '<input class="form-control" value="' . $itemm->getItem_selecionado() . '" type ="hidden" name="ItemSelecionadoo" tabindex="1">';
            //echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=alterarSelecao&id=" . $itemm->getItem_selecionado() . "&nome=" . $itemm->getProduto()->getNome() . "&codigo=" . $itemm->getProduto()->getCodigo() . "&quantidade=" . $itemm->getQtd() . "'>Alterar</a>   ";
            echo '<button type="submit" class="btn btn-outline btn-warning"   name="alterarSelecao"  >Alterar</button>';
            echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=excluir&id=" . $itemm->getItem_selecionado() . "'>Excluir</a>";
            echo '</form>';

            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        echo '</div>';
           echo ' <div class="row">
                        <div class="col-lg-9">
                            
                        </div>
                        <div class="col-lg-2">
                            <a type="button" class="btn btn-danger"  href="FimPedido.php">FINALIZAR PEDIDO</a>
                        </div>


                    </div>';
            
            echo ' ';
            echo '<br>';
            echo '<br>';
            
        
    }




    if (isset($_POST['alterarSelecao'])) {
//echo $_POST['ItemSelecionadoo'];
       //$operacao = $_GET['op'];
      //  if ($operacao == "alterarSelecao") {
            $Itemalterar = DaoItemSelecionado::getItemSelecionadoPorItem($_SESSION['id_pedido']);
            $itemAlterarr = DaoItemSelecionado::getItemSelecionadoPorItem2($_POST['ItemSelecionadoo']);
          //     var_dump($itemAlterarr);

          //  $teste = $_GET['id'];

            //     var_dump($teste);


            echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>NOME</th>';
            echo '<th>DESCRIÇÃO</th>';
            echo '<th>UNID /CX</th>';
            echo '<th>QUANT/CX</th>';
            echo '<th>Unidades</th>';
           // echo '<th>Total</th>';
            echo '<th>Ação</th>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo ' <form role="form" action="SelecionarItem.php" method="post">';
            echo '<input class="form-control" value="' .$itemAlterarr->getItem_selecionado(). '" type ="hidden" name="Item_selecionado" >';
            echo '<td>' . $itemAlterarr->getProduto()->getNome(). '</td>';
            echo '<td>' .$itemAlterarr->getProduto()->getDescricao(). '</td>';
            echo '<input class="form-control" value="' .$itemAlterarr->getCxUn() . '" type ="hidden" name="CxUn" tabindex="1">';
            echo '<td>' .$itemAlterarr->getCxUn() . '</td>';
            
            if($itemAlterarr->getProduto()->getId_UM()->getId_UM() == 2){
            echo '<td><input class="form-control" value="' .$itemAlterarr->getCx() . '" type ="number" name="Cx" tabindex="1"></td>';
            }else{
                  echo '<td>UNIDADE</td>';
                  echo '<input class="form-control" value="' .$itemAlterarr->getCx() . '" type ="hidden" name="Cx" tabindex="1">';
            }
            echo '<td><input class="form-control" value="' .$itemAlterarr->getQtd() . '" type ="number" name="qtd" tabindex="1"></td>';
         //   echo '<td><input class="form-control" value="' .$itemAlterarr->getTotalUnidade(). '" type ="number" name="total" tabindex="1"></td>';
            echo '<td>';
            echo ' <button type="submit" class="btn btn-default"   name="Alterar2"  >Alterar</button>';
            echo '</td>';
            echo ' </form>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
      //  }
    }






    if (isset($_POST['Adicionar'])) {

       // echo '<h1>5555555555555555555555555555555555555555555555555555</h1>';
        $verificar = DaoItemSelecionado::getVerificarId($_SESSION['id_pedido'], $_POST['codigo']);
        
        $TotalQuantidade = DaoMaterialConsumo::getMaterialConsumoCodigoQTD($_POST['codigo']);
        $TotalUN = DaoMaterialConsumo::getMaterialConsumoCodigoUN($_POST['codigo']);
        
        
        echo $_POST['codigo'];
        echo '<br>';
        echo '<br>';
        var_dump($TotalUN);
        echo '<br>';
        echo '<br>';
        var_dump($TotalQuantidade);
        echo '<br>';
        echo '<br>';
        
        
        if ($_POST['codigo'] == $verificar) {
            
        } else {
            
            
            
            

            
//            Se select ter valor de 2 (UM) CxUM por Caixa
//                se não descontar unidades e fazer conversão para diminuir caixas
            
            if($_POST['cx'] == 0)
            {
              $total = $_POST['qtd'];
              
              
              echo 'PEDIDO--> '.$total.'  DISMOVIVEL--> '.$TotalUN;
              
              if( $total > $TotalUN )
              {
                  echo "<h1>QUANTIDADE INDISPONIVEL NO ESTOQUE</h1>";
              }else
              {
                  
                  // -------------------inserir codigo aqui verificar codigo em teste.php
                  
                   DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['codigo'], $_POST['qtd'], $_POST['cx'], $_POST['cxUn'], $total);
              }
              
             
                
              //   echo  "CaUn-->".$_POST['cxUn']."Quatidade -->".$_POST['qtd']."Cx-->".$_POST['cx']."pedido--> ".$_SESSION['id_pedido']."codigo-->".$_POST['codigo'];
            }
            else
            {
               // echo  "CaUn-->".$_POST['cxUn']."Quatidade -->".$_POST['qtd']."Cx-->".$_POST['cx'];
              
              $total =  $_POST['qtd'] + ($_POST['cx'] * $_POST['cxUn']);
              
                echo 'PEDIDO--> '.$total.'   DISMOVIVEL--> '.$TotalQuantidade;
              
              if( $total > $TotalQuantidade )
              {
                  echo "<h1>QUANTIDADE INDISPONIVEL NO ESTOQUE</h1>";
              }else
              {
                  
                   // -------------------inserir codigo aqui verificar codigo em teste.php
                  
                   DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['codigo'], $_POST['qtd'], $_POST['cx'], $_POST['cxUn'], $total);
              }
            }
            
            
            
        
            
            
            
        }


        //echo $_SESSION['id_pedido'];
           $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['id_pedido'],  $_SESSION['id_almox3']);

        //var_dump($vItemSelecionado);
        //DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
        echo ' <div class="panel panel-default">
                            <div class="panel-heading">
                                PRODUTOS SELECIONADOS
                            </div>
                            
                        ';

        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-item">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>NOME</th>';
        echo '<th>DESCRIÇÃO</th>';
        echo '<th>UNIDADE DE MEDIDA</th>';
        echo '<th>UNID / CAIXA</th>';
        echo '<th>QUANT. CAIXA</th>';
        echo '<th>UNIDADES</th>';
        echo '<th>TOTAL</th>';
        echo '<th>AÇÕES</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($vItemSelecionado as $itemm) 
        {
            echo '<tr>';
            echo '<td>' . $itemm->getProduto()->getNome() . '</td>';
            echo '<td>' . $itemm->getProduto()->getDescricao() . '</td>';
            echo '<td>' . $itemm->getProduto()->getId_UM()->getDescricao() . '</td>';
           if($itemm->getProduto()->getId_UM()->getId_UM() == 2){
            echo '<td>' . $itemm->getCxUn() . '</td>';
            }else{
                 echo '<td>UNIDADE</td>';
            }
            echo '<td>' . $itemm->getCx() . '</td>';
            echo '<td>' . $itemm->getQtd() . '</td>';
            echo '<td>' . $itemm->getTotalUnidade() . '</td>';
            echo '<td>';
            echo '<form role="form" action="SelecionarItem.php" method="post">';
            
            echo '<input class="form-control" value="' . $itemm->getItem_selecionado() . '" type ="hidden" name="ItemSelecionadoo" tabindex="1">';
            //echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=alterarSelecao&id=" . $itemm->getItem_selecionado() . "&nome=" . $itemm->getProduto()->getNome() . "&codigo=" . $itemm->getProduto()->getCodigo() . "&quantidade=" . $itemm->getQtd() . "'>Alterar</a>   ";
            echo '<button type="submit" class="btn btn-outline btn-warning"   name="alterarSelecao"  >Alterar</button>';
            echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='SelecionarItem.php?op=excluir&id=" . $itemm->getItem_selecionado() . "'>Excluir</a>";
            echo '</form>';

            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        echo '</div>';
           echo ' <div class="row">
                        <div class="col-lg-9">
                            
                        </div>
                        <div class="col-lg-2">
                            <a type="button" class="btn btn-danger"  href="FimPedido.php">FINALIZAR PEDIDO</a>
                        </div>


                    </div>';
            
            echo ' ';
            echo '<br>';
            echo '<br>';
    }


                                                   
   

    //  var_dump($vMC);
    
        $Vitem33 = DaoMaterialConsumo::getTodosJatoba($_SESSION['id_almox3']);
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">'
        . 'PRODUTOS'
                . '</div>';
        echo '<div class="panel-body">';
        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-produtos">';

        //  print_r($SMC);      
        // print_r($Vitem33);
        //   echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-CURSOS">';
        //  echo '<tr><td colspan="7" align="center"><b>'.$Vitem33[0]->getId_almox()->getNome().'</b></td></tr>';

        echo ' <thead>';
        echo '<tr>';
        echo '<th>NOME</th>'
          . ' <th>DESCRIÇÃO</th> '
           . '<th>UNID/CX</th>'
          . ' '
          . ' <th>QUANTIDADE DE CAIXA</th>'
          . ' <th>QUANTIDADE DE UNIDADE</th>'
          . ' <th>SELECIONAR</th>';
        echo '</tr>';
        echo ' </thead>';

        echo ' <tbody>';

        foreach ($Vitem33 as $item) {

            $verificarr = DaoItemSelecionado::getVerificarId($_SESSION['id_pedido'], $item->getCodigo());

            if ($item->getCodigo() == $verificarr) {
                
            } else {

               
                echo '<tr>';
                 echo '<form role="form" action="SelecionarItem.php" method="post">';
                echo '<input class="form-control" value="' . $item->getCodigo() . '" type ="hidden" name="codigo" >';
                echo '<input class="form-control" value="' . $item->getId_MC() . '" type ="hidden" name="id_produto" >';
                
                //  echo "<td align='left'>".$item->getCodigo()."</td>";
                echo "<td align='left'>" . $item->getNome() . "</td>";
                echo "<td align='left'>" . $item->getDescricao() . "</td>";
                
                
//                ===================== INICIO ========================
                
               if($item->getId_UM()->getId_UM() == 2){
                
                 echo "<td align='center'>" . $item->getCxUn() . "</td>";
                 echo "<input value=". $item->getCxUn()." type='hidden'name='cxUn'>";
                
                }else{
                    echo "<td align='center'>UNIDADE</td>";
                      echo "<input value='0' type='hidden'name='cxUn'>";
                    
                }
                
//                ===================== FIM ========================  
                
                
//                ===================== INICIO ========================
               
                
             //   if($item->getId_UM()->getId_UM() == 2){
                
//                echo "<td align='left'>";
//                    
//                echo '<select name="UM" class="form-control">';
//                echo '<option value="1" selected=true> Caixa </option>';
//                echo '<option value="2" > Unidade </option>';
//               echo '</select>';  
//                    
//                    echo "</td>";
//                
//                }else{
//                     echo "<td align='left'>" . $item->getId_UM()->getDescricao() . "</td>";
//                    
//                    
//                }
                
 //                ===================== FIM ========================                
                
           
                
                if($item->getId_UM()->getId_UM() == 2){
                
               echo "<td align='left'><input value='0' type='number'name='cx'></td>";
                
                }else{
              echo "<input value='0' type='hidden'name='cx'>";
              echo "<td align='left'>0</td>";
                    
                }
                
                
                
                
                
                
                echo "<td align='left'><input value='0' type='number'name='qtd'></td>";
                // echo "<td align='left'>".$item->getQtd()."</td>";
                echo '<td><button type="submit" class="btn btn-default"   name="Adicionar"  >SELECIONAR</button></td>';
                // echo "<td><a class='btn btn-success' href='SelecionarItem.php?Adicionar&idproduto=".$item->getCodigo()."&produto=".$item->getNome()."'>Selecionar</a></td>";
                //echo "<td><a class='btn btn-success' href='SelecionarItem.php?Adicionar&idproduto=".$item->getCodigo()."&produto=".$item->getNome()."'>Selecionar</a></td>";
                

                echo '</form>';
                echo '</tr>';
               
            }
        }
        echo ' </tbody>';

        //  echo '</table>';
        //    echo"</center>";
        echo '</table>';
        echo '</div>';
    //    echo '</div>';
    
    ?>                                     


                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">


                                        <!--                    verificar      <div class="panel-body">-->
                                        <!-- Button trigger modal -->

                                        <!-- Modal -->


                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>





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
            <script src="/ControleEstoqueWebTCC/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/metisMenu.min.js"></script>



            <script type="text/javascript" language="javascript" src="/ControleEstoqueWebTCC/jquery/jquery.js"></script>
            <script type="text/javascript" language="javascript" src="/ControleEstoqueWebTCC/jquery/jquery.dataTables.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/sb-admin-2.js"></script>



            <script>
                $(document).ready(function () {
                    $('#dataTables-item').DataTable({
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
                                "sPrevious": "Anterior",
                                "sNext": "Próximo",
                                "sLast": "Último"
                            }
                        }


                    });
                });
            </script>


            <script>
                $(document).ready(function () {
                    $('#dataTables-produtos').DataTable({
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
                                "sPrevious": "Anterior",
                                "sNext": "Próximo",
                                "sLast": "Último"
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