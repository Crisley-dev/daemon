<?php
require_once "conexao.php";

$pj = filter_input(INPUT_POST, 'player');
$tipo = filter_input(INPUT_POST, 'tipo');
$novo = filter_input(INPUT_POST, 'novo_player');

if($tipo == "ficha") 
{
    $old = "INSERT INTO old_personagem select pj_info, player from personagem";
    $stmt = $pdo->prepare($old);
    $stmt->execute();
    
    $new = "UPDATE personagem SET pj_info = NULL where player = ? ";
    $stmt1 = $pdo->prepare($new);
    $stmt1->execute([$pj]);
}

if($tipo == "player")
{
    $sql = "INSERT INTO personagem (pj_info, player) values (NULL,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$novo]);

    print_r($stmt);
}




?>
