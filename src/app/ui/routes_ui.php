<?php
$app->get('/', function ($request, $response) {
    return renderView($this->view, $response, 'creating');
});
$app->get('/collection', function ($request, $response, $args) {
    $arr = [];
    $arr['collection'] = $_GET['collection'] ?? 'THO';
    $arr['type'] = $_GET['type'] ?? '';
    return renderView($this->view, $response, 'collection', $arr);
});
$app->get('/{id}', function ($request, $response, $args) {
    $screenList = ['home', 'product', 'adminhome', 'productedit'];
    $screen = in_array(strtolower($args['id']), $screenList) ? $args['id'] : 'creating';
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
