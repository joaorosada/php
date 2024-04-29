<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consulta de Pesquisa</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<h2>Dados da Pesquisa</h2>

<table>
    <tr>
        <th>tamanho</th>
        <th>cor</th>
        <th>tipo</th>
    </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "part2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT tamanho, cor, tipo FROM roupas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["tamanho"]. "</td><td>" . $row["cor"]. "</td><td>" . $row["tipo"]. "</td></tr>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>

</table>

</body>
</html>
