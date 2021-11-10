<?php

    $produtos = $_REQUEST['Produtos'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produto MVC</title>
</head>
<body>
    <table>
        <tr>
            <th>CodProdudo</th>
            <th>NomeProduto</th>
            <th>Valor</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto["CODPRODUTO"];?></td>
                <td><?php echo $produto["NOMEPRODUTO"];?></td>
                <td><?php echo $produto["VALOR"];?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>