<?php


class Personagem{
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


     public function cadastrar($nome, $raca, $classe, $dinvidade){
          global $pdo;

          $sql= $pdo->prepare("SELECT id_personagem from personagem WHERE nome = :n");
          $sql->bindValue(":n", $nome);
          $sql->execute();
          if($sql->rowCount() > 0){
               return false;
          }
          else{
               $sql= $pdo->prepare("INSERT INTO personagem (nome, raca, classe, divindade) VALUES (:n, :r, :c, :d)");
               $sql->bindValue(":n", $nome);
               $sql->bindValue(":r", $raca);
               $sql->bindValue(":c", $classe);
               $sql->bindValue(":d", $dinvidade);
               $sql->execute();
               return true;
          }
     }

}

?>