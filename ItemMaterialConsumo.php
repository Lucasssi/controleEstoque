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

                        
                             <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Pedidos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="RealizarPedido.php">Realizar Pedido</a>
                                </li>
<!--                                <li>
                                    <a href="">Consumo</a>
                                </li>-->
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
                                CADASTRO DE CURSOS E DEPARTAMENTOS.....
                            </div>
                            
                        </div>
         

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
    
    if(isset($_POST['InserirAlmox']))
        {
        
           $_SESSION['id_almox3'] = $_POST['id_almox'];
        
        DaoPedido::InserirAlmoxarifado($_POST['id_almox'], $_SESSION['id_pedido']);
         
        }
                            
                            
                  
                  
                
     



       
      if (isset($_POST['Alterar2']))
      {

      DaoItemSelecionado::alterar($_POST['Item_selecionado'], $_POST['qtd']);
      
      
       $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorItem($_SESSION['id_pedido']);
         
                //var_dump($vItemSelecionado);
            //DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
       
            echo '    <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE CURSOS E DEPARTAMENTOS
                            </div>';
            
                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Codigo</th>';
                echo '<th>Produto</th>';
                echo '<th>Quantidade</th>';
                echo '<th>Ações</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                foreach ( $vItemSelecionado as $itemm) {
                echo '<tr>';
                echo '<td>'.$itemm->getProduto()->getCodigo().'</td>';
                echo '<td>'.$itemm->getProduto()->getNome().'</td>';
                echo '<td>'.$itemm->getQtd().'</td>';
                echo '<td>';
                echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='ItemMaterialConsumo.php?op=alterarSelecao&id=" . $itemm->getItem_selecionado() . "'>Alterar</a>   ";
                echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='ItemMaterialConsumo.php?op=excluir&id=" . $itemm->getProduto()->getCodigo() . "'>Excluir</a>";
                echo '</td>';
                echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';

      
      }
    
    
    
    
          if (isset($_GET['op'])) {

                $operacao = $_GET['op'];
                if ($operacao == "alterarSelecao") {
                    $Itemalterar = DaoItemSelecionado::getItemSelecionadoPorItem($_GET['id']);
                 //   var_dump($Itemalterar);
                    
                    $teste = $_GET['id'];
                    
               //     var_dump($teste);
                    
                    
                       echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-">';
                       echo '<thead>';
                       echo '<tr>';
                       echo '<th>Produto</th>';
                       echo '<th>Quantidade</th>';
                       echo '<th>Ação</th>';
                       echo '</thead>';
                       echo '<tbody>';
                       echo '<tr>';
                       echo ' <form role="form" action="ItemMaterialConsumo.php" method="post">';
                       echo '<input class="form-control" value="'.$Itemalterar->getItem_selecionado().'" type ="hidden" name="Item_selecionado" >';
                       echo '<td>'.$Itemalterar->getProduto()->getId_MC().'</td>';
                       echo '<td><input class="form-control" value="'.$Itemalterar->getQtd().'" type ="number" name="qtd" tabindex="1"></td>';
                       echo '<td>';
                       echo ' <button type="submit" class="btn btn-default"   name="Alterar2"  >Alterar</button>';
                       echo '</td>';
                       echo ' </form>';
                       echo '</tr>';
                       echo '</tbody>';
                       echo '</table>';
                    
                }
            }
    
        
    
    
    
    
        if (isset($_POST['Adicionar'])){
            
             $_SESSION['id_Curso'];
             $_SESSION['id_pedido'];
             $_SESSION['id_funcionario'];
                
                
                DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
                //echo $_SESSION['id_pedido'];
                $vItemSelecionado = DaoItemSelecionado::getItemSelecionadoPorPedido($_SESSION['id_pedido']);
         
                //var_dump($vItemSelecionado);
            //DaoItemSelecionado::inserir($_SESSION['id_pedido'], $_POST['id_produto'], $_POST['qtd']);
            
                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Codigo</th>';
                echo '<th>Produto</th>';
                echo '<th>Quantidade</th>';
                echo '<th>Ações</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                foreach ( $vItemSelecionado as $itemm) {
                echo '<tr>';
                echo '<td>'.$itemm->getProduto()->getCodigo().'</td>';
                echo '<td>'.$itemm->getProduto()->getNome().'</td>';
                echo '<td>'.$itemm->getQtd().'</td>';
                echo '<td>';
                echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='ItemMaterialConsumo.php?op=alterarSelecao&id=" . $itemm->getItem_selecionado() . "'>Alterar</a>   ";
                echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='ItemMaterialConsumo.php?op=excluir&id=" . $itemm->getProduto()->getCodigo() . "'>Excluir</a>";
                echo '</td>';
                echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                
                 
            
            
        }
        
        
                if (isset($_GET['Adicionar'])){
                                                      
                                                       $item = new Item();
                                                       $item->setId($_GET['idproduto']);
                                                       $item->setNome($_GET['produto']);
                                                     
                                                       
                                                       if (!isset($_SESSION['Vitem'])){
                                                           $_SESSION['Vitem'] =NULL;
                                                       }
                                                       
                                                       $Vitem = unserialize( $_SESSION['Vitem']);
                                                       
                                                       $Vitem[] = $item;
                                                       $_SESSION['Vitem'] = serialize($Vitem);
                                                       
                                                       
                                                    
                                                               
                                                               
                                                               
                                                 
                                                        
                                                      
                                                        
                                                        echo '<br>';
                                                        
                                                     //   print_r( $_SESSION['Vitem']);
                                                          echo '  <div class="panel panel-default">';
                                                          echo ' <div class="panel-heading">
                                                                LISTA DE PRODUTOS
                                                                </div>';
                                                        echo '<div class="panel-body">';
                                                        
                                                        
                                                        
                                                        
                                                                        
                                                        $MCselecionado = DaoMaterialConsumo::getMaterialConsumo($_GET['idproduto']);                                                      ;
                                                        
                                                      
                                                        
                                                     
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-ITENSSELECIONADOS">';
                                                        echo ' <thead>';
                                                        echo '<tr>';
                                                        echo '<th colspan="7">PRODUTOS SELECIONADOS</th>';
                                                        echo '</tr>';
                                                        echo '<tr>';
                                                        echo '<th>Codigo</th><th>Produto</th><th>Quantidade</th>';
                                                        echo '</tr>';
                                                        echo ' </thead>';

                                                             echo ' <tbody>'; 
                                                          echo '<form action="ItemMaterialConsumo.php" method="GET">';
                                                             $vItem = unserialize($_SESSION['Vitem']);
                                                             $i=0;
                                                         foreach ($vItem  as $itemm) {
                                                           
                                                             echo '<tr>';
                                                             echo "<td align='left'width='200'><input type='text' name='cod".$i."' value = ".$itemm->getId()." readonly='readonly' /></td>";
                                                             echo "<td align='left'width='200'>".$itemm->getNome()."</td>";
                                                             echo "<td align='left'><input type='number' name='qtd".$i."' value = ".$itemm->getQtd()." /></td>";
                                                             echo '</tr>';
                                                            
                                                              //  $item2 = new Item();
                                                              //  $item2->setQtd($_POST['qtd']);
                                                          //  echo '<br>';      print_r($i);  echo '<br>';
                                                            //    echo '+'; var_dump($i); echo '+';  echo '<br>';
                                                                
                                                                
                                                                
                                                             
                                                                    if (!isset($_SESSION['Vitem2'])){
                                                                        $_SESSION['Vitem2'] =NULL;
                                                                    }

                                                                    $Vitem2 = unserialize( $_SESSION['Vitem2']);

                                                                    $Vitem2[] = $itemm;
                                                                    $_SESSION['Vitem2'] = serialize($Vitem2);

                                                             // echo '</form>';
                                                       
                                                                    $i++;
                                                         $_SESSION['i'] = serialize($i);
                                                       }
                                                             echo ' </tbody>';

                                                        echo '</table>';
                                                   
                                                        echo"</center>";
                                                        
                                                        //teste
                                                        
                                                       // echo'<form action="ItemMaterialConsumo.php" method="post">';
                                                       // echo'<div class="col-md-2" align="left">';
                                                       echo '   <div class="row">
                                                                    <div class="col-md-12"> &nbsp; </div>
                                                                </div>
                                                               <div class="row">
                                                                    <div class="col-md-12"><label> CURSOS OU DEPARTAMENTOS </label> </div>
                                                                </div>
                    
                                                        <div class="row">';
                                                   
                                                         echo'<div class="col-md-8">';
                                                        
                                                     
                                                        echo'<select name="cursoo"  class="form-control">';
                                                    
                                                        $vCurso = DaoCurso::getTodos();

                                                        foreach ($vCurso as $cursooo) {

                                                        echo'<option value="' . $cursooo->getId_curso() . '">' . $cursooo->getNome() . '</option>';

                                                        }

                                                       
                                                        echo'</select>'; 
                                                         echo '</div>';
                                                         echo'<div class="col-md-4">'
                                                         . ' <label></label>'
                                                         
                                                        . '<input class="btn btn-success" type ="submit" name="enviar" value ="Salvar" ></div>';
                                                        echo '</div>';
                                                       
                                                     
                                                      //  echo'<div class="col-md-6" align="right"><input class="btn btn-success" type ="submit" name="enviar" value ="Salvar" ></div>';
                                                        echo'</form>'; 
                                                        
                
                                                        
                                                        
                                                        
                                                        
                                        
                                                        
                                                        
                                                        
                                                        
                                                        }                                        
                                                        echo '</div>';
                                                        echo '</div>';
                                                        
                                                      
                                                        
                                                   if (isset($_GET['op'])) {
                                                   $operacao = $_GET['op'];
                                                     if ($operacao == "remover") {
                                                        $retorno = DaoCurso::excluir($_GET['id']);
                                                       }
                                                }
                                                
                                                    echo '<div class="row">
                                                <div class="col-md-12"> &nbsp; </div>
                                            </div>
                                           <div class="row">
                                                <div class="col-md-12"> &nbsp; </div>
                                            </div>';
                                                    
                                                    
                                                     
                                                      
                                                   //  var_dump($vMC);
                                                      
                                                           $Vitem33 = DaoMaterialConsumo::getTodosJatoba(  $_SESSION['id_almox3']);
                                                          echo '  <div class="panel panel-default">';
                                                          echo ' <div class="panel-heading">
                                                           '.$Vitem33[0]->getId_almox()->getNome().'
                                                            </div>';
                                                          echo '<div class="panel-body">';
                                                        echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-ITENS">'; 
                                                    
                                                     //  print_r($SMC);      
                                                             
                                                   // print_r($Vitem33);
                                                     //   echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-CURSOS">';
                                                        echo ' <thead>';
                                                      //  echo '<tr><td colspan="7" align="center"><b>'.$Vitem33[0]->getId_almox()->getNome().'</b></td></tr>';
                                                        echo ' </thead>';
                                                        echo '<tr>';
                                                        echo '<th>Codigo</th><th>Nome</th><th>Descrição</th><th>Unidade de Medida</th><th>Quantidade</th><th>Tipo</th><th>Selecionar</th>';
                                                        echo '</tr>';
                                                        

                                                        echo ' <tbody>'; 
                                                        
                                                        foreach ($Vitem33 as $item) {                                                                                                                           
                                                        
                                                            echo '<tr>';
                                                             echo '<form role="form" action="ItemMaterialConsumo.php" method="post">';
                                                              
                                                             echo '<input class="form-control" value="'.$item->getCodigo().'" type ="hidden" name="id_produto" >';
                                                             echo "<td align='left'>".$item->getCodigo()."</td>";
                                                             echo "<td align='left'>".$item->getNome()."</td>";
                                                             echo "<td align='left'>".$item->getDescricao()."</td>";
                                                             echo "<td align='left'>".$item->getId_UM()->getDescricao()."</td>";
                                                             echo "<td align='left'><input type='number'name='qtd'></td>";
                                                            // echo "<td align='left'>".$item->getQtd()."</td>";
                                                             echo "<td align='left'>".$item->getId_tipo()->getDescricao()."</td>";
                                                             echo '<td><button type="submit" class="btn btn-default"   name="Adicionar"  >Selecionar</button><td>';
                                                            // echo "<td><a class='btn btn-success' href='ItemMaterialConsumo.php?Adicionar&idproduto=".$item->getCodigo()."&produto=".$item->getNome()."'>Selecionar</a></td>";
                                                             //echo "<td><a class='btn btn-success' href='ItemMaterialConsumo.php?Adicionar&idproduto=".$item->getCodigo()."&produto=".$item->getNome()."'>Selecionar</a></td>";
                                                             echo '</form>';
                                                           
                                                             
                                                            echo '</tr>';
                                                         }
                                                             echo ' </tbody>';

                                                      //  echo '</table>';
                                                    //    echo"</center>";
                                                    echo '</table>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    
        
                                                   
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
                    $('#dataTables-ITENSSELECIONADOS').DataTable({
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
                    $('#dataTables-ITENS').DataTable({
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