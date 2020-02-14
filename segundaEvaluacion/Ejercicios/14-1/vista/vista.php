<html>
<head>
    <title></title>
</head>
<body>
<table style="border: thick solid black">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
    </tr>

    <?php
    foreach ($productos as $productos):
        ?>
        <tr>
            <td style="background-color: #00a0d2;"><?php echo $productos['nombre'] ?></td>
            <td><?php echo $productos['coste'] ?></td>
            <td><input type="button" value="Comprar" style="color: #fff !important;
                text-transform: uppercase;
                text-decoration: none;
                background: #ed3330;
                padding: 20px;
                border-radius: 5px;
                display: inline-block;
                border: none;
                transition: all 0.4s ease 0s;"></td>
        </tr>

    <?php
    endforeach;
    ?>

</table>
</body>
</html>