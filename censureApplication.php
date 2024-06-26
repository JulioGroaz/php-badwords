<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Censura Testo</title>
</head>
<body>

<form method="GET" action="">
    <label for="censura">Parola da censurare:</label>
    <input type="text" id="censura" name="censura">
    <input type="submit" value="Censura">
</form>


<?php
$testo = "Mi spingi oltre i miei limiti
e sento di vivere appieno la mia stessa vita,
in te ho incontrato me stesso
e ho guardato oltre,
oltre ogni inimmaginabile limite.
Ho guardato nel profondo dei tuoi occhi
cercando di comprenderti
ma, ho visto tutto quello che di me
mai avrei voluto vedere.
Ho visto la mia fragilità e la mia insicurezza
i miei sensi di colpa e i miei complessi
le mie paure e la mia insofferenza
ho visto le mie tenebre e i miei demoni
allora, ho guardato ancora oltre
e nel profondo del mio cuore, un mare in tempesta,
un oceano immenso dove tuffarsi e perdersi
e lì nel profondo della mia anima ho compreso!
Ho provato piacere e orgoglio
nel capire quello che oggi provo
nel sapere chi oggi sono veramente
adesso so che amo le cose belle
so che amo tutto quello che la vita mi offre
e una di quelle sei tu.";

echo "Testo originale: $paragrafo<br>";
echo "Lunghezza testo: " . strlen($paragrafo) . " caratteri<br><br>";


$parola_da_censurare = '';
if (array_key_exists('censura', $_GET) && $_GET['censura'] !== '') {
    $parola_da_censurare = $_GET['censura'];
}

if ($parola_da_censurare != '') {
    $paragrafo_censurato = str_replace($parola_da_censurare, '***', $paragrafo);
} else {
    $paragrafo_censurato = $paragrafo;
}


echo "<p>Paragrafo censurato: $paragrafo_censurato</p>";
echo "<p>Lunghezza censurata: " . strlen($paragrafo_censurato) . " caratteri</p>";
?>

</body>
</html>