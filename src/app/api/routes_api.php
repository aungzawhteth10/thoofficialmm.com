<?php
$app->get('/api/ApiHome', 'ApiHome:init');
$app->get('/api/ApiProduct', 'ApiProduct:init');
$app->post('/api/ApiAdmin', 'ApiAdmin:init');
// $app->get('/api/ApiHome', function ($request, $response, $args) {
//     return 'ApiHome';
// });
