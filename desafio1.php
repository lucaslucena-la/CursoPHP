<html>
    <head> 
        <meta charset = "utf-8"/>
        <title> Curso PHP </title>

    </head>

    <body>

        <?php
            $nome = "lucas";
            $idade = 20;
            $peso = 75.5;

            if(($idade >= 16 && $idade <= 69) && $peso >= 50 ){
                echo "O usuário $nome atende aos requisitos";

            }else{
                echo "O usuário $nome não atende aos requisitos";

            }
            
        ?>
        <br/>


    </body>

</html>