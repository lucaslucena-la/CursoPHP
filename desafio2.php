<html>
    <head> 
        <meta charset = "utf-8"/>
        <title> Curso PHP </title>

    </head>

    <body>

        <?php
           function calcularImposto($valor){
                if ($valor <= 1903.98 ){
                    echo "Insento de impostos";

                }else if($valor >= 1903.99 && $valor <= 2826.65 ){
                    $valor = $valor + ((7.5 * $valor) / 100);

                }else if($valor >= 2826.66 && $valor <= 3751.05){
                    $valor = $valor + ((15 * $valor) / 100);
                    
                }else if ($valor >= 3751.06 && $valor <= 4664.6){
                    $valor = $valor + ((22.5 * $valor) / 100);

                }else if($valor > 4664.68){
                    $valor = $valor + ((27.5 * $valor) / 100);
                }

                return $valor;
                
            }

            // Testando a função
            $salario = 3000.00; // Alterar o valor para testar diferentes cenários
            $resultado = calcularImposto($salario);
            echo "Resultado para o salário de R$ " . number_format($salario, 2, ',', '.') . ": " . $resultado;
        ?>
        <br/>


    </body>

</html>