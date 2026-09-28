<?php

$conexao = new mysqli("Localhost", "root", "","teste");

$resultado = $conexao->query("SELECT * FROM pessoas");


?>
<!DOCTYPE html>
<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($linha= $resultado->fetch_assoc()) { ?>
            <tr> 
            <td><?php echo $linha["id"] ?></td>
            <td><?php echo $linha["nome"] ?></td>
              <td><?php echo $linha["idade"] ?></td>
              <?php } ?>
              </tr>
        </tbody>
     </table>

</body>
</html>