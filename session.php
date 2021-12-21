<?php
require_once "conexao.php";
//sessao
session_start();
$_SESSION['player'] = $_POST['player'];
$_SESSION['senha'] = $_POST['senha'];

$player = filter_input(INPUT_POST,'player');
$senha = filter_input(INPUT_POST, 'senha');

$sql = "select senha from personagem where player = 'Mestre'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$dado = $stmt->fetch();
$pass = $dado['senha'];




//Termina Sessao
if ($_SESSION['player'] == '' and $_SESSION['player'] == NULL) 
{

unset($_SESSION['player']);
session_destroy();

header('Location: login.html');
}

if(($_SESSION['player'] == 'Mestre') && ($_SESSION['senha'] == $pass)){
    header('Location: mestre.php');
} else if (($_SESSION['player'] == 'Mestre') && ($_SESSION['senha'] != $pass)){
    
    header('Location: login.html');
}
?>