<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        session_start();
        ?>
    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Login">
    <meta name="author" content="L&IComunicação">
    <link rel="icon" href="img/favicon.png">

    <title>Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="col-lg-12">
    <div class="col-md-4"></div>
    <div class="container">
        
        <form class="form-signin" method="POST" action="">
            <center>
            <img src="https://i1.wp.com/ongresgatandovidas.com/wp-content/uploads/2017/07/cropped-TopoImagem-1-1024x568.jpg?resize=1024%2C568" width="280"/>
            </center>
            
            
        <h2 class="form-signin-heading text-center">Faça o Seu Login</h2>
        <label for="inputUser" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o usuário" required autofocus><br />

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnacesso">Entrar</button>
         <?php
  if(isset($_POST['btnacesso'])){
   // Conexao com o banco
 include 'connect.php';
 $usuario=addslashes($_POST['usuario']);
 $senha=addslashes($_POST['senha']);
 $consulta=$pdo->prepare("select * from usuarios where usuario='$usuario' and senha='$senha'");
 $consulta->execute();
 if($consulta->rowCount()== 1){
 $consulta1=$consulta->fetch(PDO::FETCH_ASSOC);
 $_SESSION['userc'] = $usuario;
 $_SESSION['senhac'] = $senha;
 echo ("<script language='JavaScript'>window.location='listar.php';</script>
<script type='text/javascript'> alert('Seja Bem vindo');</script>");
 }else {
 echo '<center><br><p style="color:red">ACESSO NEGADO! EMAIL/SENHA INVÁLIDOS</p></center>';
 }
}
                                                                            ?> 
      </form>
       
    </div> <!-- /container -->
    <div class="col-md-4"></div>
    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

