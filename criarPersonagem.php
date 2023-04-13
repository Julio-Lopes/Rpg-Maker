<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
     header("location: index.php");
     exit;
}
?>

<?php
     require_once './CLASSES/personagem.php';
     $u = new Personagem;
?>
<html lang="pt-br">
 <head>
     <meta charset="utf-8">
     <title>Cadastrar</title>
     <link rel="stylesheet" href="./CSS/personagem.css">
</head>
<body>
<div classe="cadastro">
     <form method="POST">
          <H1>CADASTRAR</H1>
          <input placeholder="Nome" type="text" maxlength="40" name="nome">
          <input placeholder="Raça" type="text" maxlength="40" name="raca">
          <input placeholder="Classe" type="text" maxlength="15" name="classe">
          <input placeholder="Divindade" type="text" maxlength="15" name="divindade">
          <input type="submit" value="Cadastrar">
          <a href="listarPersonagem.php">Voltar</a>
     </form>
</div>
<?php
if (isset($_POST['nome'])){
     $nome = addslashes($_POST['nome']);
     $raca = addslashes($_POST['raca']);
     $classe = addslashes($_POST['classe']);
     $divindade = addslashes($_POST['divindade']);

     if(!empty($nome) && !empty($raca) && !empty($classe) && !empty($divindade)){
          $u->conectar("Rpg-Maker", "LocalHost", "root", "");
          if($u->$msgErro == ""){
               if($u->cadastrar($nome, $raca, $classe, $divindade)){
                    ?>
                    <section>
                         Cadastrado com sucesso!

                    </section>
                    <?php
                    header("location: listarPersonagem.php");
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