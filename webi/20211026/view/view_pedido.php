<?php

    $pedidos = $_REQUEST['pedidos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Valor</th>
        </tr>
        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?php echo $pedido["codigo"];?></td>
                <td><?php echo $pedido["valor"];?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>