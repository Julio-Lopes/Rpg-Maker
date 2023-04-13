<?php
     include_once('./CLASSES/listar.php');

     if(isset($_POST['update'])){
          $id = $_POST['id_personagem'];
          $nome = $_POST['nome'];
          $raca = $_POST['raca'];
          $classe = $_POST['classe'];
          $vida = $_POST['vida'];
          $divindade = $_POST['divindade'];
          $mana = $_POST['mana'];
          $forca = $_POST['forca'];
          $destreza = $_POST['destreza'];
          $inteligencia = $_POST['inteligencia'];
          $sabedoria = $_POST['sabedoria'];
          $carisma = $_POST['carisma'];
          $acrobacia = $_POST['acrobacia'];
          $adestramento = $_POST['adestramento'];
          $atletismo = $_POST['atletismo'];
          $atuacao = $_POST['atuacao'];
          $cavalgar = $_POST['cavalgar'];
          $conhecimento = $_POST['conhecimento'];
          $cura = $_POST['cura'];
          $diplomacia = $_POST['diplomacia'];
          $enganacao = $_POST['enganacao'];
          $fortitude = $_POST['fortitude'];
          $furtividade = $_POST['furtividade'];
          $guerra = $_POST['guerra'];
          $iniciativa = $_POST['iniciativa'];
          $intimidacao = $_POST['intimidacao'];
          $intuicao = $_POST['intuicao'];
          $insvestigacao = $_POST['investigacao'];
          $jogatina = $_POST['jogatina'];
          $ladinagem = $_POST['ladinagem'];
          $luta = $_POST['luta'];
          $misticismo = $_POST['misticismo'];
          $nobreza = $_POST['nobreza'];
          $oficio = $_POST['oficio'];
          $percepcao = $_POST['percepcao'];
          $pilotagem = $_POST['pilotagem'];
          $pontaria = $_POST['pontaria'];
          $reflexo = $_POST['reflexos'];
          $religiao = $_POST['religiao'];
          $sobrevivencia = $_POST['sobrevivencia'];
          $vontade = $_POST['vontade'];
          $ataque = $_POST['ataque'];
          $defesa = $_POST['defesa'];
          $proeficiencias = $_POST['proeficiencias'];
          $nivel = $_POST['nivel'];
          $exp = $_POST['exp'];
          $itens = $_POST['item'];
          $magia = $_POST['magia'];

          $sqlUpdate = "UPDATE personagem SET nome='$nome', raca='$raca', classe='$classe', vida='$vida', divindade='$divindade', mana='$mana', forca='$forca', destreza='$destreza', inteligencia='$inteligencia', sabedoria='$sabedoria', carisma='$carisma', acrobacia='$acrobacia', adestramento='$adestramento', atletismo='$atletismo', atuacao='$atuacao', cavalgar='$cavalgar', conhecimento='$conhecimento', cura='$cura', diplomacia='$diplomacia', enganacao='$enganacao', fortitude='$fortitude', furtividade='$furtividade', guerra='$guerra', iniciativa='$iniciativa', intimidacao='$intimidacao', intuicao='$intuicao', investigacao='$insvestigacao', jogatina='$jogatina', ladinagem='$ladinagem', luta='$luta', misticismo='$misticismo', nobreza='$nobreza', oficio='$oficio', percepcao='$percepcao', pilotagem='$pilotagem', pontaria='$pontaria', reflexos='$reflexo', religiao='$religiao', sobrevivencia='$sobrevivencia', vontade='$vontade', ataque='$ataque', defesa='$defesa', proeficiencias='$proeficiencias', nivel='$nivel', exp='$exp', item='$itens', magia='$magia' WHERE id_personagem='$id'";

          $result = $conexao->query($sqlUpdate);

     }
     header('Location: listarPersonagem.php')
?>