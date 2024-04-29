<?php
include "header.php";
//include "dados.php";
include "config.php";

$sql = "select * from produto";
$consulta = $pdo->prepare($sql);
$consulta->execute();


$produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <h1>Nossos produtos:</h1>
    <div class="grid">
        <?php 
         foreach ($produtos as $produto) {   
        ?>
        <div class="coluna">
        <img src="imagens/<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
                <p>
                    <strong><?=$produto["nome"]?></strong>
                    <br>
                    R$ <?=$produto["valor"]?>
                </p>
                <p>
                    <a href="produto.php?id=<?=$produto["id"]?>">Detalhes</a>
                </p>

        </div>
        <?php 
         }
        ?>
    </div>
</main>


<?php 
    include "footer.php";
?>
