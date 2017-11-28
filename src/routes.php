<?php
ini_set('memory_limit', '1024M');
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Render index view
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
    return $this->renderer->render($response, 'results.phtml', $args);
});

$app->post('/file-analysis', function ($request, $response, $args) {
    return $this->renderer->render($response, 'results.phtml', $args);
});