<?php
$app->get('/', function ($request, $response) {
    return 'home';
    return $this->view->render($response, 'creating.twig', []);
});
$app->get('/{id}/', function ($request, $response, $args) {
    return redirect('/' . $args['id']);
});
$app->get('/{id}', function ($request, $response, $args) {
    $screenList = ['home'];
    $screen = in_array(strtolower($args['id']), $screenList) ? $args['id'] : 'creating';
    return $this->view->render($response, $screen . '.twig', []);
});
/*
 * リダイレクトする
 * @param  String リダイレクトするURL
 * @return String リダイレクトスクリプト
 */
function redirect ($url) 
{
    return '<script>location.href= "'. $url . '"</script>';
}
