<?php
$app->get('/{id}', function ($request, $response, $args) {
    return $args['id'];
});
// $app->get('/', function ($request, $response) {
//     return 'index';
// });
