<!DOCTYPE html>
<?php


session_start();
$_SESSION['login'];
if($_SESSION['login'] == "ativo"){
    
         if ( $_SESSION['TipoCliente'] == "Administrador")
               {
                    header("location: PPAD.php");
               } 
               else if ( $_SESSION['TipoCliente'] == "almoxarife")
               {
                   header("location: PPAL.php");
               } else
                   {
                     header("location: PPCL.php");
                   }
    


?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina Principal - Controle de Estoque</title>

    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/dataTables.responsive.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--     HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries 
     WARNING: Respond.js doesn't work if you view the page via file:// 
    [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0" >
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
            <!-- /.navbar-static-side -->
        </nav>
<?php
$_SESSION['Nome_Curso'] = NULL;

?>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-5">
<!--                    <h1 class="page-header">MENU</h1>-->
                </div>
                <div class="col-lg-2">
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-lg-4">
<!--                    <h1 class="page-header">MENU</h1>-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <a href="CadFuncionario.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE FUNCIONARIO 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                            <img src="img/Cadastro-de-Clientes1.png" alt="Minha Figura" height="110" width="110">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="CadFuncao.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE FUNÇÃO
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/essential-skill-for-your-wordpress-business-shutterstock_285271100.png" alt="Minha Figura" height="109" width="270">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="CadStatusPedido.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE STATUS
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/status2.png" alt="Minha Figura" height="110" width="110">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <a href="CadAlmoxarifado.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE ALMOXARIFADO 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/almox-2.jpg" alt="Minha Figura" height="110" width="200">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                     <a href="RealizarPedido.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           REALIZAR PEDIDOS 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/PEDIDO1.png" alt="Minha Figura" height="110" width="110">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="home.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           MEUS PEDIDOS 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/PEDIDOS3.png" alt="Minha Figura" height="110" width="170">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <a href="CadEmpresa.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE EMPRESA 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/EMPRESA01.png" alt="Minha Figura" height="110" width="200">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="homeAlmoxarife.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           ATENDER PEDIDOS
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/AtenderPedido3.png" alt="Minha Figura" height="110" width="175">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="GerenciarFuncionario.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           GERENCIAR FUNCIONARIOS 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/GerenciarFuncionarios.png" alt="Minha Figura" height="110" width="200">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <a href="GerenciarClientes.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           GERENCIAR CLIENTES
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/GerenciarClientes.png" alt="Minha Figura" height="110" width="200">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                     <a href="CadCurso.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE SETORES OU CURSOS 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/DEPARTAMENTOS1.jpg" alt="Minha Figura" height="110" width="175">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="Estoque.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                          ESTOQUE
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/armazenamente.jpg" alt="Minha Figura" height="110" width="250">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <a href="CadProduto1.php">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CADASTRO DE PRODUTOS 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/PRODUTOS2.png" alt="Minha Figura" height="110" width="200">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                     <a href="#">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           CONSUMO
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/CONSUMO.png" alt="Minha Figura" height="110" width="175">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <a href="#">
                    <div class="panel panel-primary">
                       
                        <div class="panel-heading">
                           TRANSFERENCIA ENTRE ALMOXARIFADOS 
                        </div>
                        <div class="panel-body">
                            <center>
                            <figure>
                                <img src="img/TRANFERENCIA1.png" alt="Minha Figura" height="90" width="200">	
                         
                            </figure>
                            </center>
                        </div>
<!--                        <div class="panel-footer">
                            Panel Footer
                        </div>-->
                      
                    </div>
                     </a>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
          
            <!-- /.row -->
          
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
          
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
            <!-- jQuery -->
            <script src="jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="js/metisMenu.min.js"></script>



            <script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
            <script type="text/javascript" language="javascript" src="jquery/jquery.dataTables.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="js/sb-admin-2.js"></script>

</body>

</html>
<?php
}else{
    
    header("location: login.php");
     
    
}

  if(isset($_GET['GerarPedido']))
    {
      //  header("location: ItemMaterialConsumo.php");
        $_SESSION['id_pedido'] = DaoPedido::GerarID(0);
        DaoPedido::inserir($_SESSION['id_pedido'] , $_SESSION['id_funcionario'], $_SESSION['id_Curso']);
        DaoPedido::AlimentarGeradorID();
        
         
        
        
    }

?>