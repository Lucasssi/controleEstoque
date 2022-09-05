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

        <title> CADASTRO DE FUNCIONARIOS - CONTROLE DE ESTOQUE - ASSIS </title>

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
       

            <div class="navbar-default sidebar" role="navigation">

            </div>
            <!-- /.navbar-static-side -->
        </nav>


            <div class="col-lg-12">
                <div class="row">



                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE FUNCIONARIO
                            </div>
         

                            <?php
                           
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcao_U.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoFuncionario.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoFuncao_U.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

                             $func = new Funcionario();
      
        $sql = "";

        if (isset($_POST['enviar'])) {
            
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            
            $data = "".$ano."/".$mes."/".$dia."";
            
          //  var_dump($data);
            
            $func->setId_funcionario($_POST['id_func']);
            $func->setData_adm($data);
            $func->getFuncao()->setId_Funcao_U($_POST['funcao']);
            $func->setLogin($_POST['login']);
            $func->setNome($_POST['nome']);
            $func->setTipo($_POST['tipo']);
             if ($func->getId_funcionario() <= 0) 
                 {
                  $func->setSenha(md5(($_POST['senha'])));
                 }
                 else
                 {
                 
                 }
            
            
        echo "<h1>".$func->getTipo()."</h1>";

          
         
            

            if ($func->getId_funcionario() <= 0) {
                $retorno = DaoFuncionario::inserir($func);
            } else {
                $retorno = DaoFuncionario::alterar($func);
            }

            $func->setId_funcionario(0);
            $func->setData_adm(NULL);
            $func->setNome("");
            $func->getFuncao()->setId_Funcao_U(13);
            $func->setLogin("");
            $func->setSenha("");
            
        }
        if (isset($_GET['op'])) {
            $operacao = $_GET['op'];
            if ($operacao == "alterar") {
                $func = DaoFuncionario::getFuncionarioID($_GET['id']);
                $ano = substr($func->getData_adm(), 0, 4 );    // retorna "f"
                $mes = substr($func->getData_adm(), 5, 2 );    // retorna "f"
                $dia = substr($func->getData_adm(), 8, 2 );    // retorna "f"
                
//                var_dump($func->getData_adm());
//                
//                var_dump($ano);
//                var_dump($mes);
//                var_dump($dia);
                
                
            }
        }
                            
                            
                            
                            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadFuncionario.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">

                                                    <!--                                                    teste-->
