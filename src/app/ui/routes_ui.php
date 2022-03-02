<?php
$app->get('/', function ($request, $response) {
    return 'index';
});
$app->get('/{id}', function ($request, $response, $args) {
    return $args['id'];
});
