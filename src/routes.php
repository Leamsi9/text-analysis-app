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
$app->post('/results', function ($request, $response, $args) {
    $targetText = new \App\TargetText;;
    $targetText->targetFile();
    $targetText->string;
    $text = $targetText->text;
    $wordArray = new \App\WordFinder;
    $wordList = $wordArray->wordArray($text);
    $wordCount = new \App\WordCounter();
    $words = $wordCount->wordCount($wordList);
    $sentenceCount = new \App\SentenceCounter();
    $sentenceCount->sentenceMatch($text);
    $lengths = new \App\WordLengthCalculator();
    $chars = $lengths->textLength($text);
    $lengths->avgWordLength($chars, $words);
//    $lengths->wordLengths($wordList);
    $lengths->longestWord($wordList);



    return $this->renderer->render($response, 'results.phtml', $args);
});

$app->post('/results2', function ($request, $response, $args) {




    return $this->renderer->render($response, 'results.phtml', $args);
});