<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php
    
    // Passando o valor para duas variaveis do tipo number
    $number = 3;
    $numberDois = 5;

    // Imprimindo o valor da variavel
    echo 'number ';
    echo $number;

    echo '<br/>';

    // Imprimindo o valor da variavel
    echo 'numberDois ';
    echo $numberDois; 
    
    echo '<br/>';
    
    // Criar uma variavel para fazer a operação e gerar o resultado
    $adicao = $number + $numberDois;

    echo 'Adição ';
    echo $adicao;

    echo '</br>';

    $subtracao = $number - $numberDois;

    echo 'Subtração ';
    echo $subtracao;

    echo '</br>';

    $multiplicacao = $number * $numberDois;

    echo 'Multiplicação ';
    echo $multiplicacao;

    echo '</br>';

    $divisao = $number / $numberDois;

    echo 'Divisão ';
    echo $divisao;

    ?>
    <br/>
    <br/>
    -------------------------------------------------------------
    <br/>
    <br/>
    <?php
     // Verifica se o resultado é maior que 10
    if( $adicao > 10 ){
        echo 'Sim o total da adição <strong>é</strong> maior que 10';
    } else if( $adicao == 8 ){
        echo 'O  valor da sua adição é igual a 8';
    } else if( $adicao < 10 && $adicao > 1 ){
        echo 'Esse é um valor que está entre 1 e 10';
    } else {
        echo 'Não, o total <strong>não</strong> é maior que 10';
    }

    echo '<br/>';
    echo '<br/>';

    //boolean
    $boolean = false;

    if( $boolean == true ){
        echo 'É um valor verdadeiro';
    } else {
        echo 'É um valor falso';
    } 

    echo '<br/>';
    echo '<br/>';

    $string = 'oi';

    if( $string == 'oi' ){
        echo 'É igual a oi!';
    }

    ?>
</body>
</html>