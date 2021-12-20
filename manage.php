<?php
require_once "conexao.php";
require_once "session.php";


//Preenche ficha

$sql = $pdo->prepare("Select pj_info from personagem where player = ?");
$sql->execute([$player]);
$dado =  $sql->fetchAll();
if (!empty($dado)){
    $data = json_decode($dado[0][0]);
}

?>