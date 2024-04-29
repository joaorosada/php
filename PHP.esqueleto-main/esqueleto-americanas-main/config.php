<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root"; // senha = ""
$banco = "americanas";


try {  //xampp port=3839
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=8889;charset=utf8", $usuario, $senha);
    
} catch (\Exception $e) {
    echo "<p>Erro ao se conctar no banco </p>";
    echo $e->getMessage();
}
