<?php
ini_set('memory_limit', '1024M');
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Render index view
    $args = ['charlie', 'ismael'];
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/text-analyser', function (Request $request, Response $response, array $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/text-analyser', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->post('/string-analysis', function ($request, $response, $args) {
    $text = new \App\TextContainer();
    $textAnalyser = new \App\TextActionsContainer();
    $textAnalysis = $textAnalyser->analyseText($text->text);
    $wordCount = $textAnalyser->wordCount;
    $charCount = $textAnalyser->charCount;
    $longestWord = $textAnalyser->longestWord;
    $maxLength = $textAnalyser->biggestWordLength;
    $average = $textAnalyser->avgWordLength;
    $mostCommonLengthFrequency = $textAnalyser->mostCommonLengthFrequency;
    $wordLengthFrequency = $textAnalyser->wordLengthFrequency;
    $list = $textAnalyser->lengthFrequencyList;

    $args = ['wordCount'=>$wordCount, 'charCount'=>$charCount, 'longestWord'=>$longestWord, 'maxLength'=>$maxLength, 'average'=>$average, 'mostCommonLengthFrequency'=>$mostCommonLengthFrequency, 'wordLengthFrequency'=>$wordLengthFrequency, 'list'=>$list];

    return $this->renderer->render($response, 'results.phtml', $args);
});

$app->post('/file-analysis', function ($request, $response, $args) {
    $text = new \App\TextContainer();
    $textAnalyser = new \App\TextActionsContainer();
    $textAnalysis = $textAnalyser->analyseText($text->text);
    $wordCount = $textAnalyser->wordCount;
    $charCount = $textAnalyser->charCount;
    $longestWord = $textAnalyser->longestWord;
    $maxLength = $textAnalyser->biggestWordLength;
    $average = $textAnalyser->avgWordLength;
    $mostCommonLengthFrequency = $textAnalyser->mostCommonLengthFrequency;
    $wordLengthFrequency = $textAnalyser->wordLengthFrequency;
    $list = $textAnalyser->lengthFrequencyList;

    $args = ['wordCount'=>$wordCount, 'charCount'=>$charCount, 'longestWord'=>$longestWord, 'maxLength'=>$maxLength, 'average'=>$average, 'mostCommonLengthFrequency'=>$mostCommonLengthFrequency, 'wordLengthFrequency'=>$wordLengthFrequency, 'list'=>$list];

    return $this->renderer->render($response, 'results.phtml', $args);
});