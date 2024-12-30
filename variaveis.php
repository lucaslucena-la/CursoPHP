<html>
    <head> 
        <meta charset = "utf-8"/>
        <title> Curso PHP </title>

    </head>

    <body>
        <?php
        
            //string
            $nome = "Lucas Lucena";
            //int
            $idade = 22;
            //float
            $peso = 79.4;
            //boolean
            $fumante = false; //true = 1; false = vazio
        
        ?>

        <h1> Ficha cadastral </h1>
        <br/>
        <p>Nome: <?= $nome ?> </p>
        <p>Idade: <?= $idade ?> </p>
        <p>Peso: <?= $peso = 78.9 ?> </p>
        <p>Fumante: <?= $fumante ?> </p>
        


    </body>

</html>