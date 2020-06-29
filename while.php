<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    
    <?php 
    
    echo '<p>Um Loop com <strong>while</strong></p>';
    $i = 1;
    while( $i <= 10 ){
        echo $i++;
        echo '<br/>';
    }
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';

    $array = array(
        'Diego',
        'Rafaela',
        'Brena',
        'Mateus',
        'Brena'
    );

    $i = 0;
    $encontrou = true;
    while( $encontrou ){
        if( $array[$i] == 'Mel' ){
            echo 'Essa é a Mel';
            break;
        }
        echo $i++;
        echo'<br/>';

        if( $i >= count($array)  ){
            echo 'Não foi encontrado na lista';
            break;
        }

    }

    ?>

</body>
</html>