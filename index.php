<?php
require_once './CLASSES/usuario.php';
$u = new Usuario
?>
<html lang="pt-br">
<head>
     <meta charset="utf-8">
     <title>Login</title>
     <link rel="stylesheet" href="./CSS/login.css">

</head>
<body>
<div classe="formulario">
     <h1 class="titulo">LOGIN</h1>
     <form method="POST">
          <input placeholder="Usuario" name="usuario" type="text" maxlength="40">
          <input placeholder="Senha" name="senha" type="password" maxlength="15">
          <input type="submit" value="Entrar">
          <a href="cadastrar.php"><strong>Registrar</strong></a>
     </form>
</div>
<?php
if (isset($_POST['usuario'])){
     $usuario = addslashes($_POST['usuario']);
     $senha = addslashes($_POST['senha']);

     if(!empty($usuario) && !empty($senha)){
          $u->conectar("Rpg-Maker", "LocalHost", "root", "");
          if($u->$msgErro == ""){
               if($u->logar($usuario,$senha)){
                    header("location: listarPersonagem.php");
               } else{
                    ?>
                    <section>
                         Usuario ou senha invalido
                    </section>
                    <?php
               }
          } else{
               ?>
               <section>
                    Erro de banco de dados
               </section>
               <?php
          }

} else{
     ?>
     <section>
          Preencha todos os dados
     </section>
     <?php
}
}
?>
</body>
</html>