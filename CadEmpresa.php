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

        <title> CADASTR DE EMPRESA - CONTROLE DE ESTOQUE</title>

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
                <a class="navbar-brand" href="CadProduto1.php">VOLTAR AO CADASTRO DE PRODUTO</a>
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

                    
                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
<!--                        <h1 class="page-header">SISTEMA ASSIS</h1>-->
                    </div>


                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE EMPRESA
                            </div>
         

                            <?php
                            
                            
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEmpresa.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

                            $empresa = new Empresa();
                            // $vMC = DaoMaterialConsumo::getTodos();
                            $sql = "";

                            if (isset($_POST['enviar'])) {

                                if ($_POST['nome'] == null) {
                                    ?>
                                    <div class="panel-body">
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            INFORME O CAMPO NOME E OBRIGATORIO.
                                        </div>
                                    </div>          

                                    <?php
                                }





                                $empresa->setId_empresa($_POST['id_empresa']);
                                $empresa->setNome($_POST['nome']);
                                $empresa->setNome_fantasia($_POST['nomeFantasia']);
                                $empresa->setCmpj($_POST['cmpj']);
                                $empresa->setEmail($_POST['email']);
                                $empresa->setSeguimento($_POST['seguimento']);
                                $empresa->setSite($_POST['site']);
                                $empresa->setTelefone($_POST['telefone']);
                                $empresa->setEstado($_POST['estado']);
                                $empresa->setCidade($_POST['cidade']);
                                $empresa->setBairro($_POST['bairro']);
                                $empresa->setRua($_POST['rua']);
                                $empresa->setNumero($_POST['numero']);
                                
                                var_dump($empresa);


                                $testenome = DaoEmpresa::getEmpresaNome($_POST['nome']);




                                if ($empresa->getId_empresa() <= 0) {

                                    if ($testenome == $_POST['nome']) {

                                        $_SESSION['NomeExistente'] = $testenome;
                                    } else {
                                        $retorno = DaoEmpresa::inserir($empresa);
                                    }
                                } else {


                                    if ($testenome == $_POST['nome']) {

                                        $_SESSION['NomeExistente'] = $testenome;
                                    } else {

                                        $retorno = DaoEmpresa::alterar($empresa);
                                        unset( $_SESSION['alterar']);
                                    }
                                }



                                $empresa->setId_empresa(0);
                                $empresa->setNome("");
                                $empresa->setNome_fantasia("");
                                $empresa->setCmpj("");
                                $empresa->setEmail("");
                                $empresa->setSeguimento("");
                                $empresa->setSite("");
                                $empresa->setTelefone("");
                                
                                unset($_SESSION['Excluir']);
                                unset($_SESSION['salvar']);
                            }

                            if (isset($_GET['op'])) {


                                $operacao = $_GET['op'];
                                if ($operacao == "alterar") {
                                    $_SESSION['alterar'] = 'alterar';
                                    unset($_SESSION['Excluir']);
                                    unset($_SESSION['salvar']);
                                   
                                    $empresa = DaoEmpresa::getEmpresa($_GET['id']);
                                    echo '<script type="text/javascript">';
                                    echo 'alert("' . var_dump($departamento) . '")';

                                    echo '</script>';
                                }
                            }
                            
                            
                             if (isset($_GET['op'])) {
                             
                                $operacao = $_GET['op'];
                                if ($operacao == "Excluir") {
                                    $_SESSION['Excluir'] = "Excluir";
                                    unset($_SESSION['salvar']);
                                    $empresa = DaoEmpresa::getEmpresa($_GET['id']);
                                   
                                }
                            }
                            
                             if (isset($_POST['Excluir'])) 
                            {
                                 
                                $retorno = 0;
                                $retorno = DaoEmpresa::excluir($_POST['id_empresa']);

                            }
                            
                            
                            
                             if (isset($_POST['RESET'])) {
                                 
                                    $empresa->setId_empresa(0);
                                    $empresa->setNome("");
                                    $empresa->setNome_fantasia("");
                                    $empresa->setCmpj("");
                                    $empresa->setEmail("");
                                    $empresa->setSeguimento("");
                                    $empresa->setSite("");
                                    $empresa->setTelefone("");
                                  
                                    $_SESSION['Excluir'] = "";
                                  
                                    unset($_SESSION['Excluir']);
                                
                                
                             }
                            
                            
                            
                            
                            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadEmpresa.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">

                                                    <!--                                                    teste-->


                                                    <!--                                                    teste-->



                                                    <label>NOME</label>
                                                    <input class="form-control" value="<?php echo $empresa->getId_empresa(); ?>" type ="hidden" name="id_empresa" >
                                                    <input class="form-control" value="<?php echo $empresa->getNome(); ?>" type ="text" name="nome">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>NOME FANTASIA</label>
                                                    <input class="form-control" value="<?php echo $empresa->getNome_fantasia(); ?>" type ="text" name="nomeFantasia">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>CMPJ</label>
                                                    <input class="form-control" value="<?php echo $empresa->getCmpj(); ?>" type ="text" name="cmpj">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>SEGUIMENTO</label>
                                                    <input class="form-control" value="<?php echo $empresa->getSeguimento(); ?>" type ="text" name="seguimento">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>TELEFONE</label>
                                                    <input class="form-control" value="<?php echo $empresa->getTelefone(); ?>" type ="text" name="telefone">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>SITE</label>
                                                    <input class="form-control" value="<?php echo $empresa->getSite(); ?>" type ="text" name="site">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>EMAIL</label>
                                                    <input class="form-control" value="<?php echo $empresa->getEmail(); ?>" type ="text" name="email">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>Estado</label>
                                                    <input class="form-control" value="<?php echo $empresa->getEstado(); ?>" type ="text" name="estado">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>Cidade</label>
                                                    <input class="form-control" value="<?php echo $empresa->getCidade(); ?>" type ="text" name="cidade">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>Bairro</label>
                                                    <input class="form-control" value="<?php echo $empresa->getBairro(); ?>" type ="text" name="bairro">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>Rua</label>
                                                    <input class="form-control" value="<?php echo $empresa->getRua(); ?>" type ="text" name="rua">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>Numero</label>
                                                    <input class="form-control" value="<?php echo $empresa->getNumero(); ?>" type ="text" name="numero">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
