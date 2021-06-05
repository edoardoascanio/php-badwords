<?php

$paragrafo = "Dietro il palazzo c'è un povero cane pazzo, chi darà un pezzo di pane a quel povero pazzo cane. Sopra al terrazzo, c'è un cane pazzo, te' pazzo cane, sto pezzo di pane. Dentro quel palazzo c'è un povero cane pazzo, date un pezzo di pane a quel povero pazzo cane.";

$badWord = array_key_exists ("badword", $_GET) ? $_GET["badword"]: "";
$testoModificato = str_replace($badword, "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php

        echo $testo;
        echo "<br>";
        echo strlen($testo);

        ?>
    </p>

    <p>

        <?php

        echo $testoModificato;
        echo "<br>";
        echo strlen($testoModificato);

        ?>

    </p>
</body>

</html> 