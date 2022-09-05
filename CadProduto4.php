<!DOCTYPE html>

<?php
session_start();
$_SESSION['login'];
if($_SESSION['login'] == "ativo"){
    
?>


<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
          <meta http-equiv="Content-Language" content="pt-br">

        <title> CADASTRO DE PRODUTO</title>

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
                <a class="navbar-brand" href="PaginaPrincipal.php">Pagina Principal</a>
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
                                    <a href="Pedido.php">Lista de Pedidos</a>
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
                                    <a href="Cadfuncao.php">Funções</a>
                                </li>
                                <li>
                                    <a href="CadFuncionario.php">Funcionarios</a>
                                </li>
                                <li>
                                    <a href="CadMaterialComsumo.php">Produtos</a>
                                </li>
                                <li>
                                    <a href="CadCurso.php">Departamento</a>
                                </li>
                                <li>
                                    <a href="CadStatusPedido.php">Status</a>
                                </li>-->
                               
                            </ul>
                            <!-- /.nav-second-level -->
<!--                        </li>-->
                        
<!--                        <li>
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
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Controle Usuarios <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="AddDepartamentoUsuario.php">Relação Usuario Departamento Almoxarifado</a>
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
                    <br>
<!--                    <div class="col-lg-12">
                        <h1 class="page-header">SISTEMA ASSIS</h1>
                    </div>-->


                </div>
                
                <?php
                    //require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/classes/Produto.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/UnidadeMedida.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Tipo.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/NotaFiscal.php';
    //require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoque1/Persistencia/DaoFuncionario.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoUnidadeMedida.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoAlmoxarifado.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoMaterialConsumo.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoTipo.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoNotaFiscal.php';
    //require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
    
    
    
    
                $NotaFiscal = DaoNotaFiscal::getNotaFiscal($_SESSION['id_NotaFiscal']);
                $IdAlmox = DaoAlmoxarifado::getAlmoxarifado($_SESSION['id_almox6']); 
                ?>
                
                
                
                <!-- INICIO-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DADOS NOTA FISCAL
                            </div>
                           
                            
                             <div class="panel-body">
                            <div class="table-responsive table-bordered">
                            <table class="table">
                             
                                        <tr>
                                            <td align="right">NUMERO DA NOTA: </td>
                                            <td align="left"><?php echo  $NotaFiscal->getNumero();?></td>
                                            <td align="right">DATA EMISSÃO: </td>
                                            <td align="left"><?php echo  $NotaFiscal->getDataEmissao();?></td>
                                            <td align="right">NOME EMPRESA: </td>
                                            <td align="left"><?php echo  $NotaFiscal->getEmpresa()->getNome();?></td>
                                            <td align="right">CNPJ: </td>
                                            <td align="left"><?php echo  $NotaFiscal->getEmpresa()->getCmpj();?></td>
                                        </tr>
                                        <tr>
                                            <td align="right">ALMOXARIFADO DE DESTINO: </td>
                                            <td align="left"><?php echo $IdAlmox->getNome()?></td>
                                            <td align="right">LOCAL: </td>
                                            <td align="left" colspan="5"><?php echo $IdAlmox->getLocal()?></td>
<!--                                        <td align="right">XXX: </td>
                                            <td align="left">XXX</td>
                                            <td align="right">XX XX: </td>
                                            <td align="left">XX XX-XXX</td>-->
                                        </tr>
                            
                                      
                                      
                                </table>

                            </div>
                            </div>
                        
                            </div>
                    </div>
               </div>
                <!-- FIM-->
                
                
                
                
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE PRODUTOS
                            </div>
         

                       
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadProduto4.php" method="post">
                                            
                                            <div class="col-lg-3">
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                         <?php
                                                              if (isset($_POST['ENVIAR'])) 
                                                                  {

                                                                  
                                                                   $codigo1 = DaoMaterialConsumo::VerificarCodigo($_POST['codigo']);
                                                                   $_SESSION['codigoProduto4'] = $_POST['codigo'];
                                                                  
                                                                  if($_POST['codigo'] == $codigo1)
                                                                  {
                                                                      echo '    <div class="alert alert-danger alert-dismissable">
                                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                                 CODIGO JÁ UTILIZADO -->  '.$_POST['codigo'].'.
                                                                                </div>';  
                                                                  }
                                                                  else
                                                                  {
                                                                      echo '<div class="alert alert-success alert-dismissable">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                             CODIGO DISPONIVEL  -->  '.$_POST['codigo'].'
                                                                            </div>'; 
                                                                      
                                                                      
                                                                      
                                                                      echo "sessão --> ".$_SESSION['codigoProduto4'];
                                                                      echo '<br>';
                                                                  }
                                                                  
//                                                                  echo "codigo -->".$_POST['codigo'];   
//                                                                  echo '<br>';   
//                                                                  echo "Codogo encontrado -->".$codigo1;   
//                                                                  echo '<br>';   

                                                                  }

                                                           ?>

                                                  
                                                    <label>CODIGO:</label>
                                                    <input class="form-control"  type ="text" name="codigo" >
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                      <button type="submit" class="btn btn-default"  name="ENVIAR">VERIFICAR</button>
                                                      <br>
                                                      <br>
                                                   
                                                   
                                                   </div>     
                                               

                                              
    
                                              
                                                    
                                            </div> 
                                            
                                            <div class="col-lg-3">
                                            </div>
                                        </form>
                                         <?php
                                                              if (isset($_POST['ENVIAR'])) 
                                                                  {

                                                                  
                                                                   $codigo1 = DaoMaterialConsumo::VerificarCodigo($_POST['codigo']);
                                                                  
                                                                  if($_POST['codigo'] == $codigo1)
                                                                  {
                                                                      
                                                                  }
                                                                  else
                                                                  {
                                                                      ?>
                                        <form role="form" action="CadMateirlaComsumo.php" method="post">
                                            <input class="form-control"  type ="hidden" name="codigo4" value="<?php echo $_SESSION['codigoProduto4'];?>" >
                                             <button type="submit" class="btn btn-primary btn-lg btn-block"  name="enviarCodigo">PREENCHER PROXIMO DADOS.</button>
                                        </form>
                                                                          
                                                                          
                                                                          <?php
                                                                  }
                                                                  
//                                                                     

                                                                  }

                                                           ?>
                                        
                                        
                                        
                                        
                                  
                                    </div>

            <script src="/ControleEstoqueWebTCC/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/metisMenu.min.js"></script>



            <script type="text/javascript" language="javascript" src="/ControleEstoqueWebTCC/jquery/jquery.js"></script>
            <script type="text/javascript" language="javascript" src="/ControleEstoqueWebTCC/jquery/jquery.dataTables.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/sb-admin-2.js"></script>

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
           



    


    </body>

</html>
<?php
}else{
    
    header("location: login.php");
    
}
?>
