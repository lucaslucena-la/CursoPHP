<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
        //sequenciais(numéricos)
        //$lista_frutas = array('Banana', 'Maçã', 'Morango' , 'Uva');
        $lista_frutas = ['Banana', 'Maçã', 'Morango' , 'Uva'];
        $lista_frutas [] = "Abacaxi";

        /*
        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre>';
        echo "<hr />";
        echo '<pre>';
        print_r($lista_frutas);
        echo '<pre>';
        */

        echo $lista_frutas [1];

        //associativos
        $lista_frutas = [
            'a' => 'Banana',
            'b' => 'Maçã', 
            'c' => 'Morango' , 
            'd' => 'Uva'];

        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre>';




    ?>
</body>

</html>