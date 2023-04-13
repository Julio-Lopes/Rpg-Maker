<?php


class Usuario{
     private $pdo;
     public $msgErro = "";

     public function conectar($nome, $host, $usuario, $senha) {
          global $pdo;
          global $msgErro;

          try{
               $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
          } catch(PDOException $e){
               $msgErro = $e->getmessage();
          }
     }

     public function cadastrar($nome, $usuario, $senha){
          global $pdo;

          $sql= $pdo->prepare("SELECT id_usuario from usuarios WHERE usuario = :e");
          $sql->bindValue(":e", $usuario);
          $sql->execute();
          if($sql->rowCount() > 0){
               return false;
          }
          else{
               $sql= $pdo->prepare("INSERT INTO usuarios (nome, usuario, senha) VALUES (:n, :u, :s)");
               $sql->bindValue(":n", $nome);
               $sql->bindValue(":u", $usuario);
               $sql->bindValue(":s", md5($senha));
               $sql->execute();
               return true;
          }
     }

     public function logar($usuario, $senha){
          global $pdo;

          $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE usuario = :u AND senha = :s");
          $sql->bindValue(":u", $usuario);
          $sql->bindValue(":s", md5($senha));
          $sql->execute();

          if($sql->rowCount() > 0){
               $dado = $sql->fetch();
               session_start();
               $_SESSION['id_usuario'] = $dado['id_usuario'];
               return true;
          } else{
               return false;
          }
     }
}
?>