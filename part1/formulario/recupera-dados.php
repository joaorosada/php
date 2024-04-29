<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $hobbie = $_POST["hobbie"];
    
    if (strlen($nome) < 6) {
        echo "Erro: o nome precisa de mais caracteres.";
        return;
    }
      if ($idade < 18) {
        echo "Erro: A idade precisa ser de maior.";
        return;
    }
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Hobbie: " . $hobbie . "<br>";
} else {
    echo "Erro: Os dados não foram enviados via POST.";
}
?>


recupera-dados.php
