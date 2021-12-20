<?php
/*
    $host = 'localhost';
    $dbname = 'id17204719_daemon';
    $username = 'id17204719_starkkz';
    $password = 'w3XID+q+!d@vW3\?';
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