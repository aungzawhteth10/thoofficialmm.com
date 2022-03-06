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
            $items[] = [
                'product_code' => $value['product_code'],
                'image'        => explode(',', $value['images'])[0], 'logo.png',
                'name'         => $value['name'],
                'price'        => $value['price'],
                'avablility'   => $value['avablility'],
            ];
        }
        return json_encode($items, JSON_UNESCAPED_UNICODE);
   }
}
