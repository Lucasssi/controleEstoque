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
            <meta http-equiv="Content-Language" content="pt-br">

            <title> GERENCIAR FUNCIONARIOS - CONTROLE DE ESTOQUE </title>

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
                                <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="col-lg-12" >
<!--                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                                        <li class="sidebar-search">
                                                            <div class="input-group custom-search-form">
                                                                <input type="text" class="form-control" placeholder="Pesquisas">
                                                                <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                            </div>
                                                             /input-group 
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                                        </li>
                                <li>
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
                                </li>


                            </ul>
                        </div>-->
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
                <?php
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/FuncionarioAlmox.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoAlmoxarifado.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoFuncionario.php';
                require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoAlmoxarifadoFuncionario.php';
                
                 
              
                if (isset($_SESSION['FuncionarioS']))
                {
                    
                }
                else
                {
                    $_SESSION['FuncionarioS'] = 0;
                }
                
                
               


                if (isset($_GET['adicionar'])) {
                   // echo '<h1>===================id->'. $_GET['id'].'=============idFunci->'.$_SESSION['FuncionarioS'].'=====================</h1>';
                    
                  $VeridicarAlmox = DaoAlmoxarifadoFuncionario::getVerificarEntrada($_SESSION['FuncionarioS'], $_GET['id']);
                  
                 if($VeridicarAlmox == $_GET['id'])
                  {
                      
                  }
                 else
                  {
                      DaoAlmoxarifadoFuncionario::inserir($_SESSION['FuncionarioS'], $_GET['id']);
                  }
                    

                    
                }

                if (isset($_GET['Excluir'])) {
                    DaoAlmoxarifadoFuncionario::excluir($_GET['id']);
                }
                
                if (isset($_GET['FuncionarioS'])) {
                    
                  $_SESSION['FuncionarioS'] =  $_GET['id'];
                  $_SESSION['FuncionarioSNome'] =  $_GET['nome'];
                  
                  
                 // echo '<h1>================================='.$_SESSION['FuncionarioS'].'======================================</h1>';
                }
                
                
                ?>
                <div  class="col-lg-12">
<!--                    <div class="row">-->
                        <!--<div class="col-lg-12">-->
                            <h2 class="page-header">RELACIONAR FUNCIONARIO A ALMOXARIGADO</h2>

                        <!--</div>-->
                        <!-- /.col-lg-12 -->
<!--                    </div>-->

                    <div class="well">

<!--                        <p>NOME: <?php //echo $_SESSION['nome']; ?></p>
                        <p>FUNÇÃO: <?php// echo $_SESSION['funcao']; ?></p>
                        <p>TIPO: <?php //echo $_SESSION['tipo']; ?></p>-->
<!--                        <p>ID:   <?php// echo $_SESSION['id_funcionario']; ?></p>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="">ADICIONAR DEPARTAMENTO</a>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="">RELATORIOS</a>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="">FAZER PEDIDO</a>-->
                       
                        <?php
                         if( $_SESSION['FuncionarioS'] > 0){
                        ?>
                        <h1 class="btn btn-default btn-lg btn-block" target="_blank">SELECIONADO: <?php echo $_SESSION['FuncionarioSNome'];?></h1>
                        
                        <?php
                         }else{
                        ?>  
                       
                       <h1 class="btn btn-default btn-lg btn-block" target="_blank">NENHUM FUNCIONARIO SELECIONADO</h1>
                            <?php
                         }
                            ?>
                    </div>

                    <!-- /.row -->
                    <div class="row">

                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   LISTA DE FUNCIONARIOS
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                 
                                                    <th>FUNCIONARIO</th>
                                                    <th>FUNÇÃO</th>
                                                    <th>AÇÃO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    <?php
    $vFuncClientes = DaoFuncionario::getTodosAlmoxarife();

    foreach ($vFuncClientes as $FuncCli) {
        ?>
                                                    <tr>
                                                       
                                                        <td><?php echo $FuncCli->getNome(); ?></td>
                                                        <td><?php echo $FuncCli->getFuncao()->getNome(); ?></td>
                                                        <td><a href='GerenciarFuncionario.php?FuncionarioS&id=<?php echo $FuncCli->getId_funcionario();?>&nome=<?php echo $FuncCli->getNome();?>'>selecionar</a></td>
                                                    </tr>

        <?php
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
                        <!-- /.col-lg-6 -->
                        
                        <?php
                        if( $_SESSION['FuncionarioS'] > 0)
                            {
                        ?>

                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    ALMOXARIFADOS RELACIONADOS
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">

    <?php
    $Vdf = DaoAlmoxarifadoFuncionario::getAlmoxUsuario($_SESSION['FuncionarioS']);
  //  var_dump($Vdf);
    ?>


                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>

                                                    <th>CODIGO</th>
                                                    <th>Almozxarifado</th>
                                                    <th>Excluir</th>

                                                </tr>
                                            </thead>
                                            <tbody>


    <?php
    foreach ($Vdf as $Vdff) {
        echo '<tr>';
        echo '<td>' . $Vdff->getAlmoxarifado()->getId_almox() . '</td>';
        echo '<td>' . $Vdff->getAlmoxarifado()->getNome() . '</td>';
        echo "<td><a  href='GerenciarFuncionario.php?Excluir&id=" . $Vdff->getId_Func_Almox() . "'>Excluir</a></td>";
        echo '</tr>';
    }
    ?>

                                                </tr

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        
                        <?php
                            }
                        ?>
                    </div>

    <?php
    
     if( $_SESSION['FuncionarioS'] > 0){
    $vAlmoxarifado2 = DaoAlmoxarifado::getTodos();
    echo '  <div class="panel panel-default">';
    echo ' <div class="panel-heading">
                                   LISTA DE ALMOXARIFADO
                                    </div>';
    echo '<div class="panel-body">';
    echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-DEPARTAMENTO">';
    echo ' <thead>';
    echo '<tr>';
    echo '<th>Codigo</th>'
    . '<th>Nome</th>'
    . '<th>Ações</th>';
    echo '</tr>';
    echo ' </thead>';
    echo '<tbody>';
    foreach ($vAlmoxarifado2 as $Almox2) {

        echo '<tr>';
        echo "<td>" . $Almox2->getId_almox() . "</td>";
        echo "<td>" . $Almox2->getNome() . "</td>";
        echo "<td>";
        echo "<a href='GerenciarFuncionario.php?adicionar&id=" . $Almox2->getId_almox() . "'> ADICIONAR </a>";
        echo "</td>";
        echo '</tr>';
    }
    echo '</tbody>';


    echo '</table>';
    
    
    echo '</div>';
    echo '</div>';
    
    
}
    ?>





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
            <script src="../css/metisMenu/metisMenu.min.js"></script>

            <!-- DataTables JavaScript -->
        <!--    <script src="../css/datatables/*"></script>
            <script src="../css/datatables-plugins/dataTables.bootstrap.min.js"></script>
            <script src="../css/datatables-responsive/dataTables.responsive.js"></script>-->

            <!-- Custom Theme JavaScript -->
            <script src="/js/sb-admin-2.js"></script>
            <script src="../css/datatables/*" ></script>

            <script>
                $(document).ready(function () {
                    $('#dataTables-DEPARTAMENTO').DataTable({
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