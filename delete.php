<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
     header("location: index.php");
     exit;
}
?>

<?php
     if(!empty($_GET['id_personagem'])){
          include_once('./CLASSES/listar.php');

          $id_personagem = $_GET['id_personagem'];

          $sqlSelect = "SELECT * FROM personagem WHERE id_personagem=$id_personagem";

          $result = $conexao->query($sqlSelect);

          if($result->num_rows > 0){
               while($user_data = mysqli_fetch_assoc($result)){
                    $sqlDelet = "DELETE FROM personagem WHERE id_personagem=$id_personagem";
                    $resultdelete = $conexao->query($sqlDelet);
                    header("location: listarPersonagem.php");
               }
          }else {
               header("location: listarPersonagem.php");
          }
     }else{
          header("location: listarPersonagem.php");
     }
?>