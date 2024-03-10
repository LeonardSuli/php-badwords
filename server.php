<?php

// var_dump($_GET);

// var_dump($_GET['sentence']);

// var_dump($_GET['word']);


$sentenceToCensor = $_GET['sentence'];

$wordToFind = $_GET['word'];


var_dump($sentenceToCensor, $wordToFind);

echo 'Original sentence:' . ' ' . $sentenceToCensor;
echo '(Original sentence length:' . ' ' . strlen($sentenceToCensor) . ')';


echo '<br>';


// var_dump(str_replace($wordToFind, '***', $sentenceToCensor));

$censoredSentence = str_replace($wordToFind, '***', $sentenceToCensor);

echo 'Censored sentence:' . ' ' . $censoredSentence;
echo '(Censored sentence length:' . ' ' . strlen($censoredSentence) . ')';


?>