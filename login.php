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

        <title>SISTEMA ASSIS - LOGIN</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php
//    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Usuario.php';
//    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoUsuario.php';
//    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoFuncionario.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';


        if (isset($_POST['logar'])) {

            $login = $_POST['login'];
            $usuario = DaoFuncionario::getFuncionarioLogin($login);
            
           // var_dump($usuario);
            $_SESSION['login'] = "desativado";
            
            if($usuario == null){
                
                 echo '<script type="text/javascript">';
                echo 'alert("Login ou senha incorreto!")';

                echo '</script>';
                
            }else{
                
          
            
            
            
            //$senha = $_POST['senha'];

         //   $_SESSION['senha'] = md5($_POST['senha']);

            if ($_POST['login'] === $usuario->getLogin() && md5($_POST['senha']) === $usuario->getSenha()) {

                
                
               $_SESSION['nome'] = $usuario->getNome();
               $_SESSION['id_funcionario'] = $usuario->getId_funcionario();
               $_SESSION['tipo'] = $usuario->getTipo();
               $_SESSION['funcao'] = $usuario->getFuncao()->getNome();
               $_SESSION['login'] = "ativo";
               
              $_SESSION['TipoCliente'] = $usuario->getTipo();
               
               if ($usuario->getTipo() == "Administrador")
               {
                    header("location: PPAD.php");
               } 
               else if ($usuario->getTipo() == "almoxarife")
               {
                   header("location: PPAL.php");
               } else
                   {
                     header("location: PPCL.php");
                   }

             
                echo '<script type="text/javascript">';
                echo 'alert("senha correta!")';

                echo '</script>';

                //     echo '<h1>Senha Correta</h1>';
            } else {

                echo '<script type="text/javascript">';
                echo 'alert("Login ou senha incorreto!")';

                echo '</script>';
               // var_dump($usuario);
                echo '<br>*';
               // echo $_SESSION['senha'];
                echo '<br>*';
                // echo '<h1>Senha Incorreta</h1>';
            }
            
            }
            
        }
        ?>  

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">FAÇA O LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="LOGIN" name="login" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="SENHA" name="senha" type="password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">LEMBRAR SENHA
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button  class="btn btn-lg btn-success btn-block" type ="submit" name="logar">ENTRAR</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/sb-admin-2.js"></script>

    </body>

</html>
