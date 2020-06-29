<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>

    <?php
        // Isso é um Loop ele irá começar no 0 e terminará ao 9
        for($i = 0; $i < 10; $i++)/* A variavel é igual a 0 e a cada vez que rodar o loop 
        aumentará 1, até alcançar ao 9 pois é o ultimo menor de 10 */{ 
            echo $i;
            echo '<br/>';
        }

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';

        for($i = 0; $i < 10; $i++){

            if( $i == 5 ){ // Se a variavel for igual a 5 pulará o numero e continuará
                continue;
            }

            echo $i;
            echo '<br/>';

            if( $i == 5 ){ // Se a variavel for igual a 5 o loop para
                break;
            }
        }

        echo '<br/>';
        echo '<br/>';

        $array = array(
            'Diego',
            'Rafaela',
            'Brena',
            'Mateus',
            'Mel'
        );

        for($i = 0; $i < count($array); $i++){
            echo $array[$i];
            echo '<br/>';
        }

    ?>
</body>
</html>