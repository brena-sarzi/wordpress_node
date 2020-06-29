<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <table style="width:100%; text-align: center;" border="1">
        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Idade</td>
        </tr>

        <?php 
        // Criação de duas array em uma variavel
            $array = array(
                'Diego' => array(
                    'idade' => 33,
                    'sobrenome' => 'Sarzi'
                ),
                'Rafaela' => array(
                    'idade' => 28,
                    'sobrenome' => 'Justino'
                )
            );
            // Me mostre o nome "$key" e o valor "$value" da variavel $array
            foreach( $array as $key => $value ){
                echo '<tr>'; 
                    echo '<td>';
                        echo $key;
                    echo '</td>';
                    
                    echo '<td>';
                        echo $value['sobrenome'];
                    echo '</td>';
                    
                    echo '<td>';
                        echo $value['idade'];;
                    echo '</td>';
                echo '</tr>'; 
            }
        ?>
    </table>

    <?php 
        $array = array(
            'banana',
            'maçã',
            'abacate'
        );    
        // Outra forma de ter o $key "nome" sem precisar do $value "valor"
        foreach( $array as $fruta){
            echo $fruta;
            echo '<br/>';
        }
    ?>
</body>
</html>