<?php
if (isset($_SESSION['NomeExistente'])) {
    ?>
                                                        <div class="panel-body">
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                A CIDADE <?php echo $_SESSION['NomeExistente']; ?> JA FOI CRIADA.
                                                            </div>
                                                        </div>

    <?php
    unset($_SESSION['NomeExistente']);
}
?>

                                                    <!--                                                    teste-->



                                                    <label>NOME:</label>
                                                    <input class="form-control" value="<?php echo $func->getId_funcionario(); ?>" type ="hidden" name="id_func" >
                                                    <input class="form-control" value="<?php echo $func->getNome(); ?>" type ="text" name="nome">
                                                    <!--<p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>-->
                                                    <label>FUNÇÃO:</label>
                                                    
                                                        <select name="funcao" class="form-control">
                                                        <?php
                                                        $vFuncaoU = DaoFuncao_U::getTodos();

                                                        foreach ($vFuncaoU as $funcc) {
                                                            if ($funcc->getId_Funcao_U() == $func->getFuncao()->getId_Funcao_U()) {
                                                                echo'<option value="' . $funcc->getId_Funcao_U() . '" selected=true>' . $funcc->getNome() . '</option>';
                                                            } else {
                                                                echo'<option value="' . $funcc->getId_Funcao_U() . '">' . $funcc->getNome() . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                       </select> 
                                                    <label>TIPO:</label>
                                                    
                                                        <select name="tipo" class="form-control">
                                                        <?php
                                                                                                            
                                                           
                                                            
                                                            if ($func->getTipo() == 'Cliente') {
                                                                echo'<option value="Cliente">CLIENTE</option>';
                                                                echo'<option value="Administrador">ADMINISTRADOR</option>';
                                                                echo'<option value="almoxarife">ALMOXARIFADO</option>';
                                                            }
                                                            
                                                            if ($func->getTipo() == 'Administrador') {
                                                                echo'<option value="Administrador" selected=true>ADMINISTRADOR</option>';
                                                                echo'<option value="almoxarife">ALMOXARIFADO</option>';
                                                                echo'<option value="Cliente">CLIENTE</option>'; 
                                                            } 
                                                            
                                                             if ($func->getTipo() == 'almoxarife') {
                                                                echo'<option value="almoxarife">ALMOXARIFADO</option>';
                                                                echo'<option value="Cliente">CLIENTE</option>';   
                                                                echo'<option value="Administrador">ADMINISTRADOR</option>';  
                                                            }
                                                            else
                                                            {
                                                                echo'<option value="almoxarife" selected="true">ALMOXARIFADO</option>';
                                                                echo'<option value="Cliente">CLIENTE</option>';   
                                                                echo'<option value="Administrador">ADMINISTRADOR</option>';   
                                                            } 
                                                            
                                                          
                                                        
                                                        ?>
                                                       </select> 
                                                    
                                                    
                                                    
                                                
                                                    <!--<p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>-->
                                                    <label>LOGIN:</label>
                                                    <input class="form-control" value="<?php echo $func->getLogin();; ?>" type ="text" name="login">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                   
                                                    <?php
                                                    if (isset($_GET['op'])) {
                                                        $operacao = $_GET['op'];
                                                         if ($operacao == "alterar") {
                                                    ?>
                                                     <fieldset disabled>
                                                    <label>SENHA:</label>
                                                    <input class="form-control" id="disabledInput" value="" type ="text" name="senha">
                                                    <!--<p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>-->
<!--                                                    <p class="help-block"><?php //var_dump($departamento)   ?></p>-->
                                                     </fieldset>
                                                    <?php
                                                    
                                                    
                                                    
                                                         }
                                                    
                                                       }else{
    
    
                                                     ?>
        
                                                   <label>SENHA:</label>
                                                   <input class="form-control" value="<?php echo $func->getSenha(); ?>" type ="password" name="senha">
                                                    <!--<p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>-->
                                                    <?php
                                                       }
                                                    ?>
                                                    
                                                    
                                                    
                                                     <div>
<!--                            <div class="form-group">-->
                              
                                    <label>DATA ADMISSÃO:</label>
<!--                                <div class="col-md-3">-->
                                    <?php
                                     if (isset($_GET['op'])) {
                                         $operacao = $_GET['op'];
                                         if ($operacao == "alterar") {
                                    ?>
                                    <input class="form-control" width="2" type="text" name="dia" size="2" maxlength="2" value="<?php echo $dia; ?>"> 
                                     <p class="help-block">DIA 1 -30.</p>
                                    <input class="form-control" width="2" type="text" name="mes" size="2" maxlength="2" value="<?php echo $mes; ?>">
                                     <p class="help-block">MÊS 1 - 12.</p>
                                    <input class="form-control" width="4" type="text" name="ano" size="4" maxlength="4" value="<?php echo $ano; ?>">
                                     <p class="help-block">ANO 1900 > ....</p>
                                    <?php
                                        }else{
                                            ?>
                                     <input class="form-control" width="2" type="text" name="dia" size="2" maxlength="2" value="">
                                    <p class="help-block">DIA 1 -30.</p>
                                    <input class="form-control" width="2" type="text" name="mes" size="2" maxlength="2" value="">
                                    <p class="help-block">MÊS 1 - 12.</p>                                    
                                    <input class="form-control" width="4" type="text" name="ano" size="4" maxlength="4" value="">
                                    <p class="help-block">ANO 1900 > ....</p>
                                                <?php
                                        }
                                     
                                     }  else {  ?>
                                          
                                    <input class="form-control" width="2" type="text" name="dia" size="2" maxlength="2" value="">
                                    <p class="help-block">DIA 1 -30.</p>
                                    <input class="form-control" width="2" type="text" name="mes" size="2" maxlength="2" value="">
                                    <p class="help-block">MÊS 1 - 12.</p>                                    
                                    <input class="form-control" width="4" type="text" name="ano" size="4" maxlength="4" value="">
                                    <p class="help-block">ANO 1900 </p>
                                    
                                    <?php
                                     }
                                    ?>
                                    
                                   
                                  <button type="submit" class="btn btn-primary btn-lg btn-block"   name="enviar"  >SALVAR</button>
                                  </form>
                        </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </div>


<?php   




if (isset($_GET['op'])) 
             {
              $operacao = $_GET['op'];
                  if ($operacao == "remover") 
                  {

                 DaoFuncionario::excluir($_GET['id']);

                
                  }
                  
              } 
                  
                 ?>
                                 
                             
                           
                  

                                               
                           

                                              
<!--                                         </form>-->
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

                                                            
                                                         
                                                            
                             
                                                        </div>
                                                                                          
                                                            
                                                     
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            
                                            
                                            

<?php

?>
                                                                

                                                                    <?php
                                                            //    } else {
                                                                    ?>

                                                                  

                                                                    <?php
                                                         
                                                                ?>
                                                                
                                                                <?php
                                                            //}
                                                            ?>
                                                        </div>
                                                                                             
                                                     
                                                    </div>
                                                    
                                                </div>
                                              
                                            </div>









                                        </form>

                                      
                                    </div>
                                   
                               

<!--                                <br>-->
                               

              
 
                   



                                <?PHP
// REMOVER AQUI ------------------------------------------------------


                              $vfunc = DaoFuncionario::getTodos();
                                echo '  <div class="panel panel-default">';
                                echo ' <div class="panel-heading">
                                   LISTA DE FUNCIONARIOS
                                    </div>';
                                echo '<div class="panel-body">';
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-FUNCIONARIOS">';
                                echo ' <thead>';
                                echo '<tr>';
                                echo '<th>Tipo</th>'
                                . '<th>Nome</th>'
                                . '<th>FUNÇÃO</th>'
                                . '<th>Data Admissão</th>'
                                . '<th>Login</th>'
                                . '<th>Ações</th>';
                                echo '</tr>';
                                echo ' </thead>';
                                echo '<tbody>';
                               foreach ($vfunc as $funcionario) {

                                    echo '<tr>';
                                    echo "<td>" . $funcionario->getTipo() . "</td>";
                                    echo "<td>" . $funcionario->getNome() . "</td>";
                                    echo "<td>" . $funcionario->getFuncao()->getNome() . "</td>";
                                    echo "<td>" . $funcionario->getData_adm() . "</td>";
                                    echo "<td>" . $funcionario->getLogin() . "</td>";
                                    ?>
                                    <td>
                                    <?php
                                   // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
                                    echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadFuncionario.php?op=alterar&id=" . $funcionario->getId_funcionario() . "'> Alterar </a>&nbsp;";
                                //    echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadFuncionario.php?op=remover&id=" . $funcionario->getId_funcionario() . "'> Remover </a>";
//                                  
                                    ?>


                                        <form  action="CadCidade.php" method="post">


<!-- <input class="form-control" value="<?php //echo $Cidadee->getId_cidade(); ?>" type ="text" name="id_cidadeExcluir" >-->



    <?php
  
     ?>
                                           
    <?php // echo $Cidadee->getId_cidade(); ?>
                                            </td>

                                            </tr>

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
                    $('#dataTables-FUNCIONARIOS').DataTable({
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
}else{
    
    header("location: login.php");
    
}
?>