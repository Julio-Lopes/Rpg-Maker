<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
     header("location: index.php");
     exit;
}
?>

<?php
require_once './CLASSES/listar.php';

$sql= ("SELECT * FROM personagem ORDER BY id_personagem DESC");

$result = $conexao->query($sql);
 
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
     body{
          background-image: url('./IMAGENS/fundoLogin.jpg');

     }
</style>
<body>
     <div>
     <table class="table table-bordered table-dark">
          <thead>
               <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Raca</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Divindade</th>
                    <th scope="col">...</th>
               </tr>
          </thead>
          <tbody>
               <?php
               while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['raca']."</td>";
                    echo "<td>".$user_data['classe']."</td>";
                    echo "<td>".$user_data['divindade']."</td>";
                    echo "<td>
                         <a class='btn btn primary' href='edit.php?id_personagem=$user_data[id_personagem]'>
                         <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
                              <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
                         </svg>
                         </a>
                         <a class='btn btn-sm btn-danger' href='delete.php?id_personagem=$user_data[id_personagem]'>
                              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                   <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                              </svg>
                         </a>
                    </td>";
               }

               ?>

          </tbody>
     </table>
     </div>
</body>
<footer>
     <a href="sair.php">Sair</a>
     <a href="criarpersonagem.php">Criar Personagem</a>
</footer>
</html>