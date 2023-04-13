<?php
     require_once './CLASSES/usuario.php';
     $u = new Usuario;
?>
<html lang="pt-br">
 <head>
     <meta charset="utf-8">
     <title>Cadastrar</title>
     <link rel="stylesheet" href="./CSS/cadastrar.css">
</head>
<body>
<div classe="cadastro">
     <form method="POST">
          <H1>CADASTRAR</H1>
          <input placeholder="Nome" type="text" maxlength="40" name="nome">
          <input placeholder="Usuario" type="text" maxlength="40" name="usuario">
          <input placeholder="Senha" type="password" maxlength="15" name="senha">
          <input type="submit" value="Cadastrar">
     </form>
</div>
<?php
if (isset($_POST['nome'])){
     $nome = addslashes($_POST['nome']);
     $usuario = addslashes($_POST['usuario']);
     $senha = addslashes($_POST['senha']);

     if(!empty($nome) && !empty($usuario) && !empty($senha)){
          $u->conectar("Rpg-Maker", "LocalHost", "root", "");
          if($u->$msgErro == ""){
               if($u->cadastrar($nome, $usuario, $senha)){
                    ?>
                    <section>
                         Cadastrado com sucesso!
                    </section>

                    <?php

               } else{
                    ?>
                    <section>
                         Usuario ja existe!
                    </section>

                    <?php
               }

          } else{
               echo "Erro: ".$u->$msgErro; 
          }


     } else{
          ?>
          <section>
               Preencha todos os campos!
          </section>

          <?php
     }
}
?>
</body>
</html>