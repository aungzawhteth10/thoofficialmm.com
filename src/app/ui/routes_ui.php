<?php
$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'creating.twig', []);
});
$app->get('/aaa', function ($request, $response) {
    return "aaa";
});
// $app->get('/{id}', function ($request, $response, $args) {
//     return $args['id'];
//     $screenList = ['home'];
//     $screen = in_array(strtolower($args['id']), $screenList) ? $args['id'] : 'creating';
//     return $this->view->render($response, $screen . '.twig', []);
// });
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
