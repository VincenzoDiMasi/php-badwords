<?php
//Prendo i valori dal form nell HTML
$bad_word = $_GET['badword'];
$text = $_GET['text'];


$censured_text = str_replace($bad_word, '***' , $text);

$original_length = strlen($text);
$filtredtext_length = strlen($censured_text);

?>





<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censured Version</title>

    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container my-5">
        <!-- ORIGINAL TEXT -->
        <div class="border p-5 mb-3">
            <h3>IL TESTO ORIGINALE È:</h3>
            <p class="fw-bold">"<?=$text ?>"</p>
            <p>La lunghezza del testo originale è di <span class="text-danger fw-bold"><?= $original_length?> </span> caratteri.</p>
        </div>
          <!-- CENSURED TEXT -->
        <div class="border p-5">
            <h3>IL TESTO CENSURATO É:</h3>
            <p class="fw-bold">"<?=$censured_text ?>"</p>
            <p>La lunghezza del testo censurato è di <span class="text-success fw-bold"><?= $filtredtext_length?> </span> caratteri.</p>
        </div>
    </div>
</body>
</html>