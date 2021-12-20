<?php
//sessao
session_start();
$_SESSION['player'] = $_POST['player'];

$player = filter_input(INPUT_POST,'player');


//Termina Sessao
if ($_SESSION['player'] == '' and $_SESSION['player'] == NULL) 
{


unset($_SESSION['player']);
session_destroy();

header('Location: login.html');
}
?>