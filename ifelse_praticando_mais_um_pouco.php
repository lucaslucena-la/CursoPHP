<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //variavis
    $usuario_possui_cartao_loja = true;
    $valor_compra = 250;
    $valor_frete = 50;
    $recebeu_desconto_frete = true;

    //se o usuario possui cartão da loja e o valor da compra for maior ou igual a quatrocentos, valor do frete é zero
    if ($usuario_possui_cartao_loja  && $valor_compra >= 400) {
        $valor_frete = 0;

    //se o usuario possui cartão da loja e o valor da compra for maior ou igual a trezentos, valor do frete é dez reais
    } else if ($usuario_possui_cartao_loja  && $valor_compra >= 300) {
        $valor_frete = 10;
    
    //se o usuario possui cartão da loja e o valor da compra for maior ou igual a , valor do frete é vinte e cinco reais
  
    } else if ($usuario_possui_cartao_loja  && $valor_compra >= 100) {
        $valor_frete = 25;
  
    } else {//caso não seja nenhuma das alternativas, o cliente não receberá desconto no frete
        //...
        $recebeu_desconto_frete = false;
    }

    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja? <?=  $usuario_possui_cartao_loja ? 'SIM' : 'NÃO';  //operador ternario: <condicao> ? true : false ?></p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?
        <?php
        $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';//operador ternario: <condicao> ? true : false
        echo $teste;
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>

</html>