<!--                                                    <p class="help-block"><?php //var_dump($departamento)   ?></p>-->
                                                </div>


 
               

                                               
                           

                                                <button type="submit" class="btn btn-default"  name="enviar">SALVAR</button>

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
//if (isset($_GET['op'])) {
//    
//    
//         $operacao = $_GET['op'];
//         if ($operacao == "Excluir")
//             {                  
//           ?>
<!--                    <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                       
                       decisao = confirm("Deseja Excluir Cidade ?");
                     
                     if (decisao)
                     {
                         //decisao = "1234567890123456789012345678901234567890";
                         decisao = "1";
                        
                   
                       alert ("Cidade será Excluida !!!  ");
                         
                     
                     } 
                     else 
                     {
                        //decisao = "0234567890123456789012345678901234567890";
                        decisao = "0";
                       
                       
                        alert ("Operação cancelada !!!  ");
                        
                     }
                     
                   </SCRIPT>-->
                   



                                <?PHP
// REMOVER AQUI ------------------------------------------------------


                                $vEmpresa = DaoEmpresa::getTodos();
                                echo '  <div class="panel panel-default">';
                                echo ' <div class="panel-heading">
                                   LISTA DE EMPRESAS
                                    </div>';
                                echo '<div class="panel-body">';
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-EMPRESA">';
                                echo ' <thead>';
                                echo '<tr>';
                                echo ''
                                . '<th>NOME</th>'
                                . '<th>SEGUIMENTO</th>'
                                . '<th>TELEFONE</th>'
                                . '<th>VISIALIZAR</th>'
                                . '<th>AÇÕES</th>';
                                echo '</tr>';
                                echo ' </thead>';
                                echo '<tbody>';
                                foreach ($vEmpresa as $Empresaa) {

                                    echo '<tr>';
                                    //echo "<td>" . $Empresaa->getId_empresa()."</td>";
                                    echo "<td>" . $Empresaa->getNome() . "</td>";
                                   // echo "<td>" . $Empresaa->getNome_fantasia() . "</td>";
                                   // echo "<td>" . $Empresaa->getCmpj() . "</td>";
                                    echo "<td>" . $Empresaa->getSeguimento() . "</td>";
                                    echo "<td>" . $Empresaa->getTelefone() . "</td>";
                                    echo '  <form  action="CadEndereco2.php" method="post">';
                                    echo ' <input class="form-control" value= '. $Empresaa->getId_empresa() .'  type ="hidden" name="id_empresa" >';
                                    //echo "<td><a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEndereco2.php?Endereco=" . $Empresaa->getId_empresa() . "'>DADOS DA EMPRESA</a></td>";
                                    echo "<td><button type='submit' class='btn btn-outline btn-warning'   name='Endereco'  >DADOS EMPRESA</button></td>";
                                     echo '  </form>';
                                  //  echo "<td><a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEndereco2.php?Endereco=" . $Empresaa->getId_empresa() . "'>ENDEREÇO</a></td>";
                                    //echo "<td>" . $Empresaa->getSite() . "</td>";
                                   // echo "<td>" . $Empresaa->getEmail() . "</td>";
                                    ?>
                                    <td>
                                    <?php
                                  // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEmpresa.php?op=alterar&id=" . $Empresaa->getId_empresa() . "'>Alterar</a>";

//                                  
                                    ?>


                                        <form  action="CadEmpresa.php" method="post">
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

<!-- <input class="form-control" value="<?php //echo $Cidadee->getId_cidade(); ?>" type ="text" name="id_cidadeExcluir" >-->



    <?php
     echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEmpresa.php?op=alterar&id=" . $Empresaa->getId_empresa() . "'>Alterar</a>";
     echo "<a type='button' class='btn btn-outline btn-danger'  data-toggle='Excluir' href='CadEmpresa.php?op=Excluir&id=" . $Empresaa->getId_empresa() . "'>Excluir</a>";
      // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
  
     ?>
                                           
    <?php echo $Empresaa->getId_empresa(); ?>
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
                    $('#dataTables-EMPRESA').DataTable({
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