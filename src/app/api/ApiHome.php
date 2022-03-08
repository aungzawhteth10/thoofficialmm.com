<?php
namespace App\api;
class ApiHome extends ApiBase
{
   public function init($request, $response)
   {
        $items = [];
        $jsonFilePath = getcwd() . '/src/app/files/product.json';
        $productArr = json_decode(file_get_contents($jsonFilePath), TRUE);
        foreach ($productArr as $key => $value) {
            $images = explode(',', $value['images']);
            $image = ($images[0] == '') ? 'logo.png' : $images[0];
            $items[] = [
                'product_code' => $value['product_code'],
                'image'        => $image . '?' . time(),
                'name'         => $value['name'],
                'price'        => $value['price'],
                'avablility'   => $value['avablility'],
            ];
        }
        return json_encode($items, JSON_UNESCAPED_UNICODE);
   }
}
