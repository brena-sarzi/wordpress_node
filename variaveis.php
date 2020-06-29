<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>

    <?php

        // PHP precisa de ponto e virgula no final ";"

        // Criando uma variavel e defindo o valor dela
        $string = '<p>Isso é uma <strong>string</strong></p>';
        // Imprimir variavel
        echo $string;
        // Imprimir uma tag html
        echo '<br/>';
        // Mostra o tipo a quantidade e o conteúdo da variavel
        var_dump($string);

        // Essa é uma varialvel do tipo number "numero"
        $number = 1234;
        // Imprimir variavel number
        echo $number;
        echo '<br/>';

        // Variavel do tipo booleano que representa verdadeiro "true" ou falso "false"
        $boolean = true;

        // Imprima a variavel
        echo $boolean;

        // Mostra o tipo a quantidade e o conteúdo da variavel
        var_dump( $number );
?> 

</body>
</html>