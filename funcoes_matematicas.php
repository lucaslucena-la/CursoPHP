<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $num = 7.5;
    echo ceil($num); //arredonda para cima
    echo '<br />';
    echo floor($num); //arredonda para baixo
    echo '<br />';
    echo round($num); //arrendoda com base na fracao (.0 .4 -> para baixo) (.5 .9 -> para cima)
    echo '<br />';
    echo rand(10, 30); //gerar um fvlor aleatório (maior valor aleatório possível)
    echo '<br />' . getrandmax(); //descobre o valor maximo que pode ser aleatorio a depender do sistema operacional
    echo '<br />';
    
    echo sqrt(9); //raiz quadrada
    
    ?>
</body>

</html>