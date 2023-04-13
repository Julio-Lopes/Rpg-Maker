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
                    $nome = $user_data['nome'];
                    $raca = $user_data['raca'];
                    $classe = $user_data['classe'];
                    $vida = $user_data['vida'];
                    $divindade = $user_data['divindade'];
                    $mana = $user_data['mana'];
                    $forca = $user_data['forca'];
                    $destreza = $user_data['destreza'];
                    $inteligencia = $user_data['inteligencia'];
                    $sabedoria = $user_data['sabedoria'];
                    $carisma = $user_data['carisma'];
                    $acrobacia = $user_data['acrobacia'];
                    $adestramento = $user_data['adestramento'];
                    $atletismo = $user_data['atletismo'];
                    $atuacao = $user_data['atuacao'];
                    $cavalgar = $user_data['cavalgar'];
                    $conhecimento = $user_data['conhecimento'];
                    $cura = $user_data['cura'];
                    $diplomacia = $user_data['diplomacia'];
                    $enganacao = $user_data['enganacao'];
                    $fortitude = $user_data['fortitude'];
                    $furtividade = $user_data['furtividade'];
                    $guerra = $user_data['guerra'];
                    $iniciativa = $user_data['iniciativa'];
                    $intimidacao = $user_data['intimidacao'];
                    $intuicao = $user_data['intuicao'];
                    $insvestigacao = $user_data['investigacao'];
                    $jogatina = $user_data['jogatina'];
                    $ladinagem = $user_data['ladinagem'];
                    $luta = $user_data['luta'];
                    $misticismo = $user_data['misticismo'];
                    $nobreza = $user_data['nobreza'];
                    $oficio = $user_data['oficio'];
                    $percepcao = $user_data['percepcao'];
                    $pilotagem = $user_data['pilotagem'];
                    $pontaria = $user_data['pontaria'];
                    $reflexo = $user_data['reflexos'];
                    $religiao = $user_data['religiao'];
                    $sobrevivencia = $user_data['sobrevivencia'];
                    $vontade = $user_data['vontade'];
                    $ataque = $user_data['ataque'];
                    $defesa = $user_data['defesa'];
                    $proeficiencias = $user_data['proeficiencias'];
                    $nivel = $user_data['nivel'];
                    $exp = $user_data['exp'];
                    $itens = $user_data['item'];
                    $magia = $user_data['magia'];
               }
          }else {
               header("location: listarPersonagem.php");
          }
     }else{
          header("location: listarPersonagem.php");
     }
?>

