<!DOCTYPE html>

<?php
session_start();
?>


<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SISTEMA ASSIS - CADASTRO DE ESTADO</title>

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
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">SISTEMA ASSIS</h1>
                    </div>
                   
          
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE CIDADE
                            </div>
                            
                              <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Estado.php';

            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEstado.php';

            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

            $estado = new Estado();
            // $vMC = DaoMaterialConsumo::getTodos();
            $sql = "";

            if (isset($_POST['enviar'])) {
                
                if($_POST['nome'] == null){
                    
                    ?>
              <div class="panel-body">
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    INFORME O CAMPO NOME E OBRIGATORIO.
                </div>
             </div>          
                        
              <?php
                   
                 
                
                 
                }
                
                



                $estado->setId_estado($_POST['id_estado']);
                $estado->setNome($_POST['nome']);


                $testenome = DaoEstado::getEstadoNome($_POST['nome']);




                if ($estado->getId_estado() <= 0) {

                    if ($testenome == $_POST['nome']) {

                        $_SESSION['NomeExistente'] = $testenome;
                    } else {
                        $retorno = DaoEstado::inserir($estado);
                    }
                } else {


                    if ($testenome == $_POST['nome']) {

                        $_SESSION['NomeExistente'] = $testenome;
                    } else {

                        $retorno = DaoEstado::alterar($estado);
                    }
                }








                $estado->setId_estado(0);
                $estado->setNome("");
            }

            if (isset($_GET['op'])) {


                $operacao = $_GET['op'];
                if ($operacao == "alterar") {
                    $estado = DaoEstado::getEstado($_GET['id']);
                    echo '<script type="text/javascript">';
                    echo 'alert("' . var_dump($departamento) . '")';

                    echo '</script>';
                }
            }
            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadEstado.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">

                                                    <!--                                                    teste-->
                                                    <?php
                                                    if (isset($_SESSION['NomeExistente'])) {
                                                        ?>
                                                        <div class="panel-body">
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                O ESTADO <?php echo $_SESSION['NomeExistente']; ?> JA FOI CRIADO.
                                                            </div>
                                                        </div>

                                                        <?php
                                                        unset($_SESSION['NomeExistente']);
                                                    }
                                                    ?>

                                                    <!--                                                    teste-->



                                                    <label>NOME</label>
                                                    <input class="form-control" value="<?php echo $estado->getId_estado(); ?>" type ="hidden" name="id_estado" >
                                                    <input class="form-control" value="<?php echo $estado->getNome(); ?>" type ="text" name="nome" tabindex="1">
                                                    <p class="help-block">EXEMPLO "Goias, Minas Gerais".</p>
<!--                                                    <p class="help-block"><?php //var_dump($departamento)  ?></p>-->
                                                </div>




                                                <a class="btn btn-default" data-toggle="modal" data-target="#myModal" tabindex="6">
                                                    SALVAR
                                                </a>


                                                <button type="submit" class="btn btn-default">RESET</button>


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
                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ALTERAR NOME DO ESTADO ?</h4>

                                                                    <?php
                                                                } else {
                                                                    ?>

                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVO ESTADO ?</h4>     

                                                                    <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVO ESTADO ?</h4>     
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
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>




                                        </form>

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
                                <?php
                                if (isset($_POST['Remover'])) {


                                  //  echo $_SESSION['id_cid'];
                                   // echo '<br>';
                                    
                                    
                                    $retorno = 0;
                                    $retorno = DaoEstado::excluir($_SESSION['id_est']);
                                  //  echo $retorno;

                                    unset($_SESSION['id_est']);

                                    if ($retorno == 1) {
                                        echo '<script type="text/javascript">';
                                        echo 'alert("Estado Excluido com sucesso!!!")';
                                        echo '</script>';
                                       
                                    } else {
                                        
                                         echo '<script type="text/javascript">';
                                        echo 'alert("Estado n??o pode ser excluido, pois est?? cadastrada em enderedo de empresa cadastrada!!!")';
                                        echo '</script>';

                            
                                    }
                                }
                                ?>


<?PHP
// REMOVER AQUI ------------------------------------------------------


$vEstado = DaoEstado::getTodos();
echo '  <div class="panel panel-default">';
echo ' <div class="panel-heading">
                                   LISTA DE ESTADOS
                                    </div>';
echo '<div class="panel-body">';
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-ESTADO">';
echo ' <thead>';
echo '<tr>';
echo '<th>Codigo</th>'
 . '<th>Nome</th>'
 . '<th>A????es</th>';
echo '</tr>';
echo ' </thead>';
echo '<tbody>';
foreach ($vEstado as $Estadoo) {

    echo '<tr>';
    echo "<td>" . $Estadoo->getId_estado() . "</td>";
    echo "<td>" . $Estadoo->getNome() . "</td>";
  


    echo "<td><a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEstado.php?op=alterar&id=" . $Estadoo->getId_estado() . "'>Alterar</a>";
   
    $estadoExcluir = $Estadoo->getId_estado();
    $_SESSION['id_est'] = $estadoExcluir;
    
    ?>
                                 

                                <form role="form" action="CadEstado.php" method="post">

                                        <div class="modal fade" id="Remover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


                                                        <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR ESTADO ?</h4>     


                                                    </div>
                                               
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">N??O</button>
                                                        
                                                        <button type="submit"   class="btn btn-primary btn-sm" name="Remover"  >SIM</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                     



    <?php

    echo ' <a data-toggle="modal" data-toggle="modal" data-target="#Remover" type="button" class="btn btn-outline btn-danger">Excluir</a></tr>';
    ?>

                                    </form>
                                        <?php

                                       
                                    }
                                    echo '</tbody>';


                                    echo '</table>';
                                    echo '</div>';
                                    echo '</div>';
                                    ?>

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
                    $('#dataTables-ESTADO').DataTable({
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
                                "sPrevious": "Anterior",
                                "sNext": "Pr??ximo",
                                "sLast": "??ltimo"
                            }
                        }


                    });
                });
            </script>


    </body>

</html>

