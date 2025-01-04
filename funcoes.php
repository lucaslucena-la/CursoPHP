<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

        //função do tipo void
        function exibirBoasVindas(){
            echo "Boas vindas ao curso de PHP <br/>";
        }

        exibirBoasVindas();

        //função com retorno

        function calcularAreaTerreno($largura, $comprimento){
            $Area = $largura * $comprimento;
            return $Area;
        }

        

        $resultado = calcularAreaTerreno(30, 50);
        echo "Área: $resultado"


        
    ?>



</body>

</html>