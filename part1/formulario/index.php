<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Formulário</title>
</head>
<body>

<h2>Preencha o formulário:</h2>

<form action="recupera-dados.php" method="POST">
  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome" required><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="idade">Idade:</label><br>
  <input type="number" id="idade" name="idade" required><br>
  <label for="hobbie">Hobbie:</label><br>
  <input type="text" id="hobbie" name="hobbie" required><br><br>
  <input type="submit" value="Enviar">
</form>
</body>
</html>