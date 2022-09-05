<!DOCTYPE html>
<?php
session_start();
$_SESSION['login'];
if ($_SESSION['login'] == "ativo") {

//      echo '<script type="text/javascript">';
//      echo 'alert("Bem vindo '.$_SESSION['nome'].' !!!")';
//      echo '</script>';
    ?>
    <html lang="pt-br">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>CONTROLE DE ESTOQUE - ASSIS </title>

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
                        <a class="navbar-brand" href="homeAlmoxarife.php">CONTROLE DE ESTOQUE</a>
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
<!--                                <li>
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
                                </li>
                                                        <li>
                                                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                                                        </li>

                                <li>
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
                                </li>

                                <li>
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
                        <div class="col-lg-12">
                            <h2 class="page-header">DADOS DO USUARIO</h2>

                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="well">
                        <?php
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/saidaMC.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/ItemMaterial.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/ItemSelecionado.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Item.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Pedido.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/SaidaProduto.php';

                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCurso.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoSaidaMC.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoMaterialConsumo.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoItemMC.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoItemSelecionado.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoPedido.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoAlmoxarifadoFuncionario.php';
                        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoSaidaProduto.php';




                        $SP = new SaidaProduto ();

                        if (isset($_POST['atender'])) {
                            
                            
                           $CodigoProduto = DaoSaidaProduto::getVerificarSaidaProduto($_SESSION['Pedido2_Idpedido'], $_POST['codigo_produto']);
                            
                            if( $_POST['codigo_produto'] == $CodigoProduto){
                                
                                
                            }else
                                {
                                   if ($_POST['atendido'] > $_POST['disponivel']) {

                              //  echo '<h1>Valor Indisponivel !!!!!!</h1>';
                            } else {
                                
                            //      $saldo = $_POST['disponivel'] - $_POST['atendido'];

                                $SP->setId_pedido($_SESSION['Pedido2_Idpedido']);
                                $SP->getProduto()->setId_MC($_POST['id_produto']);
                                $SP->getProduto()->setCodigo($_POST['codigo_produto']);
                                $SP->setAtendido($_POST['atendido']);
                                $SP->setDisponivel($_POST['disponivel']);
                                $SP->setSolicitado($_POST['solicitado']);
                                $SP->setStatus("Pendente");

                                // var_dump($SP);

                                DaoSaidaProduto::inserir($SP);
                                
                                if ($_POST['EstMinUn'] == -1){
                                   $codigoo = $_POST['codigo'];
                                   $CxUnn = $_POST['CxUn'];
                                   $saldo =  $_POST['disponivel'] - $_POST['atendido'];
                                   $Cxx = $saldo /$CxUnn;
                                   $qtd = $saldo % $CxUnn;
                                   
                                   DaoMaterialConsumo::alterarCX($Cxx, $codigoo);
                                   echo '<h1>TEste</h1>';
                                }
                             
                               
                             //  DaoMaterialConsumo::Atualizarsaldo($saldo, $_POST['id_produto']);
                                
                            }
                                
                                }
                            
                            

                         
                        }
                        
                        
                        if(isset($_POST['excluir_item_aten']))
                        {
                        
                            DaoSaidaProduto::excluir($_POST['id_sp']);
                            
                        }





                        if (isset($_POST['almox'])) {
                            
                            if($_SESSION['TotalDeAtendidos'] > 0 ){
                                $_SESSION['naoAlmox'] = 1;
                            }
                            else
                            {
                            
                            $_SESSION['almox_Selecionado'] = 1;
                            $_SESSION['almox_Selecionado_nome'] = $_POST['NomeAlmox'];
                            $_SESSION['almox_Selecionado_id_almox'] = $_POST['id_almox'];
                            }
                            
                            
                            
                        }

                        if (isset($_POST['pedido'])) {
                            $Pedido2 = DaoPedido::getPedidoPorId($_POST['id_pedido']);

                            $_SESSION['Pedido2_Idpedido'] = $Pedido2->getId_pedido();
                            $_SESSION['Pedido2_NomeCurso'] = $Pedido2->getCurso()->getNome();
                            $_SESSION['Pedido2_DataPedido'] = $Pedido2->getData_pedido();
                            $_SESSION['Pedido2_NomeCliente'] = $Pedido2->getFunc_cli()->getNome();
                            $_SESSION['Pedido2_NomeStatus'] = $Pedido2->getStatus()->getNome();
                            $_SESSION['Pedido2_Cliente_ID'] = $Pedido2->getFunc_cli()->getId_Funcionario();
                            $_SESSION['almox_Selecionado_id_almox'] = $Pedido2->getAlmox()->getId_almox();


//                          $Pedido2->getAlmox();
//                          $Pedido2->getData_entrega();
//                          $Pedido2->getFunc_almox();
                        }
                        ?>
                        
                          
                 <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                     <tr>
                         <th td colspan="4" align="center">MEUS DADOS</th>
                     </tr>              
                     <tr>
                                             
                                                <td>NOME</td>
                                                <td>FUNÇÃO</td>
                                                <td>TIPO</td>
                                                <td>ID FUNCIONARIO</td>
                                                
                                             
                                            </tr>
                                            <tbody>
                                               
                                                <tr>
                                                    <td> <?php echo $_SESSION['nome']; ?></td>
                                                    <td> <?php echo $_SESSION['funcao']; ?></td>
                                                    <td> <?php echo $_SESSION['tipo']; ?></td>
                                                    <td> <?php echo $_SESSION['id_funcionario']; ?></td>
                                                   
                                                </tr>
                                                
                                            </tbody>
                  </table>
                            
                        
                                     
                 <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                     
                      <tr>
                         <th td colspan="4" >DADOS DO PEDIDO</th>
                     </tr>  
                                            <tr>
                                             
                                                <td>PEDIDO</td>
                                                <td>NOME USUARIO</td>
                                                <td>DATA PEDIDO</td>
                                                <td>ESTATUS</td>
                                                
                                             
                                            </tr>
                                            <tbody>
                                               
                                                <tr>
                                                    <td> <?php echo $_SESSION['Pedido2_Idpedido']; ?></td>
                                                    <td> <?php echo$_SESSION['Pedido2_NomeCliente']; ?></td>
                                                    <td> <?php echo $_SESSION['Pedido2_DataPedido']; ?></td>
                                                    <td> <?php echo $_SESSION['Pedido2_NomeStatus']; ?></td>
                                                   
                                                </tr>
                                                
                                            </tbody>
                  </table>

<!--                        <p>DADOS DO PEDIDO:</p>
                        <p>CODIGO: <?php echo $_SESSION['Pedido2_Idpedido']; ?></p>
                        <p>DATA DO PEDIDO: <?php echo $_SESSION['Pedido2_DataPedido']; ?></p>
                        <p>NOME DO USUARIO: <?php echo $_SESSION['Pedido2_NomeCliente']; ?></p>
                        <p>STATUS: <?php echo $_SESSION['Pedido2_NomeStatus']; ?></p>-->

                        <!--                <a class="btn btn-default btn-lg btn-block"  href="AddDepartamentoUsuario.php">ADICIONAR DEPARTAMENTO</a>-->
                        <!--<a class="btn btn-default btn-lg btn-block" target="_blank" href="">RELATORIOS</a>-->
                        <a class="btn btn-default btn-lg btn-block"  href="homeAlmoxarife.php">VOLTAR</a>
                    </div>


    <?php
     if (isset($_POST['atender'])) {
         
         
         
                            if ($_POST['atendido'] > $_POST['disponivel']) {

                               // echo '<h1>Valor Indisponivel !!!!!!</h1>';
                                
                                echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                VALOR NÃO DISPONIVEL: SOLICITADO:  '.$_POST['atendido'].'   DISPONIVERL:   '.$_POST['disponivel'].'.
                                 </div>';
                                
                            }    
    
     }
    
    $vSP = DaoSaidaProduto::getSaidaProdutoPorPedido($_SESSION['Pedido2_Idpedido']);
    




// $vSP = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['Pedido2_Idpedido']);
  //  echo '<h1>' . $_SESSION['Pedido2_Idpedido'] . '</h1>';
    ?>
                    <div class="row">
                        
                        <?php
                     //   if(isset($_POST['atender']) || isset($_GET['NaoFinalizado']) ||  $_SESSION['naoAlmox'] == 1 ){
                        
                        ?>
                        
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    ATENDIDOS
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">

                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>CODIGO</th>
                                                    <th>TIPO</th>
                                                    <th>PRODUTO</th>
                                                    <th>DESCRIÇÃO</th>
                                                    <th>UNIDADE DE MEDIDA</th>
                                                    <th>CX disp</th>
                                                    <th>CX / UN</th>
                                                    <th>DISPONIVEL</th>
                                                    <th>SOLICITADO</th>
                                                    <th>ATENDIDO</th>
                                                    <th>AÇÃO</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                $y = 0;
                                foreach ($vSP as $SP1) {
                                    
                                     $y++; 
                                         
                                         $_SESSION['TotalDeAtendidos'] = $y;
                                    
                                    
                                    ?>
                                                    <tr>
                                                        <td align='center'><?php echo $SP1->getProduto()->getCodigo(); ?></td>
                                                        <td align='center'><?php echo $SP1->getProduto()->getId_tipo()->getDescricao(); ?></td>
                                                        <td align='center'><?php echo $SP1->getProduto()->getNome(); ?></td>
                                                        <td align='center'><?php echo $SP1->getProduto()->getDescricao(); ?></td>
                                                        <td align='center'><?php echo $SP1->getProduto()->getId_UM()->getDescricao(); ?></td>
                                                        <td align='center'><?php echo $SP1->getProduto()->getCx(); ?></td>
                                                        <td align='center'><?php echo $SP1->getProduto()->getCxUn(); ?></td>
                                                        <td align='center'><?php echo $SP1->getDisponivel(); ?></td>
                                                        <td align='center'><?php echo $SP1->getSolicitado(); ?></td>
                                                        <td align='center'><?php echo $SP1->getAtendido(); ?></td>
                                            <form action="AtenderPedido.php" method="POST">
                                                                           <input class="form-control" value="<?php echo $SP1->getId_sp(); ?>" type ="hidden" name="id_sp" >
                                                        <td align='center'> <button type="submit" class="btn btn-default"   name="excluir_item_aten"  >EXCLUIR</button></td>
                                            </form>

                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <?php
                                                echo "ItemAtentidos -->".$_SESSION['TotalDeAtendidos']."";
                                        ?>
                                              <div class="row">
                        <div class="col-lg-8">
                            <?php
if(isset($_GET['NaoFinalizado']))
    {
     echo ' <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Para finalizar o atendimento do pedido e necessario que tenha escolhido todos itens ou Cancelar os itens atendido.
                                Deseja cancelar?
                            </div>';
    }
?>
                        </div>
                        <div class="col-lg-2">
                            <a type="button" class="btn btn-danger"  href="FinalizarPedido.php">FINALIZAR PEDIDO</a>
                        </div>


                    </div>

                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        
                        
                        <?php
                      //  }
                        ?>
                    </div>






                    <!-- /.row -->


    <?php
    //if (isset($_POST['pedido']) || isset($_POST['almox']) || isset($_POST['atender']) || isset($_GET['NaoFinalizado']) ) {



     
        ?>
                        <div class="row">

        <?php
       // if (isset($_POST['almox']) || isset($_POST['atender']) || isset($_GET['NaoFinalizado'])) {
            ?>
                            <!--INICIO -->

                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                             SOLICITADO
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">

                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>CODIGO</th>
                                                                <th>TIPO</th>
                                                                <th>PRODUTO</th>
                                                                <th>DESCRIÇÃO</th>
                                                                <th>UNIDADE DE MEDIDA</th>
                                                                <th>CX dispo</th>
                                                                <th>CX/ UN</th>
                                                                <th>DISPONIVEL(UN)</th>
                                                                <th>SOLICIATADO (UN)</th>
                                                                <th>ATENTIDO (UN)</th>
                                                                <th>AÇÃO</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                    <?php
                                      echo $_SESSION['Pedido2_Idpedido'];
                                     $VItemPedido2 = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['Pedido2_Idpedido'],$_SESSION['almox_Selecionado_id_almox'] );
                                     $i = 0;
                                     foreach ($VItemPedido2 as $item55)
                                         {
                                           $i++; 
                                         
                                         $_SESSION['TotalDeItem'] = $i;
                                         }
                                     echo "valor de i -->". $_SESSION['TotalDeItem']."";
                                     echo '<br>';
                                     echo "ItemAtentidos -->".$_SESSION['TotalDeAtendidos']."";
                                     
                                    foreach ($VItemPedido2 as $item55) {


                                        $Vitem5 = DaoMaterialConsumo::getItemAlmox($_SESSION['almox_Selecionado_id_almox'], $item55->getProduto()->getCodigo());
                                        //  var_dump($Vitem5);
                                        
                            $CodigoProduto2 = DaoSaidaProduto::getVerificarSaidaProduto($_SESSION['Pedido2_Idpedido'], $item55->getProduto()->getCodigo());
                            
                           // var_dump($CodigoProduto2);
                            
                            if( $item55->getProduto()->getCodigo() == $CodigoProduto2){
                                
                                
                           }else{
                                        
                                        
                                        ?>
                                                                <tr>
                                                            <form action="AtenderPedido.php" method="POST">
                                                                <input class="form-control" value="<?php echo $item55->getTotalUnidade(); ?>" type ="hidden" name="solicitado">
                                                                <input class="form-control" value="<?php echo $Vitem5->getQtd(); ?>" type ="hidden" name="disponivel">
                                                                <input class="form-control" value="<?php echo $Vitem5->getEstMinUn(); ?>" type ="hidden" name="EstMinUn">
                                                                <input class="form-control" value="<?php echo $Vitem5->getCxUn(); ?>" type ="hidden" name="CxUn">
                                                                <input class="form-control" value="<?php echo $Vitem5->getCx(); ?>" type ="hidden" name="Cx">
                                                                <input class="form-control" value="<?php echo $Vitem5->getId_MC(); ?>" type ="hidden" name="id_produto">
                                                                <input class="form-control" value="<?php echo $Vitem5->getCodigo(); ?>" type ="hidden" name="codigo">
                                                                <input class="form-control" value="<?php echo $item55->getProduto()->getCodigo(); ?>" type ="hidden" name="codigo_produto">
                                                                <td align='center'> <?php echo $item55->getProduto()->getCodigo(); ?> </td>
                                                                <td align='center'> <?php echo $item55->getProduto()->getId_tipo()->getDescricao(); ?> </td>
                                                                <td align='center'> <?php echo $item55->getProduto()->getNome(); ?> </td>
                                                                <td align='center'> <?php echo $item55->getProduto()->getDescricao(); ?> </td>
                                                                <td align='center'> <?php echo $item55->getProduto()->getId_UM()->getDescricao(); ?> </td>
                                                                <td align='center'> <?php echo $Vitem5->getCx();; ?> </td>
                                                                <td align='center'> <?php echo $Vitem5->getCxUn();; ?> </td>
                                                                <td align='center'> <?php echo $Vitem5->getQtd(); ?> </td>
                                                                <td align='center'> <?php echo $item55->getTotalUnidade(); ?> </td>
                                                                <td align='center'> <input class="form-control"  type ="number" name="atendido" value="1"></td>
                                                                <td align='center'> <button type="submit" class="btn btn-default"   name="atender"  >SELECIONAR</button> </td>
                                                            </form>

                                                            </tr>
                    <?php
                                   }
                                    
                            }
                ?>

                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>

<!--FIM -->
                               
                                                        <?php
                                                   //} //else {
                                                        ?>
                                <!-- 
                                
                                INICIO
                                
                                ESSA CONDIÇÃO E ONDE VAI CHEGAR OS ITENS DO ALMOXARIFADO 
                                
                                -->

                                                        <?php
                                                 //       if ($_SESSION['almox_Selecionado'] == 1) {

                                                           
                                                            ?>
                                 <!-- INICIO  -->
<!--                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            ITENS PEDIDOS
                                        </div>
                                         /.panel-heading 
                                        <div class="panel-body">
                                            <div class="table-responsive">

                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ITEM</th>
                                                            <th>PRODUTO</th>
                                                            <th>SOLICITADO</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                <?php
//                                   $VItemPedido = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['Pedido2_Idpedido'], $_SESSION['almox_Selecionado_id_almox']);
//                                foreach ($VItemPedido as $item2) {
//
//                                    $_SESSION['id_Produto_teste'] = DaoSaidaProduto::getVerificarSaidaProduto($_SESSION['Pedido2_Idpedido'], $item2->getProduto()->getId_MC());
//
//                                    if ($item2->getProduto()->getId_MC() == $_SESSION['id_Produto_teste']) {
//                                        
//                                    } else {
//                                        ?>
                                                                <tr>

                                                                    <td align='center'>//<?php //echo $item2->getProduto()->getCodigo(); ?></td>
                                                                    <td align='center'>//<?php// echo $item2->getProduto()->getNome(); ?></td>
                                                                    <td align='center'>//<?php //echo $item2->getQtd(); ?></td>


                                                                </tr>
                    //<?php
//                }
//            }
            ?>

                                                    </tbody>
                                                </table>

                                            </div>
                                             /.table-responsive 
                                        </div>
                                         /.panel-body 
                                    </div>
                                     /.panel 
                                </div>-->
                                
                                     <!-- FIM  -->

                                    <!-- 
                                     
                                     FIM
                                     
                                     ESSA CONDIÇÃO E ONDE VAI CHEGAR OS ITENS DO ALMOXARIFADO 
                                     
                                    -->
                <?php
          //  } else {
                ?>
<!--                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                ALMOXARIFADO NÃO SELECIONADO
                                            </div>
                                             /.panel-heading 
                                            <div class="panel-body">
                                                <div class="table-responsive">

                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>DISPONIVEL</th>
                                                                <th>ALMOXARIFADO</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td align='center'>NÃO SELECIONADO</td>
                                                                <td align='center'>NÃO SELECIONADO</td>
                                                            </tr>
                                                            <tr>
                                                                <td align='center'>NÃO SELECIONADO</td>
                                                                <td align='center'>NÃO SELECIONADO</td>
                                                            </tr>


                                                        </tbody>
                                                    </table>

                                                </div>
                                                 /.table-responsive 
                                            </div>
                                             /.panel-body 
                                        </div>
                                         /.panel 
                                    </div>-->





                <?php
          //  }
                                                 //   }
//            else {
//                echo '================================== não encontrado =========================';
//            }
            ?>
                                <!-- /.col-lg-6 -->
                            </div>
                    
                    
                    
                    <?php
                    
                    if($_SESSION['naoAlmox'] == 1)
                        {
                        $_SESSION['naoAlmox'] = 0;
                         echo ' <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               Pedido já iniciado, para alterar de almoxarifado, devera cancelar itens Atendidos e escolher Almoxarifado desejado.
                            </div>';
                        
                        }
                    
                    
                    ?>
                    
                    
<!--                    
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            ALMOXARIFADOS DISPONIVEIS
                                        </div>
                                         /.panel-heading 
                                        <div class="panel-body">
                                            <div class="table-responsive">

            <?php
          //  $Vdf = DaoAlmoxarifadoFuncionario::getAlmoxUsuario($_SESSION['id_funcionario']);
            // var_dump($Vdf);
            //echo $_SESSION['Pedido2_Cliente_ID'];
            ?>

                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>

                                                        <tr>
                                                            <th>ALMOXARIFADO</th>
                                                            <th>SELECIONAR</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
            <?php
           // foreach ($Vdf as $almoxx) {
                ?>
                                                            <tr>
                                                        <form action="AtenderPedido.php" method="POST">
                                                            <input class="form-control" value="<?php //echo $almoxx->getAlmoxarifado()->getID_Almox(); ?>" type ="hidden" name="id_almox" >
                                                            <input class="form-control" value="<?php// echo $almoxx->getAlmoxarifado()->getNome(); ?>" type ="hidden" name="NomeAlmox" >
                                    <?php //echo $almoxx->getAlmoxarifado()->getID_Almox();?>  
                                                            <td><?php// echo $almoxx->getAlmoxarifado()->getNome(); ?></td>
                                                            <td><button type="submit" class="btn btn-default"   name="almox"  >SELECIONAR</button></td>

                                                        </form>
                                                        </tr>
                                    <?php
                              //  }
                                ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                             /.table-responsive 
                                        </div>
                                         /.panel-body 
                                    </div>
                                     /.panel 
                                </div>
                              
                            </div>-->
                            <!-- /.row -->
            <?php
           // $vMC = DaoMaterialConsumo::getTodosAlmox();


//            foreach ($vMC as $MCC) {
//
//                $Vitem33 = DaoMaterialConsumo::getTodosJatoba($MCC->getId_almox());
//
//                echo '  <div class="panel panel-default">';
//                echo ' <div class="panel-heading">
//                                   LISTA DE MATERIAL DE COMSUMO
//                                    </div>';
//                echo '<div class="panel-body">';
//                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="' . $Vitem33[0]->getId_almox()->getNome() . '">';
//                echo ' <thead>';
//                echo '<tr><td colspan="7" align="center"><b>' . $Vitem33[0]->getId_almox()->getNome() . '</b></td></tr>';
//                echo '<tr>';
//                echo '<th>CODIGO</th>'
//                . '<th>Nome</th>'
//                . '<th>DESCRIÇÃO</th>'
//                . '<th>UNIDADE DE MEDIDA</th>'
//                . '<th>QUANTIDADE</th>'
//                . '<th>TIPO</th>'
//                . '<th>AÇÕES</th>';
//                echo '</tr>';
//                echo ' </thead>';
//                echo '<tbody>';
//                foreach ($Vitem33 as $item) {
//
//                    echo '<tr>';
//                    echo "<td align='left'>" . $item->getCodigo() . "</td>";
//                    echo "<td align='left'>" . $item->getNome() . "</td>";
//                    echo "<td align='left'>" . $item->getDescricao() . "</td>";
//                    echo "<td align='left'>" . $item->getId_UM()->getDescricao() . "</td>";
//                    echo "<td align='left'>" . $item->getQtd() . "</td>";
//                    echo "<td align='left'>" . $item->getId_tipo()->getDescricao() . "</td>";
//                    echo "<td><a href='CadMateirlaComsumo.php?op=alterar&id=" . $item->getCodigo() . "'> Alterar </a>&nbsp;</td>";
//                    ?>

                    <?php
//                    // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
//                    // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadFuncionario.php?op=alterar&id=" . $funcionario->getId_funcionario() . "'> Alterar </a>&nbsp;";
//                    //  echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadFuncionario.php?op=remover&id=" . $funcionario->getId_funcionario() . "'> Remover </a>";
////                                  
//                    ?>


                                    <form  action="CadCidade.php" method="post">
                                        <!-- inicio de -->
                                        <!--                                            <div class="modal fade" id="Remover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                        
                                                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR CIDADE ?</h4>     
                                        
                                        
                                                                                                </div>
                                        
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                                        
                                                                                                    <button type="submit"   class="btn btn-primary btn-sm" name="Remover"  >SIM</button>
                                                                                                </div>
                                                                                            </div>
                                                                                             /.modal-content 
                                                                                        </div>
                                                                                         /.modal-dialog 
                                                                                    </div>-->

                    <!-- <input class="form-control" value="//<?php //echo $Cidadee->getId_cidade(); ?>" type ="text" name="id_cidadeExcluir" >-->



                                    <?php
//                                    //---------------teeeeeeeessssste  echo "<a type='button' class='btn btn-outline btn-danger'  data-toggle='Excluir' href='CadCidade.php?op=Excluir&id=" . $Cidadee->getId_cidade() . "'>Excluir</a>";
//                                    // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
//                                    ?>

                                    <?php // echo $Cidadee->getId_cidade(); ?>


                                        </tr>

                                    </form>

                    <?php
//                }
//
//                echo '</tbody>';
//
//
//                echo '</table>';
//                echo '</div>';
                echo '</div>';
         //   }
            ?>
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <!-- jQuery -->
                    <script src="jquery/jquery.min.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="js/bootstrap.min.js"></script>

                    <!-- Metis Menu Plugin JavaScript -->
                    <script src="../css/metisMenu/metisMenu.min.js"></script>

                    <!-- DataTables JavaScript -->
                <!--    <script src="../css/datatables/*"></script>
                    <script src="../css/datatables-plugins/dataTables.bootstrap.min.js"></script>
                    <script src="../css/datatables-responsive/dataTables.responsive.js"></script>-->

                    <!-- Custom Theme JavaScript -->
                    <script src="/js/sb-admin-2.js"></script>
                    <script src="../css/datatables/*" ></script>


                    <script type="text/javascript" language="javascript" src="../jquery/jquery.js"></script>
                    <script type="text/javascript" language="javascript" src="../css/datatables/js/jquery.dataTables.js"></script>



                    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
                    <script>
                        $(document).ready(function () {
                            $('#dataTables-example').DataTable({
                                responsive: true
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