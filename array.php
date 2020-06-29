<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    // Criando um array PHP
    $array = array(
        'chave_nome' => 'Teste', // Chaves e valores
        'Teste2',
        'Numero' => 1234
    );

    // Criando uma array dentro de outra array
    $array_two = array(
        'zeroTwo' => array(
            'hiro' => 'parazita',
            'ichigo' => 'parazita'
        ),
        'hiro' => array(
            'zeroTwo' => 'hogssauro',  // esta array esta dentro da 1° array
            'estrelitiza' => 'franxx'
        )
    );

    // var_dump($array);

    echo '<br/>';

    echo'<pre>'; // essa tag organiza o codigo

    print_r($array_two); // mostra o que essa variavel é

    echo '</pre>';
    
    // // Imprima o valor 1 do array 
    // echo $array['Numero'];



    ?>
</body>
</html>