<?php
namespace App\api;
class ApiProductEdit extends ApiBase
{
   public function init($request, $response)
   {
        $productCode = $_GET['code'];
        $result = [
            'images' => [],
            'info'   => [],
        ];
        $dbProductMapper = new \App\db\DbProductMapper;
        $dmProduct = new \App\model\DmProduct;
        $product =  $dbProductMapper->find();
        $product = array_column($product, null, 'product_code')[$productCode] ?? [];
        if (count($product) == 0) {
            return json_encode($result, JSON_UNESCAPED_UNICODE);
        }
        $images = explode(',', $product['images']);
        foreach ($images as $key => $value) {
            if ($value == '') {
                continue;
            }
            $result['images'][] = $value . '?' . time();
        }
        $result['info']   = [
            'product_id'           => $product['product_id'], 
            'product_code'         => $product['product_code'],
            'name'                 => $product['name'],
            'description'          => $product['description'],
            'size'                 => $product['size'],
            'price'                => $product['price'],
            'product_availability' => $product['avablility'],
        ];
        return json_encode($result, JSON_UNESCAPED_UNICODE);
   }
   public function update($request, $response)
   {
        $postData = $_POST;
        $dbProductMapper = new \App\db\DbProductMapper;
        $dmProduct = new \App\model\DmProduct;
        $dmProduct->product_id  = $postData['product_id'];
        $dmProduct->name        = $postData['product_name'];
        $dmProduct->size        = $postData['product_size'];
        $dmProduct->price       = $postData['product_price'];
        $dmProduct->description = $postData['product_description'];
        $dmProduct->avablility  = $postData['product_availability'];
        $count = $dbProductMapper->update($dmProduct);
        return json_encode($count, JSON_UNESCAPED_UNICODE);
   }
}
