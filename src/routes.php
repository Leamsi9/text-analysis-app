<?php
ini_set('memory_limit', '1024M');
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/text-analyser', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->post('/string-analysis', function ($request, $response, $args) {
    $targetText = new \App\TargetText;
    $targetText->getTargetString();
    $targetText->string;
    $text = $targetText->string;
    $wordFinder = new \App\WordFinder;
    $wordList = $wordFinder->getWordArray($text);
    $wordCounter = new \App\WordCounter();
    $wordCount = $wordCounter->getWordCount($wordList);
//    $sentenceCount = new \App\SentenceCounter();
//    $sentenceCount->sentenceMatch($text);
    $lengthCalculator = new \App\WordLengthCalculator();
    $chars = $lengthCalculator->getTextLength($wordList);
    $avgWordLength = $lengthCalculator->getAvgWordLength($chars, $wordCount);
    $longestWord = $lengthCalculator->getLongestWord($wordList);
    $wordLengths = $lengthCalculator->getLengthsArray($wordList);
    $lengthsSorter = new \App\LengthSorter();
    $wordLengthFrequency = $lengthsSorter->getWordLengthFrequency($wordLengths);
    $biggestWordLength = $lengthsSorter->getBiggestWordLength($wordLengths);
    $lengthFrequencyList = $lengthsSorter->listLengthFrequencies($wordLengthFrequency);
    $mostCommonLengthFrequency = $lengthsSorter->getMostCommonLengthFrequency($wordLengthFrequency);


    return $this->renderer->render($response, 'results.phtml', $args);
});

$app->post('/file-analysis', function ($request, $response, $args) {
    $targetText = new \App\TargetText;
    $targetText->getTargetString();
    $targetText->file;
    $text = $targetText->file;
    $wordFinder = new \App\WordFinder;
    $wordList = $wordFinder->getWordArray($text);
    $wordCounter = new \App\WordCounter();
    $wordCount = $wordCounter->getWordCount($wordList);
//    $sentenceCount = new \App\SentenceCounter();
//    $sentenceCount->sentenceMatch($text);
    $lengthCalculator = new \App\WordLengthCalculator();
    $chars = $lengthCalculator->getTextLength($wordList);
    $avgWordLength = $lengthCalculator->getAvgWordLength($chars, $wordCount);
    $longestWord = $lengthCalculator->getLongestWord($wordList);
    $wordLengths = $lengthCalculator->getLengthsArray($wordList);
    $lengthsSorter = new \App\LengthSorter();
    $wordLengthFrequency = $lengthsSorter->getWordLengthFrequency($wordLengths);
    $biggestWordLength = $lengthsSorter->getBiggestWordLength($wordLengths);
    $lengthFrequencyList = $lengthsSorter->listLengthFrequencies($wordLengthFrequency);
    $mostCommonLengthFrequency = $lengthsSorter->getMostCommonLengthFrequency($wordLengthFrequency);



    return $this->renderer->render($response, 'results.phtml', $args);
});