<html>
     <head>
          <link rel="stylesheet" href="./CSS/edit.css">
          <body>
               <section>
                    <form method="POST" action="saveEdit.php">
                         <div class="vida">
                              Nome<input type="text" name="nome" id="nome" value="<?php echo $nome ?>"> Raça<input type="text" name="raca" id="raca" value="<?php echo $raca ?>"> Classe<input type="text" name="classe" id="classe" value="<?php echo $classe ?>"> Divindade<input type="text" name="divindade" id="divindade" value="<?php echo $divindade ?>"> <br>
                              Vida<input type="text" name="vida" id="vida" value="<?php echo $vida ?>"> Mana<input type="text" name="mana" id="mana" value="<?php echo $mana ?>"> Nivel<input type="text" name="nivel" id="nivel" value="<?php echo $nivel ?>"> Exp<input type="text" name="exp" id="exp" value="<?php echo $exp ?>"> <br>
                         </div>
                         <div class="atributos">
                              Força<input type="text" name="forca" id="forca" value="<?php echo $forca ?>"> Destreza<input type="text" name="destreza" id="destreza" value="<?php echo $destreza ?>"> Inteligencia<input type="text" name="inteligencia" id="inteligencia" value="<?php echo $inteligencia ?>"> Sabedoria<input type="text" name="sabedoria" id="sabedoria" value="<?php echo $sabedoria ?>"> <br>
                              Carisma<input type="text" name="carisma" id="carisma" value="<?php echo $carisma ?>"> Acrobacia<input type="text" name="acrobacia" id="acrobacia" value="<?php echo $acrobacia ?>"> Adestramento<input type="text" name="adestramento" id="adestramento" value="<?php echo $adestramento ?>"> Atletismo<input type="text" name="atletismo" id="atletismo" value="<?php echo $atletismo?>"> <br>
                              Atuação<input type="text" name="atuacao" id="atuacao" value="<?php echo $atuacao ?>"> Cavalgar<input type="text" name="cavalgar" id="cavalgar" value="<?php echo $cavalgar ?>"> Conhecimento<input type="text" name="conhecimento" id="conhecimento" value="<?php echo $conhecimento ?>"> Cura<input type="text" name="cura" id="cura" value="<?php echo $cura ?>"> <br>
                              Diplomacia<input type="text" name="diplomacia" id="diplomacia" value="<?php echo $diplomacia ?>"> Enganação<input type="text" name="enganacao" id="enganacao" value="<?php echo $enganacao ?>"> Fortitude<input type="text" name="fortitude" id="fortitude" value="<?php echo $fortitude ?>"> Furtividade<input type="text" name="furtividade" id="furtividade" value="<?php echo $furtividade ?>"> <br>
                              Guerra<input type="text" name="guerra" id="guerra" value="<?php echo $guerra ?>"> Iniciativa<input type="text" name="iniciativa" id="iniciativa" value="<?php echo $iniciativa ?>"> Intimidação<input type="text" name="intimidacao" id="intimidacao" value="<?php echo $intimidacao ?>"> Intuição<input type="text" name="intuicao" id="intuicao" value="<?php echo $intuicao ?>"> <br>
                              Investigação<input type="text" name="investigacao" id="investigacao" value="<?php echo $insvestigacao ?>"> Jogatina<input type="text" name="jogatina" id="jogatina" value="<?php echo $jogatina ?>"> Ladinagem<input type="text" name="ladinagem" id="ladinagem" value="<?php echo $ladinagem ?>"> Luta<input type="text" name="luta" id="luta" value="<?php echo $luta ?>"> <br>
                              Misticismo<input type="text" name="misticismo" id="misticismo" value="<?php echo $misticismo ?>"> Nobreza<input type="text" name="nobreza" id="nobreza" value="<?php echo $nobreza ?>"> Oficio<input type="text" name="oficio" id="oficio" value="<?php echo $oficio ?>"> Percepção<input type="text" name="percepcao" id="percepcao" value="<?php echo $percepcao ?>"> <br>
                              Pilotagem<input type="text" name="pilotagem" id="pilotagem" value="<?php echo $pilotagem ?>"> Pontaria<input type="text" name="pontaria" id="pontaria" value="<?php echo $pontaria ?>"> Reflexo<input type="text" name="reflexos" id="reflexos" value="<?php echo $reflexo ?>"> Religião<input type="text" name="religiao" id="religiao" value="<?php echo $religiao ?>"> <br>
                              Sobrevivencia<input type="text" name="sobrevivencia" id="sobrevivencia" value="<?php echo $sobrevivencia ?>"> Vontade<input type="text" name="vontade" id="vontade" value="<?php echo $vontade ?>"> <br>
                         </div>
                         <div class="armadura">
                              Ataque<input type="text" name="ataque" id="ataque" value="<?php echo $ataque ?>"> Defesa<input type="text" name="defesa" id="defesa" value="<?php echo $defesa ?>"><br>
                         </div>
                         <div class="itens">
                              Proeficiencias<textarea rows="10" type="text" name="proeficiencias" id="proeficiencias" placeholder="<?php echo $proeficiencias ?>"></textarea>
                              Itens<textarea rows="10" name="item" id="item" placeholder="<?php echo $itens ?>"></textarea>
                              Magia<textarea rows="10" name="magia" id="magia" placeholder="<?php echo $magia ?>"></textarea> 
                         </div>
                         <div class="form-submit">
                              <input type="hidden" name="id_personagem" id="id_personagem" value="<?php echo $id_personagem ?>">
                              <input type="submit" value="Atualizar" name="update" id="update">
                              <a href="listarPersonagem.php">Voltar</a>
                         </div>
                    </form>
               </section>
          </body>
     </head>
</html>