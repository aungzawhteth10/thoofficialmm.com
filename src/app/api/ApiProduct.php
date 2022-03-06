<?php
namespace App\api;
class ApiProduct extends ApiBase
{
   public function init($request, $response)
   {
        $productCode = $_GET['code'];
        $result = [
            'images' => [],
            'info'   => [],
        ];
        $jsonFilePath = getcwd() . '/src/app/files/product.json';
        $product = array_column(json_decode(file_get_contents($jsonFilePath), TRUE), null, 'product_code')[$productCode] ?? [];
        if (count($product) == 0) {
            return json_encode($result, JSON_UNESCAPED_UNICODE);
        }
        $images = explode(',', $product['images']);
        foreach ($images as $key => $value) {
            $result['images'][] = $value . '?' . time();
        }
        $result['info']   = [
            'name'        => $product['name'],
            'description' => $product['description'],
            'size'        => $product['size'],
            'price'       => $product['price'],
        ];
        return json_encode($result, JSON_UNESCAPED_UNICODE);
   }
}
