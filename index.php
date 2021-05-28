<?php

$paragrafo = "C'è un prete e una suora che vanno a giocare a golf. La suora, porta l'occorrente per il prete. Il prete tira e dice: 
- Cazzo, ho sbagliato mira -
- Ma padre, lei non può dire le parolacce - dice la suora.
- Mi perdoni sorella, se dico un'altra parolaccia che il Signore mi fulmini!!-
Il prete tira una seconda volta e dice:
-  Cazzo, ho sbagliato mira-
- Ma padre, lei non può dire le parolacce- dice la suora.
- Mi perdoni sorella, se dico un'altra parolaccia che il Signore mi fulmini!!-
Dopo quelle parole, si aprì il cielo e partì un fulmine che seccò la suora e si sente dire dal cielo:
Cazzo!!!HO SBAGLIATO MIRA!!!!";


var_dump($paragrafo);

echo strlen($paragrafo);

echo "<br>";
echo "<br>";

echo str_replace("Cazzo", "C***o", $paragrafo);

