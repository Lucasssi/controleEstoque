<?php
session_start();
$_SESSION['login'];
if($_SESSION['login'] == "ativo"){
    
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

        <title> CADASTRO DE STATUS - CONTROLE DE ESTOQUE - ASSIS </title>

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
                                    <strong>Atualiza????es</strong>
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
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configura????es</a>
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
-->
<!--                        </li>
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
                                    <a href="Cadfuncao.php">Fun????es</a>
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
                        <li>-->
<!--                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Controle Usuarios <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="AddDepartamentoUsuario.php">Rela????o Usuario Departamento Almoxarifado</a>
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

            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Status.php';

            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoStatus.php';

            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

            $Status = new Status();
            // $vMC = DaoMaterialConsumo::getTodos();
            $sql = "";

            if (isset($_POST['enviar'])) {



                $Status->setId_status($_POST['id_status']);
                $Status->setNome($_POST['nome']);
                
                $testenome = DaoStatus::getFuncaoNome($_POST['nome']);
//                echo var_dump($testenome);
//                echo var_dump($_POST['nome']);
           
                
                


                if ($Status->getId_status() <= 0) {
                     if($testenome == $_POST['nome']){
                       
                            $_SESSION['NomeExistente'] = $testenome;

                    }else{
                         $retorno = DaoStatus::inserir($Status);
                    }
                   
                } else {
                     if($testenome == $_POST['nome']){
                       
                            $_SESSION['NomeExistente'] = $testenome;

                    } else {
                    
                        $retorno = DaoStatus::alterar($Status);
                        
                    }
                    
                }


                $Status->setId_status(0);
                $Status->setNome("");
            }

            if (isset($_GET['op'])) {
                $operacao = $_GET['op'];
                if ($operacao == "alterar") {
                    $Status = DaoStatus::getFuncao($_GET['id']);
                }
            }
            ?>

            <div class="col-lg-12">
                <div class="row">
                    <br>
                    <br>
                   
<!--                    <div class="col-lg-12">
                        <h1 class="page-header">SISTEMA ASSIS</h1>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE STATUS
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadStatusPedido.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">
<!--                                                    teste-->
                                                        <?php
                                                        if(isset($_SESSION['NomeExistente'])){
                                                            
                                                        
                                                        ?>
                                                        <div class="panel-body">
                                                        <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        O STATUS <?php echo $_SESSION['NomeExistente'];?> JA FOI CRIADA. <a href="#" class="alert-link">Alert Link</a>.
                                                        </div>
                                                        </div>

                                                        <?php
                                                        unset($_SESSION['NomeExistente']); 
                                                        }
                                                        ?>

<!--                                                    teste-->
                                                    <label>NOME</label>
                                                    <input class="form-control" value="<?php echo $Status->getId_status(); ?>" type ="hidden" name="id_status" >
                                                    <input class="form-control" value="<?php echo $Status->getNome(); ?>" type ="text" name="nome" tabindex="1">
                                                    <p class="help-block">EXEMPLO "Secretario, T??cnico Administrativo..."</p>
                                                </div>




                                                <a class="btn btn-default" data-toggle="modal" data-target="#myModal" tabindex="6">
                                                    SALVAR
                                                </a>


                                                <button type="reset" class="btn btn-default">RESET</button>

                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                            <div class="col-lg-6">
                                                <!--                                    <h1>Disabled Form States</h1>-->




                                            </div>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<?php
if (isset($_GET['op'])) {
    $operacao = $_GET['op'];
    if ($operacao == "alterar") {
        ?>
                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ALTERAR STATUS ?</h4>

                                                                    <?php
                                                                } else {
                                                                    ?>

                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA CRIAR STATUS ?</h4>     

                                                                    <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <h4 class="modal-title" id="myModalLabel">DESEJA CRIAR STATUS ?</h4>     
                                                                <?php
                                                            }
                                                            ?>







                                                        </div>
                                                        <!--                                        <div class="modal-body">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                                                </div>-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">N??O</button>
                                                            <!--                                            <button type="button" class="btn btn-primary">Save changes</button>-->
                                                            <button type="submit" class="btn btn-default"   name="enviar"  >SIM</button>
                                                        </div>
                                                        <div class="modal-footer">

                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                                        </form>
                                        <br>




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

<?PHP
if (isset($_GET['op'])) {
    $operacao = $_GET['op'];
    if ($operacao == "remover") {
        $retorno = DaoStatus::excluir($_GET['id']);
    }
}

$vStatus = DaoStatus::getTodos();
echo '  <div class="panel panel-default">';
echo ' <div class="panel-heading">
                                   LISTA DE STATUS
                                    </div>';
echo '<div class="panel-body">';
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-funcao">';
echo ' <thead>';
echo '<tr>';
echo '<th>Codigo</th>'
 . '<th>Nome</th>'
 . '<th>A????es</th>';
echo '</tr>';
echo ' </thead>';
echo '<tbody>';
foreach ($vStatus as $statuss) {

    echo '<tr>';
    echo "<td>" . $statuss->getId_status() . "</td>";
    echo "<td>" . $statuss->getNome() . "</td>";
    echo "<td><a href='CadStatusPedido.php?op=alterar&id=" . $statuss->getId_status() . "'> Alterar </a>&nbsp;";
    echo "<a href='CadStatusPedido.php?op=remover&id=" . $statuss->getId_status() . "'> Remover </a></td>";

    echo '</tr>';
}
echo '</tbody>';


echo '</table>';
echo '</div>';
echo '</div>';
?>




                                <!-- /TESTA AQUI -->
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
                            "sProcessing": "Aguarde enquanto os dados s??o carregados ...",
                            "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                            "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                            "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                            "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                            "sInfoFiltered": "",
                            "sSearch": "Procurar",
                            "oPaginate": {
                                "sFirst": "Primeiro",
                                "sPrevious": "   Anterior  ",
                                "sNext": "      Pr??ximo     ",
                                "sLast": "  ??ltimo"
                            }
                        }


                    });
                });
            </script>


    </body>

</html>

<?php
}else{
    
    header("location: login.php");
    
}
?>