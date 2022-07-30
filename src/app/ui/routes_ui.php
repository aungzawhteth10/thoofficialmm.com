<?php
$app->get('/', function ($request, $response) {
    return redirect('/home');
});
$app->get('/collection', function ($request, $response, $args) {
    if (!isPublish()) {
        return renderView($this->view, $response, 'creating');
    }
    $arr = [];
    $arr['collection'] = $_GET['collection'] ?? 'THO';
    $arr['type'] = $_GET['type'] ?? '';
    return renderView($this->view, $response, 'collection', $arr);
});
$app->get('/{id}', function ($request, $response, $args) {
    $key = $_GET['key'] ?? '';
    error_log(print_r($key, true));
    $screenList = ['home', 'product', 'adminhome', 'productedit'];
    $screen = in_array(strtolower($args['id']), $screenList) ? $args['id'] : 'creating';
    $screen = ((in_array(strtolower($screen), ['adminhome', 'productedit']) && $key != '55456875632212325')) ? 'home' : $screen;
    if (!isPublish()) {
        $screen = 'creating';
    }
    return renderView($this->view, $response, $screen);
});
// $app->get('/{id}/', function ($request, $response, $args) {
//     return redirect('/' . $args['id']);
// });
/*
 * リダイレクトする
 * @param  String リダイレクトするURL
 * @return String リダイレクトスクリプト
 */
function redirect ($url) 
{
    return '<script>location.href= "'. $url . '"</script>';
}
//render the view
function renderView($view, $response, $screen, $arr = []){
    $view->offsetSet('HtmlHelper', new \App\ui\HtmlHelper);
    return $view->render($response, $screen . '.twig', $arr);
}
function isPublish(){
    $jsonFilePath = getcwd() . '/src/app/files/publish.json';
    $publish = json_decode(file_get_contents($jsonFilePath), TRUE);
    error_log(print_r($publish, true));
    if ($publish['publish'] == 1) {
        return true;
    }
    return false;
}
