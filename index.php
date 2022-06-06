<?php
/*
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem, consectetur dignissimos voluptate animi reiciendis, libero placeat impedit eligendi totam aliquam corporis ab alias eius. Quae, illo sed soluta amet deleniti similique reprehenderit facere ducimus veritatis magnam assumenda quos, placeat architecto. Repellendus quos ab cum nihil magnam, distinctio quibusdam minima aspernatur quisquam deserunt unde quam. Adipisci autem asperiores quidem voluptatibus, non iusto cupiditate dolores. Corrupti at animi, voluptatibus minus doloremque saepe numquam reiciendis alias cum cumque dolorem rerum expedita vero ipsam harum amet maiores fugiat corporis ullam unde sint soluta facere eligendi culpa! Exercitationem veniam commodi quia nisi sint accusantium beatae eligendi necessitatibus amet, non eaque, assumenda dolorem velit corporis repellat tempore quo excepturi. Dolorem, tenetur accusantium dolor explicabo assumenda architecto temporibus cupiditate veniam reprehenderit doloremque placeat beatae impedit asperiores necessitatibus maxime officia labore animi! Non quasi corporis fuga alias ab labore laudantium quisquam quam quas eius. Incidunt laudantium cumque amet maiores earum odio voluptatum quis voluptatem at quia! Minima, corporis reprehenderit! Necessitatibus natus ex sed animi? Architecto expedita ea labore asperiores consequatur minus praesentium inventore qui iusto excepturi cupiditate hic repellat aliquid, consequuntur consectetur! Architecto velit fugit hic consequatur, voluptatibus mollitia ipsa libero non error adipisci eius ipsum consequuntur!';

$textlength = strlen( $testo);

// Viene selezionato in pagina tramite URL
$badword = $_GET['badword'];

$testoCensurato = str_replace($badword, '*** ', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio - PHP badwords</title>
</head>
<body>
    <p>
        <strong>Il testo in questione è: </strong>
        <br>
        <i><?php echo $testo ?></i>
    </p>
    <p>
        <strong>Ed è lungo</strong> 
        <i> <?php echo $textlength ?></i>
        <strong>caratteri</strong>
    </p>
    <p>
        <strong>La parola selezionata è</strong>
        <i><?php echo $badword ?></i>
    </p>
    <p>
        <strong>Il testo censurato è: </strong>
        <br>
        <i><?php echo str_replace($badword, '*** ', $testo) ?></i>
    </p>
    <p>
        <strong>Ed è lungo</strong> 
        <i> <?php echo strlen($testoCensurato) ?></i>
        <strong>caratteri</strong>
    </p>
    
</body>
</html>