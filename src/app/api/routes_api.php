<?php
$app->get('/api/ApiHome', 'ApiHome:init');
$app->get('/api/ApiProduct', 'ApiProduct:init');
// $app->get('/api/ApiHome', function ($request, $response, $args) {
//     return 'ApiHome';
// });
