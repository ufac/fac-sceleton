<?php
/**
 * Инициализация веб интерфейса
 */


require_once __DIR__ . '/../app/bootstrap.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    var_dump($_SERVER);
});

// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

$app->run();
