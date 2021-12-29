<?php
/*
    $host = 'localhost';
    $dbname = 'id18191542_daemon';
    $username = 'id18191542_starkkz';
    $password = 'w/zO~P~h-H{yR4z1';
*/

    $host = 'localhost';
    $dbname = 'daemon';
    $username = 'root';
    $password = '';
    
    try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
?>