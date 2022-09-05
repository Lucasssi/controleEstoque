<!DOCTYPE html>
<?php
session_start();
$_SESSION['login'];
if($_SESSION['login'] == "ativo"){
    
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

    <title>CONTROLE DE ESTOQUE</title>

    <!-- Bootstrap Core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">
        
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
                <a class="navbar-brand" href="PaginaPrincipal.php">CONTROLE DE ESTOQUE</a>
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
                    <h2 class="page-header">LISTAS DE PEDIDOS</h2>
               
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="tooltip-demo">
              <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content=" 
                                                       <?php echo $_SESSION['nome']; ?>
                                                       <?php echo "<br>"; ?>
                                                       <?php print ("$var \n"); ?>
                                                       <?php echo $_SESSION['funcao']; ?>
                                                       <?php echo $_SESSION['tipo']; ?>
                                                       <?php echo $_SESSION['id_funcionario']; ?>">
                 MEUS DADOS
                  </button>
             </div>
             <div class="well">
                
                 
                     <h3>MEUS DADOS</h3>
                 <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
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
                 
              
               
<!--                <a class="btn btn-default btn-lg btn-block" target="_blank" href="">FAZER PEDIDO</a>-->
            </div>
            
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            LISTAS DE PEDIDOS
                        </div>
                        <br>
                        
                                <?php
                                
                                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Pedido.php';
                                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoItemSelecionado.php';

                                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoPedido.php';
                                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoSaidaProduto.php';
                               $_SESSION['almox_Selecionado'] = 0;
                               $_SESSION['TotalDeAtendidos'] = 0;
                                $_SESSION['naoAlmox'] = 0;
                              // $vPedido = DaoPedido::getPedidoTodos();
                               
                                $_SESSION['Nome_Curso'] = NULL;
                                $_SESSION['id_Produto_teste'] = NULL;
                                
                                
                                if(isset($_POST['entreguee']))
                                    {
                                    
                                    
                                    var_dump($_POST['id_pedido']);
                                    
                                    DaoSaidaProduto::alterarItensSaida( $_POST['id_pedido']);
                                    DaoPedido::alterarPedidoEntregue( $_POST['id_pedido'],$_SESSION['id_funcionario']);
                                    
                                    
                                    }
                                    
                                      if (isset($_GET['FimPedido']))
                                          {

                                            DaoPedido::alterarPedidoStatus($_GET['pedido']);


                                            unset($_SESSION['Nome_Curso']);
                                            unset($_SESSION['id_Curso']);
                                            unset($_SESSION['id_pedido']);

                                         

                                       }
                                
                                
                                 
                               
                                
                                ?>
                        <!-- .panel-heading -->
                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#solicitado" data-toggle="tab">SOLICITADO</a></li>
                                <li>               <a href="#profile" data-toggle="tab">EM ANDAMENTO</a></li>
                                <li>               <a href="#ENTREGUE" data-toggle="tab">ENTREGUE</a></li>
                            </ul>
                        <br>
                            
                        <div class="tab-content">
                        
                            
                        
<!--========================               INICIO         SOLICITADO             ================-->
                           

                          <div class="tab-pane fade in active" id="solicitado">
                           <div class="panel-group" id="accordion">
                             <?php
                             
                              
                             $vPedidoSolicitado = DaoPedido::getPedidoTodosSolicitado();
                             
                             
                             foreach ($vPedidoSolicitado as $Pedidoo1){
                              $vItem = DaoItemSelecionado::getTodos($Pedidoo1->getId_pedido(), $Pedidoo1->getAlmox()->getId_almox());
                             // var_dump($vItem);
                                 
                                  
                             ?>   
                                <div class="panel panel-default">
                                    
                           
                                   
                                       
                                        <h4 class="panel-title">
                                            
                                        </h4>
                                        <table  class="table table-striped table-bordered table-hover">
                                                    
                                                        <tr>
                                                            <th> PEDIDO:  <?php echo $Pedidoo1->getId_pedido();?> </th>
                                                            <th>DATA PEDIDO: <?php echo $Pedidoo1->getData_pedido(); ?></th>
                                                            <th> STATUS: <?php echo $Pedidoo1->getStatus()->getNome(); ?> </th>
                                                            
                                                           
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">DEPARTAMENTO: <?php echo $Pedidoo1->getCurso()->getNome();?></th>
                                                          
                                                    
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">USUARIO: <?php echo $Pedidoo1->getFunc_cli()->getNome();?></th>
                                                             <th><a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $Pedidoo1->getId_pedido();?>" >VISUALIZAR </a> </th>
                                                    
                                                        </tr>
                                                 
                                          </table>
                                    
                                   


                                  
                                    
                                    
                                    <div id="<?php echo $Pedidoo1->getId_pedido();?>" class="panel-collapse collapse">
                                          <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                            <tr>
                                             
                                                <td>CODIGO</td>
                                                <td>PRODUTO</td>
                                                <td>CAIXA</td>
                                                <td>CAIXA/UNID</td>
                                                <td>UNIDADE</td>
                                                <td>TOTAL UNIDADE</td>
                                                
                                             
                                            </tr>
                                            <tbody>
                                                <?php
                                            
                                                      
                                                                         
                                               foreach ($vItem as $ItemPedido)
                                               {
                                                     
                                                ?>
                                                <tr>
                                                 
                                                    <td> <?php echo $ItemPedido->getProduto()->getCodigo(); ?></td>
                                                    <td> <?php echo $ItemPedido->getProduto()->getNome(); ?></td>
                                                      <?php
                                                   if($ItemPedido->getProduto()->getId_UM() == 2){
                                                   ?> 
                                                    <td> <?php echo $ItemPedido->getCx(); ?></td>
                                                    <td> <?php echo $ItemPedido->getCxUn(); ?></td>
                                                    <?php
                                                   }else{
                                                    ?>
                                                     <td>UNIDADE</td>
                                                    <td> UNIDADE</td>
                                                    
                                                    <?php
                                                   }
                                                    ?>
                                                    <td> <?php echo $ItemPedido->getQtd(); ?></td>
                                                    <td> <?php echo $ItemPedido->getTotalUnidade(); ?></td>
                                                   
                                                </tr>
                                                
                                                <?php
                                                   
                                                
                                               }
                                                ?>
                                                 
                                                <tr>
                                          
                                            <form  action="AtenderPedido.php" method="post">
                                                <input class="form-control" value="<?php echo $Pedidoo1->getId_pedido(); ?>" type ="hidden" name="id_pedido" >
                                               
                                                <td colspan="6"><center> <button type="submit" class="btn btn-default"   name="pedido"  >ATENDER</button></center></td>
                                             
                                             </form>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                 
                                  
                                 
                                 
                                    
                                    
                                </div>
                                
                                <br>
                                <br>
                            
                                
                                <?php
                             }
                                ?>
                           </div>
                          

        </div>


<!--========================          FIM              SOLICITADO             ================-->




<!--========================          INICIO              EM ANDAMENTO             ================-->



          <div class="tab-pane fade" id="profile">
          <div class="panel-group" id="accordion">
                             <?php
                              $vPedidoPreparadoEntrega = DaoPedido::getPedidoTodosEmAndamento();
                             foreach ($vPedidoPreparadoEntrega as $Pedidoo){
                              $vItem = DaoSaidaProduto::getSaidaProdutoPorPedido($Pedidoo->getId_pedido());
                             // var_dump($vItem);
                                 
                                  
                             ?>   
                                   <div class="panel panel-default">
                                       
                                        <h4 class="panel-title">
                                            
                                        </h4>
                                        <table  class="table table-striped table-bordered table-hover">
                                                    
                                                        <tr>
                                                            <th> PEDIDO:  <?php echo $Pedidoo->getId_pedido();?> </th>
                                                            <th>DATA PEDIDO: <?php echo $Pedidoo->getData_pedido(); ?></th>
                                                            <th> STATUS: <?php echo $Pedidoo->getStatus()->getNome(); ?> </th>
                                                            
                                                           
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">DEPARTAMENTO: <?php echo $Pedidoo->getCurso()->getNome();?></th>
                                                          
                                                    
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">USUARIO: <?php echo $Pedidoo->getFunc_cli()->getNome();?></th>
                                                             <th><a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $Pedidoo->getId_pedido();?>" >VISUALIZAR </a> </th>
                                                    
                                                        </tr>
                                                 
                                                </table>
                                    
                                    
                                    <div id="<?php echo $Pedidoo->getId_pedido();?>" class="panel-collapse collapse">
                                          <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                            <tr>
                                                <td>TIPO DE PRODUTO</td>
                                                <td>PRODUTO</td>
                                                <td>DESCRIÇÃO</td>
                                                <td>UM</td>
                                                <td>SOLICITADO</td>
                                                <td>ATENDIDO</td>
                                            </tr>
                                            
                                            <tbody>
                                                
                                                <?php                         
                                               foreach ($vItem as $ItemPedido)
                                               {     
                                                ?>
                                                <tr>
                                                    <td> <?php echo $ItemPedido->getProduto()->getId_tipo()->getDescricao(); ?></td>
                                                    <td> <?php echo $ItemPedido->getProduto()->getNome(); ?></td>
                                                    <td> <?php echo $ItemPedido->getProduto()->getDescricao(); ?></td>
                                                    <td> <?php echo $ItemPedido->getProduto()->getId_UM()->getDescricao(); ?></td>
                                                    <td> <?php echo $ItemPedido->getSolicitado(); ?></td>
                                                    <td> <?php echo $ItemPedido->getAtendido(); ?></td>  
                                                </tr>
                                                
                                                <?php
                                               }
                                                ?>
                                                 
                                                <tr>
                                          
                                            <form  action="homeAlmoxarife.php" method="post">
                                                <input class="form-control" value="<?php echo $Pedidoo->getId_pedido(); ?>" type ="hidden" name="id_pedido" >
                                               
                                                <td colspan="6"> ALTERAR STATUS DO PEDIDO PARA ENTREGUE: <button type="submit" class="btn btn-default"   name="entreguee"  >OK</button></td>
                                             
                                               </form>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                            
                                
                                <?php
                             }
                                ?>
                           </div>
        </div>

<!--========================          FIM              EM ANDAMENTO             ================-->
<!--========================          INICIO              EM ANDAMENTO             ================-->



          <div class="tab-pane fade" id="ENTREGUE">
          <div class="panel-group" id="accordion">
                             <?php
                              $vPedidoEntrega = DaoPedido::getPedidoTodosEntregue();
                             foreach ($vPedidoEntrega as $Pedidooo){
                              $vItemm = DaoSaidaProduto::getSaidaProdutoPorPedido($Pedidooo->getId_pedido());
                          //    var_dump($vItemm);
                                 
                                  
                             ?>   
                                   <div class="panel panel-default">
                                       
                                        <h4 class="panel-title">
                                            
                                        </h4>
                                        <table  class="table table-striped table-bordered table-hover">
                                                    
                                                        <tr>
                                                            <th> PEDIDO:  <?php echo $Pedidooo->getId_pedido();?> </th>
                                                            <th>DATA PEDIDO: <?php echo $Pedidooo->getData_pedido(); ?></th>
                                                            <th>DATA ENTREGUE: <?php echo $Pedidooo->getData_entrega(); ?></th>
                                                            <th> STATUS: <?php echo $Pedidooo->getStatus()->getNome(); ?> </th>
                                                            
                                                           
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4">DEPARTAMENTO: <?php echo $Pedidooo->getCurso()->getNome();?></th>
                                                          
                                                    
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">USUARIO: <?php echo $Pedidooo->getFunc_cli()->getNome();?></th>
                                                             <th><a  target="_blank" id="corPreto" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $Pedidooo->getId_pedido();?>" >VISUALIZAR </a> </th>
                                                    
                                                        </tr>
                                                 
                                                </table>
                                    
                                    
                                    <div id="<?php echo $Pedidooo->getId_pedido();?>" class="panel-collapse collapse">
                                          <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">
                                            <tr>
                                                <td>TIPO DE PRODUTO</td>
                                                <td>PRODUTO</td>
                                                <td>DESCRIÇÃO</td>
                                                <td>UM</td>
                                                <td>SOLICITADO</td>
                                                <td>ATENDIDO</td>
                                            </tr>
                                            
                                            <tbody>
                                                
                                                <?php                         
                                               foreach ($vItemm as $ItemPedidoo)
                                               {     
                                                ?>
                                                <tr>
                                                    <td> <?php echo $ItemPedidoo->getProduto()->getId_tipo()->getDescricao(); ?></td>
                                                    <td> <?php echo $ItemPedidoo->getProduto()->getNome(); ?></td>
                                                    <td> <?php echo $ItemPedidoo->getProduto()->getDescricao(); ?></td>
                                                    <td> <?php echo $ItemPedidoo->getProduto()->getId_UM()->getDescricao(); ?></td>
                                                    <td> <?php echo $ItemPedidoo->getSolicitado(); ?></td>
                                                    <td> <?php echo $ItemPedidoo->getAtendido(); ?></td>  
                                                </tr>
                                                <?php
                                               }
                                                ?>
                                                 
<!--                                                <tr>
                                          
                                               <form  action="AtenderPedido.php" method="post">
                                                <input class="form-control" value="<?php //echo $Pedidooo->getId_pedido(); ?>" type ="hidden" name="id_pedido" >
                                               
                                                <td colspan="6"> ALTERAR STATUS DO PEDIDO PARA ENTREGUE: <button type="submit" class="btn btn-default"   name="entregue"  >OK</button></td>
                                             
                                               </form>
                                                </tr>-->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                            
                                
                                <?php
                             }
                                ?>
                           </div>
        </div>

<!--========================          FIM              EM ANDAMENTO             ================-->
       

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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    
      <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>

</body>

</html>
<?php
}else{
    
    header("location: login.php");
    
}
?>