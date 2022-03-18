<?php
$app->get('/api/ApiHome', 'ApiHome:init');
$app->get('/api/ApiProduct', 'ApiProduct:init');
$app->get('/api/ApiAdmin', 'ApiAdmin:init');
$app->post('/api/ApiAdmin/createJson', 'ApiAdmin:createJson');
$app->post('/api/ApiAdmin/addNewProduct', 'ApiAdmin:addNewProduct');
$app->get('/api/ApiProductEdit', 'App\api\ApiProductEdit:init');
$app->post('/api/ApiProductEdit/update', 'App\api\ApiProductEdit:update');
$app->post('/api/ApiProductEdit/uploadImage', 'App\api\ApiProductEdit:uploadImage');
$app->post('/api/ApiProductEdit/add2ImageList', 'App\api\ApiProductEdit:add2ImageList');

// $app->get('/api/ApiHome', function ($request, $response, $args) {
//     return 'ApiHome';
// });
