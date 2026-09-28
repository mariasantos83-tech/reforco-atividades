<?php

$conexao = new mysqli("localhost", "root", "","teste");

$id = $_GET['id'];

$resultado = $conexao->query("SELECT * FROM pessoas WHERE id = $id");

?>

<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <p>Bom dia,
        <?php while ($linha= $resultado->fetch_assoc()) { ?>
        <?php echo $linha["nome"] ?>
        <?php } ?>
    </p>
    <form action="
    "></form>
     </table>
</body>
</html>